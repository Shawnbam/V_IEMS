@extends('partials.header')

@section('title')
    Homepage
@endsection
{{--@section('content')--}}
{{--<section class="row posts">--}}
{{--<div class="col-md-6 col-md-offset-3 abc">--}}
{{--<header><h3>RECENT POSTS</h3></header>--}}
{{--@foreach($posts as $post)--}}
{{--<article class="post" data-postid="{{ $post->id }}">--}}
{{--<div class="title"><h2> {{ $post->title }} </h2></div>--}}
{{--<div class="body">--}}
{{--<p> {{$post->body}} </p>--}}
{{--</div>--}}
{{--<div class="info">--}}
{{--Posted by {{ $post->user->name }} on {{ $post->created_at }}--}}
{{--</div>--}}
{{--<div class="interaction">--}}
{{--<a href="#" class="like">Like</a>   |--}}
{{--<a href="#" class="like">Dislike</a>   |--}}
{{--@if(Auth::user() == $post->user)--}}
{{--<a href="#" class="edit">Edit</a>   |--}}
{{--<a href="#">Delete</a>--}}
{{--@endif--}}
{{--</div>--}}
{{--</article>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</section>--}}
{{--<div class="col-sm-9 ">--}}

{{--<div class="col-sm-11 "><input type="text" class="form-control" placeholder="Search.."></div>--}}

{{--<button type="button" class="btn btn-info btn-default" ><i class="fa fa-search" aria-hidden="true"></i> </button>--}}

{{--<br><br>--}}

{{--<a type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModala" style="float: right;">--}}
{{--Add a Post--}}
{{--</a>--}}
{{--<a type="button" class="btn btn-info btn-lg" data-toggle="modal" href="{{ route('posts.addpost') }}" style="float: right;">--}}
{{--Add a Post--}}
{{--</a>--}}

{{--<h4>--}}
{{--<small>--}}
{{--RECENT POSTS--}}
{{--</small>--}}
{{--</h4>--}}
{{--<hr>--}}

{{--<div class="container-fluid" id="post">--}}

{{--<h2>I Love Food</h2>--}}
{{--<h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>--}}
{{--<div class="col-sm-4">--}}
{{--<img src="http://eskipaper.com/images/image-2.jpg" class="img-rounded img-responsive" alt="Cinque Terre">--}}
{{--</div>--}}
{{--<br>--}}
{{--<p>--}}
{{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum quam dui. Aenean luctus metus id arcu molestie elementum. Duis rhoncus, est sed lacinia feugiat, ex purus rutrum nisl, sagittis tincidunt orci lacus at ex. Phasellus molestie dictum tortor, eget ultrices massa lacinia vitae. Proin id laoreet velit, et dictum turpis. Proin viverra, erat sed porttitor gravida, enim justo dictum dui, vitae dignissim justo neque et nulla. Aenean elementum quam sed porta tincidunt. Mauris vitae suscipit libero, sit amet lobortis elit. Nunc condimentum dolor quis purus condimentum, sit amet pretium nulla gravida. Cras sollicitudin justo et magna pellentesque volutpat. Aliquam efficitur, nibh vel iaculis sagittis, diam mauris efficitur dolor, non venenatis sem dui ac felis. Maecenas dignissim ligula sit amet justo finibus, a pretium magna aliquam.--}}

{{--Nullam at est mi. Nulla vel egestas enim. Donec id ipsum nec arcu porttitor sodales quis sit amet dolor. Vestibulum et mi ac lectus eleifend ultricies at vitae sapien. Vestibulum ut libero pulvinar, tempus orci id, laoreet odio. Mauris quis accumsan urna. Nunc fermentum velit eu purus tempus blandit. Integer id turpis nisl.--}}

{{--In vitae accumsan libero, eu faucibus nisl. Vivamus et ipsum sit amet tellus rhoncus ullamcorper venenatis at elit. Aliquam accumsan aliquet nunc eget pharetra. Curabitur cursus scelerisque urna, at lacinia nisl auctor quis. Vestibulum at rutrum ipsum. Integer rhoncus blandit laoreet. Donec quam sem, hendrerit quis ultricies placerat, posuere vel est. Nam placerat nisl nec tortor consectetur porta. Integer accumsan dictum nunc in dapibus. Sed commodo ornare nulla, et venenatis magna ullamcorper at.--}}
{{--</p>--}}
{{--<hr>--}}
{{--</div>--}}

{{--</div>--}}



{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="myModala" role="dialog">--}}
{{--<div class="modal-dialog">--}}

{{--<!-- Modal content-->--}}
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

{{--</div>--}}
{{--</div>--}}

{{--@endsection--}}


@section('title')
    Homepage
@endsection

@section('content')
    @include('partials.message-block')
    @foreach($queries as $query)
        <article class="post panel panel-default" data-queryid="{{ $query->id }}">
            <b>{{ $query->qtitle }}</b> :-
            <p class="lead"> {!! $query->qbody !!} </p>
            {{--<p> {{ substr(strip_tags($post->body),0,10) }}{{ strlen(strip_tags($post->body)) >10 ? "..." : "" }} </p>--}}
            <div class="info">
                Posted by {{ $query->user->name }} on {{ $query->created_at }}
            </div>
            <div class="infooo">
                Tags: {{ $query->user->tags }}
            </div>
            <div class="interaction">
                <!--addy-->
                <div class="likecnt">{{$query->qlikecnt}}</div>
                <a href="#" class = "qlike">{{Auth::user()->likes()->where('query_id',$query->id)->first()? Auth::user()->likes()->where('query_id',$query->id)->first()->qlike == 1 ? 'Liked' : 'Like' : 'Like'}}</a> |
                <div class="dislikecnt">{{$query->qdislikecnt}}</div>
                <a href="#" class = "qlike">{{Auth::user()->likes()->where('query_id',$query->id)->first()? Auth::user()->likes()->where('query_id',$query->id)->first()->qlike == 0 ? 'Disliked' : 'Dislike' : 'Dislike'}}</a>
                @if(Auth::user() == $query->user)
                    |   <a href="{{ route('query.edit', ['queryid' => $query->id]) }}" class="edit">Edit</a>   |

                    <a href="{{ route('query.delete',['query_id' => $query->id]) }}">Delete</a>
                @endif
                <a href="{{ route('query.view',['query_id' => $query->id]) }}">| Read more</a>
            </div>
        </article>
    @endforeach
    <!--   addy   -->
    <script>
        var token = '{{Session::token()}}';
        var urlQLike = '{{route('qlike')}}';
    </script>
@endsection



@if($recs)
@section('rec')
    <strong>Recommendations :- </strong>
    <div class="pre-scrollable">
        @foreach($recs as $rec)
            <article class="recs panel panel-default" data-postid="{{ $rec->id }}">
                <b>{{ $rec->qtitle }}</b> :-
                <p class="lead" style="word-wrap: normal;"> {!! $rec->qbody !!} </p>
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