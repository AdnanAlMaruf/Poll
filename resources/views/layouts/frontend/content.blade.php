<div class="container">
    <div class="row header-text">
        @foreach ($polls as $poll)

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header text-center">Live Voting</div>
                    <div class="card-body">
                        <div class="text-center italic">
                            <h3>{{ $poll->title }}</h3>
                        </div>
                        <hr>
                        @if (now()->greaterThan($poll->end_at))
                            <div class="alert alert-success">This poll has ended. Voting is closed.</div>
                        @else
                            <form class="px-4 vote-form" method="POST" action="{{ route('vote.store', $poll->id) }}">
                                @csrf
                                <p>
                                    <strong>Your Vote:</strong>
                                </p>
                                @foreach ($poll->options as $option)
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="option_id"
                                            id="option{{ $option->id }}" value="{{ $option->id }}">
                                        <label class="form-check-label" for="option{{ $option->id }}">
                                            {{ $option->content }}
                                        </label>
                                    </div>
                                @endforeach

                                <div>
                                    <button type="submit" class="btn btn-large btn-success mr-2">Vote</button>
                                    <a href="#" class="pull-right btn btn-primary">View detailed results</a>
                                </div>
                            </form>
                        @endif

                        <!-- Poll Results -->
                        <table class="table table-bordered mt-4 results-table">
                            <thead>
                                <tr>
                                    <th>Options</th>
                                    <th>Votes</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poll->options as $option)
                                    <tr>
                                        <td>{{ $option->content }}</td>
                                        <td>{{ $option->votes->count() }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar
                                                    @if ($loop->index % 4 == 0) bg-success
                                                    @elseif($loop->index % 4 == 1) bg-info
                                                    @elseif($loop->index % 4 == 2) bg-warning
                                                    @else bg-danger @endif"
                                                    role="progressbar" style="width: {{ $option->percentage }}%;"
                                                    aria-valuenow="{{ $option->percentage }}" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    {{ $option->percentage }}%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Votes</th>
                                    <td colspan="2">{{ $poll->votes->count() }}</td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
