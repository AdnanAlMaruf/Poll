@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2>{{ $poll->title }} - Results</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Option</th>
                <th>Votes</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            @forelse($options as $option)
                <tr>
                    <td>{{ $option['content'] }}</td>
                    <td>{{ $option['votes'] }}</td>
                    <td>{{ $option['percentage'] }}%</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No options available</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Total Votes</th>
                <td colspan="2">{{ $totalVotes }}</td>
            </tr>
        </tfoot>
    </table>

    <a href="" class="btn btn-primary">Back to Poll</a>
</div>
@endsection
