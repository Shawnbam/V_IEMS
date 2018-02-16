@extends('partials.header')

@section('content')
    <form class="form-prevent-multiple-submits" method="post" action="{{ route('quiz.store') }}">
        <div class="form-group">
            <label for="Course">Quiz Name</label>
            <input type="text" class="form-control" id="Course" name="Course" aria-describedby="emailHelp" placeholder="Red Black trees" required>
        </div>
        <div class="form-group">
            <label for="question_lenth">Number Of Question</label>
            <input type="text" class="form-control" id="question_lenth" name="question_lenth" aria-describedby="emailHelp" placeholder="E.g 10" required>
        </div>
        <div class="form-group">
            <label for="time">Set time</label>
            <input type="text" class="form-control" id="time" name="time" placeholder="Enter In Minite" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        {{ csrf_field() }}
    </form>
@endsection