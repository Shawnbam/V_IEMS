@extends('partials.header')

@section('title')
    Profile
@endsection

@section('content')
    <div class="form-group">
        <form method="post" action="{{ route('editpro') }}">
            <div class="form-group">
                <label for="name" >Name</label><br>
                <input required class="form-control" type="text" id="name" name="name"  size="40" value="{{ Auth::User()->name }}">
            </div>
            <div class="form-group">
                <label for="email" >Email</label><br>
                <input required class="form-control" type="email" id="email" name="email"  size="40" value="{{ Auth::User()->email }}">
            </div>
            <div class="form-group">
                <label for="phone" >Phone</label><br>
                <input required class="form-control" type="number" id="phone" name="phone"  size="40" value="{{ Auth::User()->phone }}">
            </div>
            <div class="form-group">
                <label for="linkedin" >Linkedin</label><br>
                <input class="form-control" type="text" id="linkedin" name="linkedin"  size="40" value="{{ Auth::User()->linkedin }}">
            </div>
            <div class="form-group">
                <label for="twitter" >Twitter</label><br>
                <input class="form-control" type="text" id="twitter" name="twitter"  size="40" value="{{ Auth::User()->twitter }}">
            </div>
            <div class="form-group">
                <label for="fb" >Facebook</label><br>
                <input class="form-control" type="text" id="fb" name="fb"  size="40" value="{{ Auth::User()->fb }}">
            </div>
            <div class="form-group">
                <label for="github" >Github</label><br>
                <input class="form-control" type="text" id="github" name="github"  size="40" value="{{ Auth::User()->github }}">
            </div>
            <div class="form-group">
                <label for="github" >Tags</label><br>
                <input class="form-control" type="text" id="github" name="github"  size="40" value="{{ Auth::User()->tags }}">
                <small> <a data-toggle="modal" data-target="#myModal">Add tag?</a></small>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Save</button>
            {{ csrf_field() }}
        </form>
    </div>






    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div  class="modal-content">
                <div class="modal-header">
                    <h4         class="modal-title">Add new tags to list
                    </h4>
                </div>
                <div         class="modal-body">
                    <form action="{{ route('tag.createTagp') }}" method="post">
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
