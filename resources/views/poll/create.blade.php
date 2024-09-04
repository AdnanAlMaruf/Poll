<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Poll</title>
</head>

<body>
    <div class="container">
        @if (session('success'))
            <div class="card-panel green lighten-4 green-text text-darken-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">

            <h2 class="center">New Poll</h2>

            <form class="col s12" method="post" action="{{ route('poll.store') }}">

                @csrf
                <div class="row">
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input required="required" name="title" id="title" type="text" class="validate">
                        <label for="title">Title</label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-field col s4">
                        <select name="category" id="category">
                            <option value="" disabled selected>Select a Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <label for="category">Category</label>
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>


                    <div class="input-field col s4">
                        <input required="required" type="text" class="datepicker" placeholder="start date"
                            name="start_date">
                        <label for="title">start date</label>
                        @error('start_date')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="input-field col s4">
                        <input required="required" type="text" class="timepicker" placeholder="start time"
                            name="start_time">
                        <label for="title">start time</label>
                    </div>
                    <div class="input-field col s4">
                        <input required="required" type="text" class="datepicker" placeholder="end date"
                            name="end_date">
                        <label for="end_date">end date</label>
                    </div>

                    <div class="input-field col s4">
                        <input required="required" type="text" class="timepicker" placeholder="end time"
                            name="end_time">
                        <label for="title">end time</label>
                        @error('end_time')
                            {{ $message }}
                        @enderror
                    </div>


                </div>

                @php
                    $a = [1, 2, 3, 4];
                @endphp
                <div class="row col s12" x-data="{
                    optionsNumber: 2
                }">
                    <h4>
                        Options
                    </h4>
                    <template x-for="i,index in optionsNumber">
                        <div class="row">
                            <div class="col s6">
                                <input required="required" name="options[][content]" id="title" type="text"
                                    class="validate" :placeholder="`Option` + i">
                            </div>

                            <div class="col s6">
                                <button
                                    x-on:click="optionsNumber > 2 ? optionsNumber-- : alert('poll must has at least 2 options')"
                                    class="waves-effect waves-light btn red darken-4" type="button">
                                    remove
                                </button>
                            </div>
                        </div>
                </div>
                </template>
                <button x-on:click="optionsNumber++" class="waves-effect waves-light btn info darken-2" type="button">
                    add option
                </button>
                <hr>
                <div class="center">

                    <button class="waves-effect waves-light btn cyan darken-2" type="submit">
                        Create
                    </button>
                </div>
        </div>
        </form>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dates = document.querySelectorAll('.datepicker');
            var timepickers = document.querySelectorAll('.timepicker');
            var selects = document.querySelectorAll('select');

            M.Datepicker.init(dates);
            M.Timepicker.init(timepickers);
            M.FormSelect.init(selects);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</body>

</html>
