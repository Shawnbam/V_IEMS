@extends('partials.header')

@section('title')
    Profile
@endsection

@section('content')
    <div class="form-group">
        <label for="name" >Name</label><br>
        <p>{{ Auth::user()->id }}</p>
        <label for="roll" >Roll No.</label><br>
        <p>{{ Auth::user()->id }}</p>
        <label for="phone" >Phone</label><br>
        <p>{{ Auth::user()->id }}</p>
        <label for="name" >Name</label><br>
        <p>{{ Auth::user()->id }}</p>
        <label for="name" >Name</label><br>
        <p>{{ Auth::user()->id }}</p>
        <label for="name" >Name</label><br>
        <p>{{ Auth::user()->id }}</p>
    </div>

@endsection
