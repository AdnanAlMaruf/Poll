@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">sl no.</th>
                <th scope="col">Title</th>
                <th scope="col">Options</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($polls as $poll)
                    @php $first = true; @endphp
                    @foreach($poll->options as $option)
                        <tr>
                            @if($first)
                                <th scope="row">{{$loop->parent->iteration}}</th> <!-- Corrected serial number -->
                                <td>{{ $poll->title }}</td>
                                @php $first = false; @endphp
                            @else
                                <td></td>
                                <td></td>
                            @endif
                            <td>{{ $option->content }}</td>
                            @if($loop->first)
                            <td rowspan="{{ $poll->options->count() }}">
                                <a href="{{ route('vote.results', $poll->id) }}">Show</a>
                                {{-- <a href="{{ route('poll.edit', $poll->id) }}">Edit</a> --}}
                                <form action="{{ route('poll.destroy', $poll->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete this poll?')">Delete</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
