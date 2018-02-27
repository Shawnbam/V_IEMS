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
    Collaborate
@endsection

@section('content')
    @include('partials.message-block')
    <form method="POST" action="{{ route('collab.save') }}">
        <div class="container">
            <div class="form-group">
                <label for="title">Title :</label><br>
                <input class="form-control col-md-6" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="idea">Idea :</label><br>
                <textarea class="form-control" type="text" rows="15" name="idea" id="idea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post the IDEA</button>
        </div>
        {{ csrf_field() }}
    </form>
@endsection