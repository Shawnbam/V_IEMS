@extends('partials.noheader')

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
    <article class="post panel panel-default" data-postid="{{ $post->id }}">
        <b>{{ $post->title }}</b> :-
        <p class="lead"> {!! $post->body !!} </p>
        {{--<p> {{ substr(strip_tags($post->body),0,10) }}{{ strlen(strip_tags($post->body)) >10 ? "..." : "" }} </p>--}}
        <div class="info">
            Posted by {{ $post->user->name }} on {{ $post->created_at }}
        </div>
        <div class="interaction">
            <div class="likecnt">{{ $post->plikecnt }}</div>
            <a href="#" class="plike">{{ Auth::user()->plikes()->where('post_id', $post->id)->first() ? Auth::user()->plikes()->where('post_id', $post->id)->first()->like == 1 ? 'Liked' : 'Like' : 'Like' }}</a>   |
            <div class="dislikecnt">{{ $post->pdislikecnt }}</div>
            <a href="#" class="plike">{{ Auth::user()->plikes()->where('post_id', $post->id)->first() ? Auth::user()->plikes()->where('post_id', $post->id)->first()->like == 0 ? 'Disliked' : 'Dislike' : 'Dislike' }}</a>   |
            @if(Auth::user() == $post->user)
                <a href="#" class="edit">Edit</a>   |
                <a href="{{ route('post.delete',['post_id' => $post->id]) }}">Delete</a>
            @endif
        </div>
    </article>

    <div class="row">
        <div class="col-md-10">
            <form action="{{ route('pcomment.save', ['post_id' => $post->id, 'user_id' => Auth::user()->id, 'uname' => Auth::user()->name]) }}" method="post">
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="comment" name="comment"></textarea>
                <button type="submit" class="btn btn-primary">Comment</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <hr>
    <header>Comments</header>
    <div class="row full">
        <div class="col-md-10">
            @foreach($pcomments as $pcomment)
                <article class="partial" data-postid="{{ $post->id }}" data-pcommentid="{{ $pcomment->id }}">
                    <h6>Comment by {!! ($pcomment->name) !!} - </h6>
                    <p class="lead">{!! ($pcomment->comment) !!}</p>


                    <div class="interaction">
                        <div class="likecnt">{{ $pcomment->pclikecnt }}</div>
                        {{--<a href="#" class="pclike">Like</a>   |--}}
                        <a href="#" class="pclike">{{ Auth::user()->pclikes()->where('pcomment_id', $pcomment->id)->first() ? Auth::user()->pclikes()->where('pcomment_id', $pcomment->id)->first()->like == 1 ? 'Liked' : 'Like' : 'Like' }}</a>   |
                        <div class="dislikecnt">{{ $pcomment->pcdislikecnt }}</div>
                        {{--<a href="#" class="pclike">Dislike</a> |--}}
                        <a href="#" class="pclike">{{ Auth::user()->pclikes()->where('pcomment_id', $pcomment->id)->first() ? Auth::user()->pclikes()->where('pcomment_id', $pcomment->id)->first()->like == 0 ? 'Disliked' : 'Dislike' : 'Dislike' }}</a>   |
                    </div>

                    <a href="{{ route('pcomment.delete',['pcommentid' => $pcomment->id]) }}">Delete</a>
                    <hr>
                </article>
            @endforeach
        </div>
    </div>
    <script>
        var token = ' {{ Session::token() }} ';
        var urlLike = ' {{ route('plike') }} ';
        var urlCLike = ' {{ route('pclike') }} ';
    </script>
@endsection
