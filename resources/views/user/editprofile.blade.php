@extends('partials.header')

@section('title')
    Profile
@endsection

@section('content')
    <div class="form-group">
        <form method="post" action="{{ route('editpro') }}">
            <div class="form-group">
                <label for="name" >Name</label><br>
                <input class="form-control" type="text" id="name" name="name"  size="40" value="{{ Auth::User()->name }}">
            </div>
            <div class="form-group">
                <label for="email" >Email</label><br>
                <input class="form-control" type="email" id="email" name="email"  size="40" value="{{ Auth::User()->email }}">
            </div>
            <div class="form-group">
                <label for="phone" >Phone</label><br>
                <input class="form-control" type="number" id="phone" name="phone"  size="40" value="{{ Auth::User()->phone }}">
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

            <button type="submit" class="btn btn-primary" name="submit">Save</button>
            {{ csrf_field() }}
        </form>
    </div>

@endsection
