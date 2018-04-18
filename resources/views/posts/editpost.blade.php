@extends('partials.header')


@section('title')
    Edit Post
@endsection


@section('content')
    @include('partials.message-block')
    <section class="row new-post">
        <div class="col-md-10 centered">
            <header>
                <h3>Edit</h3>
            </header>
            <form action="{{ route('post.update') }}" method="post">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <label for="title"> <b> Title </b> </label>
                <input type="text" value="{{ $post->title}}" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                <br>

                <label for="body"> <b> Description </b> </label>
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="body" name="body">{!! $post->body !!}</textarea>
                <br>

                {{--<label> Upload Image <br> </label>--}}

                {{--<input id="input-b1" name="input-b1" type="file" class="form-control" >--}}
                <button type="submit" class="btn btn-danger" name="cbtn" value="delete">Delete</button>
                <button type="submit" class="btn btn-primary" name="cbtn" value="update">Update</button>
                {{ csrf_field() }}
            </form>
        </div>
    </section>

@endsection

