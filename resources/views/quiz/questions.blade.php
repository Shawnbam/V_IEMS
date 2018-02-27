@extends('partials.header')

@section('content')
    <strong>Unique Code for this test is {{ $uniqueid }} <small>(Also viewable in my quiz)</small></strong>
    <h2>Enter the questions below.</h2>
    <form action="{{ route('qstore',['cnt' => $cnt])}}" method="post">
        @foreach($arr as $a)
            <div class="container form-group row" data-idd="{{ $a }}">
                {{ $a }}.
                <textarea name="txt[]"></textarea>
                <label for="o1">Option 1</label>
                <input type="text" name="o1[]" class="form-control" id="o1">
                <label for="o2">Option 2</label>
                <input type="text" name="o2[]" class="form-control" id="o2">
                <label for="o3">Option 3</label>
                <input type="text" name="o3[]" class="form-control" id="o3">
                <label for="o4">Option 4</label>
                <input type="text" name="o4[]" class="form-control" id="o4">
                <label for="o4">Correct Option</label>
                <select class="form-control" name="opt[]" id="sel1">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                </select>
                <hr>
            </div>
        @endforeach
        <div class="form-group">
            <input type="hidden" name="quizid" class="form-control" id="formGroupExampleInput2" value="{{$examinfo->id}}" readonly>
        </div>
            <button type="submit" class="btn btn-primary">Done</button>
        {{ csrf_field() }}
    </form>
@endsection

