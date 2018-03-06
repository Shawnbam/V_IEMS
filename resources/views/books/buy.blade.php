@extends('partials.header')

@section('title')
    Buy Books
@endsection

@section('content')
    <div class="container">

        <!-- Trigger the modal with a button -->
        <div class="row">
            <div class="col-sm-9">
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sell Books</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content  form-group ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <form action="{{ route('books.sell') }}" method="post">
                        <div class="modal-body ">
                            <div class="container">
                                Book name
                                <input class="form-control" name="bookname" type="text">
                                Semester
                                <select class="form-control" name = "sem" id="sem">
                                    <option value="" disabled selected>Semester</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                                Branch
                                <select class="form-control" name = "branch" id="branch" >
                                    <option value="" disabled selected>Branch</option>
                                    <option>IT</option>
                                    <option>CS</option>
                                    <option>BIOMED</option>
                                    <option>EXTC</option>
                                    <option>ETRX</option>
                                </select>
                                Price <input class="form-control" name="price" type="number">
                                Image
                                <input type="file" class="form-control" name="pic" accept="image/*">
                                <br>
                                <div class="row">
                                    <div class="col-sm-8">
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="#">
                                            <button type="submit" class="form-control btn btn-primary" >Sell</button>
                                            {{ csrf_field() }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>


    <hr>

    {{--<b>Search by Name</b><br><br>--}}
    {{--<form method="GET" action="{{ route('books.listbytxtsub') }}">--}}
        {{--<div class="panel-body">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-8 ">--}}
                    {{--<input type="text" class="form-control" name="searchtxt">--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}


    <b>Search by Filters</b><br><br>
    <form method="GET" action="{{ route('books.listsub') }}">
        <div class="panel-body">
            <div class="col-sm-9 ">
                <input type="text" class="form-control" name="searchtxt" placeholder="Title">
            </div><br>
            <div class="row">&nbsp &nbsp &nbsp &nbsp
                <select class="col-sm-4 form-control" name = "sem" id="sem">
                    <option value="" disabled selected>Semester</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select> &nbsp &nbsp &nbsp
                <select class="col-sm-4 form-control" name = "branch" id="branch">
                    <option value="" disabled selected>Branch</option>
                    <option>IT</option>
                    <option>CS</option>
                    <option>BIOMED</option>
                    <option>EXTC</option>
                    <option>ETRX</option>
                </select>

            </div><br>
            <div class="col-sm-9 ">
                <a href="{{route('books.listsub')}}">
                    <button type="submit" class=" form-control btn-block" >Search</button>
                </a>
            </div>
        </div>

    </form>

    <br><hr><br>
    <table style="width:100%">
        <tr>
            <th>Book Name</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Price</th>
            <th>Owner</th>

        </tr>

        @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->bookname }}</td>
                <td>{{ $subject->branch }}</td>
                <td>{{ $subject->sem }}</td>
                <td>{{ $subject->price }}</td>
                <td>{{ $subject->user_id }}</td>
            </tr>
        @endforeach

    </table>


@endsection