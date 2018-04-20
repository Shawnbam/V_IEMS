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
        <article class="post panel panel-default">
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
            <div class="interaction">
                @if(Auth::User()->name == "admin")
                    <a class="nav-link" href="{{ route('approveit', ['post_id' => $post->id]) }}">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span class="nav-link-text">Approve</span>
                    </a>
                @endif
            </div>
        </article>
    @endforeach
    <script>
        var token = ' {{ Session::token() }} ';
        var urlLike = ' {{ route('plike') }} ';
    </script>

@endsection

