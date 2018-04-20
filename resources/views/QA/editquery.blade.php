@extends('partials.headerq')


@section('title')
    Edit Query
@endsection


@section('content')
    @include('partials.message-block')
    <section class="row new-post">
        <div class="col-md-10 centered">
            <header>
                <h3>Edit</h3>
            </header>
            <form action="{{ route('query.update') }}" method="post">
                <input type="hidden" name="query_id" value="{{ $query->id }}">
                <label for="title"> <b> Title </b> </label>
                <input type="text" value="{{ $query->qtitle}}" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                <br>

                <label for="body"> <b> Description </b> </label>
                <textarea class="form-control" placeholder="Enter Description" class="form-control" rows="5" id="body" name="body">{!! $query->qbody !!}</textarea>
                <br>

                {{--<label> Upload Image <br> </label>--}}

                {{--<input id="input-b1" name="input-b1" type="file" class="form-control" >--}}
                <button type="submit" class="btn btn-danger" name="cbtn" value="delete">Delete</button>
                <button type="submit" class="btn btn-primary" name="cbtn" value="update">Update</button>
                {{ csrf_field() }}
            </form>
        </div>
    </section>

@endsection

