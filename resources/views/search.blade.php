@extends('partials.header')


@section('title')
    Search Results
@endsection

@section('content')
    @include('partials.message-block')
    @foreach($posts as $post)
        <article class="post panel panel-default" data-postid="{{ $post->id }}">
            <b>{{ $post->title }}</b> :-
            <p class="lead" style="word-wrap: normal;"> {!! $post->body !!} </p>
            <div class="info">
                Posted by {{ $post->user->name }} on {{ $post->created_at }}
            </div>
            <div class="interaction">
                <div class="likecnt">{{ $post->plikecnt }}</div>
                <a href="#" class="plike">{{ Auth::user()->plikes()->where('post_id', $post->id)->first() ? Auth::user()->plikes()->where('post_id', $post->id)->first()->like == 1 ? 'Liked' : 'Like' : 'Like' }}</a>   |
                <div class="dislikecnt">{{ $post->pdislikecnt }}</div>
                <a href="#" class="plike">{{ Auth::user()->plikes()->where('post_id', $post->id)->first() ? Auth::user()->plikes()->where('post_id', $post->id)->first()->like == 0 ? 'Disliked' : 'Dislike' : 'Dislike' }}</a>   |
                @if(Auth::user() == $post->user)
                    <a href="{{ route('post.edit', ['post_id' => $post->id]) }}" class="edit">Edit</a>   |
                    <a href="{{ route('post.delete',['post_id' => $post->id]) }}">Delete</a> |
                @endif
                <a href="{{ route('post.view',['post_id' => $post->id]) }}">Read more</a>
            </div>
        </article>
    @endforeach
    <script>
        var token = ' {{ Session::token() }} ';
        var urlLike = ' {{ route('plike') }} ';
    </script>

@endsection