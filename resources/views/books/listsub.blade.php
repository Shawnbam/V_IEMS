@extends('partials.header')

@section('title')
    List Subjects
@endsection

@section('content')
    @foreach($subjects as $subject)
        <b>{{ $subject->bookname }}</b><br>
        <b>{{ $subject->branch }}</b><br>
        <b>{{ $subject->sem }}</b><br>
    @endforeach
@endsection