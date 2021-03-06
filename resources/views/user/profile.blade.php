@extends('partials.header')

@section('title')
    Profile
@endsection

@section('content')
    @if(isset($err))
        <div class="row">
            <div class="alert alert-danger">
                {{ $err }}
            </div>
        </div>
    @endif

        <div class="row">

           <form action="{{ route('img') }}" method="post" enctype="multipart/form-data">

            @if(Auth::User()->img == null)
                <i class="fa fa-user" aria-hidden="true" style="font-size:200px;"></i>
            @else
                    <img src="{{ asset(Auth::User()->img) }}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
            @endif
                <br>
                <input type="file" name="img" id="img" accept="image/*" required/><br>
                <button type="submit" class="btn btn-primary btnshow" name="btnshow" id="btnshow">Change Image</button>
                {{ csrf_field() }}
            </form>

                </div>
                </div>
        <br>
        <div class="row">
            <div class="col-sm-10">
                <h3 class=""><u>{{ Auth::user()->name }}</u></h3>
                <a class="btn btn-primary pull-left" href="{{ route('editprofile') }}">Edit Profile</a>

            </div>

            <div class="col-sm-4">
                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Roll No</strong></span>{{ Auth::user()->roll }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Email</strong></span> {{ Auth::user()->email }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Phone</strong></span> {{ Auth::user()->phone }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Department</strong></span> {{ Auth::user()->dept }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Tags</strong></span> {{ Auth::user()->tags }}</li>
                </ul>
            </div>

            <div class="col-sm-4">

                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> {{ Auth::user()->posts()->count() }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Post Comments</strong></span> {{ Auth::user()->pcomments()->count() }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Queries</strong></span> {{ Auth::user()->queries()->count() }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Query Comments</strong></span> {{ Auth::user()->qcomments()->count() }}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> {{ Auth::user()->posts()->sum('plikecnt') }}</li>
                </ul>
            </div>
            <div class="col-sm-4" >
                <ul class="list-group">
                    <li class="list-group-item text-muted">Social Media<i class="fa fa-dashboard fa-1x"></i>
                    </li>

                    <li class="list-group-item text-right" >
                        <span class="pull-left">
                            <strong>LinkedIn</strong>
                        </span>
                        <div class="wordwrap">
                        {{ Auth::user()->linkedin }}
                        </div>
                    </li>

                    <li class="list-group-item text-right" >
                        <span class="pull-left">
                            <strong>Twitter</strong></span>
                        <div class="wordwrap">
                             {{ Auth::user()->twitter }}
                        </div>
                    </li>

                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong>Facebook</strong></span>
                        <div class="wordwrap">
                             {{ Auth::user()->fb }}
                        </div>
                    </li>

                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong>Github</strong></span>
                        <div class="wordwrap">
                            {{ Auth::user()->github }}
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endsection
