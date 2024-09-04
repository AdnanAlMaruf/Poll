<div class="container">
    <div class="row header-text">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">{{ $poll->title }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('vote.store', $poll->id) }}">
                        @csrf
                        @foreach ($poll->options as $option)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="option_id" id="option{{ $option->id }}" value="{{ $option->id }}">
                                <label class="form-check-label" for="option{{ $option->id }}">
                                    {{ $option->content }}
                                </label>
                                
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-success">Vote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
