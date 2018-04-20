@extends('partials.header')

@section('title')
    Add you idea
@endsection


@section('title')
    Collaborate
@endsection

@section('content')
    @include('partials.message-block')
    <form method="POST" action="{{ route('collab.save') }}">
        <div class="container">
            <div class="form-group">
                <label for="title">Title :</label><br>
                <input class="form-control col-md-6" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="idea">Idea :</label><br>
                <textarea class="form-control" type="text" rows="15" name="idea" id="idea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post the IDEA</button>
        </div>
        {{ csrf_field() }}
    </form>
@endsection