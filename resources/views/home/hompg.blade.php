@extends('partials.header')



@section('title')
    Homepage
@endsection
@section('styles')
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
@endsection
@section('content')
    @include('partials.message-block')
            @foreach($posts as $post)
                <article class="post panel panel-default" data-postid="{{ $post->id }}">
                    <b>{{ $post->title }}</b> :-
                    <p class="lead" style="word-wrap: normal;"> {!! $post->body !!} </p>
                    <div class="info">
                        Posted by
                        @if(Auth::User()->name == $post->user->name)
                            <b>you</b> on {{ $post->created_at }}
                        @else
                            {{ $post->user->name }} on {{ $post->created_at }}
                        @endif
                    </div>
                    <div class="infooo">
                        Tags: {{ $post->tags }}
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

@if(isset($recs))
    @section('rec')
        <strong>Recommendations :- </strong>
        <div class="pre-scrollable">
            @foreach($recs as $rec)
                <article class="recs panel panel-default" data-postid="{{ $rec->id }}">
                    <b>{{ $rec->title }}</b> :-
                    <p class="lead" style="word-wrap: normal;"> {!! $rec->body !!} </p>
                    <div class="infoo">
                        Posted by {{ $rec->user->name }} on {{ $rec->created_at }}
                    </div>
                    <div class="interaction">
                        <a href="{{ route('post.view',['post_id' => $rec->id]) }}">Read more</a>
                    </div>
                </article>
            @endforeach

        </div>
    @endsection
@endif