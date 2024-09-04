@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <h2>Edit Poll</h2>

        <form method="post" action="{{ route('poll.update', $poll->id) }}">
            @csrf
            <div class="row">
                <div class="input-field col s4">
                    <input required="required" name="title" id="title" type="text" value="{{ $poll->title }}">
                    <label for="title">Title</label>
                </div>

                <div class="input-field col s4">
                    <input required="required" name="category" id="category" type="text" value="{{ $poll->category }}">
                    <label for="category">Category</label>
                </div>

                <div class="input-field col s4">
                    <input required="required" type="text" class="datepicker" name="start_date"
                        value="{{ \Carbon\Carbon::parse($poll->start_at)->format('Y-m-d') }}">
                    <input required="required" type="text" class="timepicker" name="start_time"
                        value="{{ \Carbon\Carbon::parse($poll->start_at)->format('H:i') }}">
                    <label for="start_date">Start Date & Time</label>
                </div>

                <div class="input-field col s4">
                    <input required="required" type="text" class="datepicker" name="end_date"
                        value="{{ \Carbon\Carbon::parse($poll->end_at)->format('Y-m-d') }}">
                    <input required="required" type="text" class="timepicker" name="end_time"
                        value="{{ \Carbon\Carbon::parse($poll->end_at)->format('H:i') }}">
                    <label for="end_date">End Date & Time</label>
                </div>

                <div class="row col s12" x-data="{ optionsNumber: {{ $poll->options->count() }} }">
                    <h4>Options</h4>
                    @foreach ($poll->options as $option)
                        <div class="row">
                            <div class="col s6">
                                <input required="required" name="options[{{ $loop->index }}][content]" type="text"
                                    class="validate" value="{{ $option->content }}">
                                <input type="hidden" name="options[{{ $loop->index }}][id]" value="{{ $option->id }}">
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="waves-effect waves-light btn cyan darken-2" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
