@extends('partials.header')


@section('title')
    Add Post
@endsection


@section('content')
    @include('partials.message-block')
    <section class="row new-post">
        <div class="col-md-10 centered">
            <header>
                <h3>What do you have to say?</h3>
            </header>
            <form action="{{ route('post.create') }}" method="post">
                <label for="title"> <b> Title </b> </label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                <br>

                <label for="body"> <b> Description </b> </label>
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="body" name="body"></textarea>
                <br>

                {{--<label> Upload Image <br> </label>--}}

                {{--<input id="input-b1" name="input-b1" type="file" class="form-control" >--}}

                <button type="submit" class="btn btn-primary">Post</button>
                {{ csrf_field() }}
            </form>
        </div>
    </section>

    {{--<div class="modal-content ">--}}
        {{--<div class="modal-header ">--}}
            {{--<button type="button" class="close" data-dismiss="modal">--}}
                {{--&times;--}}
            {{--</button>--}}
            {{--<h3 class="modal-title">--}}
                {{--Add a Post--}}
            {{--</h3>--}}
        {{--</div>--}}
        {{--<div class="modal-body">--}}
            {{--<label>--}}
                {{--<b>--}}
                    {{--Topic--}}
                {{--</b>--}}
            {{--</label>--}}

            {{--<input type="text" class="form-control" placeholder="Enter Topic" name="uname" required>--}}
            {{--<br>--}}

            {{--<label>--}}
                {{--<b>--}}
                    {{--Description--}}
                {{--</b>--}}
            {{--</label>--}}

            {{--<textarea  placeholder="Enter Description" class="form-control" rows="5" id="comment"></textarea>--}}
            {{--<br>--}}

            {{--<label>--}}
                {{--Upload Image--}}
                {{--<br>--}}
            {{--</label>--}}

            {{--<input id="input-b1" name="input-b1" type="file" class="form-control" >--}}

            {{--<br>--}}
            {{--<button type="submit" class="form-control">Post</button>--}}
        {{--</div>--}}

        {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection

