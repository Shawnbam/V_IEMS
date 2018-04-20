@extends('partials.header')


@section('title')
    Add a Journal
@endsection


@section('content')
    @include('partials.message-block')
    <section class="row new-post">
        <div class="col-md-10 centered">
            <header>
                <h3>Post you Journal</h3>
                <small style="color: red">&ensp;Add Links using the editor if necessary</small>
            </header>
            <form action="{{ route('postj') }}" method="post">
                <label for="title"> <b> Title </b> </label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                <br>

                <label for="body"> <b> Description </b> </label>
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="body" name="body"></textarea>
                <br>

                <button type="submit" class="btn btn-primary">Post</button>
                {{ csrf_field() }}
            </form>
        </div>
    </section>



@endsection

