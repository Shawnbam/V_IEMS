@extends('partials.headerq')


@section('title')
    Post a Query
@endsection


@section('content')
    @include('partials.message-block')
    <section class="row new-post">
        <div class="col-md-10 centered">
            <header>
                <h3>Post your query</h3>
            </header>
            <form action="{{ route('query.create') }}" method="post">
                <label for="title"> <b> Title </b> </label>
                <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                <br>

                <label for="body"> <b> Description </b> </label>
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="body" name="body"></textarea>
                <br>
                <label for="title"><b>Search Tags</b></label>
                <select class="js-example-basic-multiple form-control" name="tags[]" id="tags" multiple="multiple">
                    @foreach($tags as $tag)
                        <option>{{ $tag->tag_name }}</option>
                    @endforeach
                </select>
                <small> <a data-toggle="modal" data-target="#myModal">cant find your tag?</a></small>
                <br><br>
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div  class="modal-content">
                <div class="modal-header">
                    <h4         class="modal-title">Add new tags to list
                    </h4>
                </div>
                <div         class="modal-body">
                    <form action="{{ route('tag.createTag') }}" method="post">
                        <label for="title"><b>Add Tags</b></label>
                        <input type="text" class="form-control" placeholder="Add tags" name="addtags" id="addtags" >
                        <button type="submit" class="btn btn-primary">Add</button>
                        {{ csrf_field() }}
                    </form>
                    <br>

                </div>
                <div         class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('select.js-example-basic-multiple').select2();
        });

        /*$(window).ready(function() {
            $('select.js-example-basic-multiple').select2();
        });*/
    </script>
@endsection


