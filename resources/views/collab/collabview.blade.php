@extends('partials.header')

@section('title')
    Collaborate
@endsection


@section('title')
    Collaborate
@endsection

@section('content')
    @include('partials.message-block')
    <a class="btn btn-success" href="{{ route('collab.post') }}">Post your idea</a>
    <br><br>
    @foreach($collaborates as $collaborate)
        <article class="post panel panel-default" data-postid="{{ $collaborate->id }}">
            <b>{{ $collaborate->title }}</b> :-
            <p class="lead" style="word-wrap: normal;"> {!! $collaborate->idea !!} </p>
            {{--<p> {{ substr(strip_tags($post->body),0,10) }}{{ strlen(strip_tags($post->body)) >10 ? "..." : "" }} </p>--}}
            <div class="info">
                Posted by {{ $collaborate->user->name }} on {{ $collaborate->created_at }}
            </div>
            {{--<button class="btn btn-outline-success" href="#">Collaborate</button>--}}
            <a class="btn btn-outline-success" href="{{ route('collab.with',['collab_id' => $collaborate->id]) }}">Collaborate</a>
        </article>
    @endforeach



@endsection