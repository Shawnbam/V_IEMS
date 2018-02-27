@extends('partials.header')


@section('content')
    <div class="row">
        <div class="table-responsive col-md-6">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Div</th>
                    <th scope="col">Batch</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <th scope="row">{{ $ctr++ }}</th>
                        <td>{{ $result->student_id }}</td>
                        <td>{{ $result->score }}</td>
                        <td>{{ $result->time }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-responsive col-md-6">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Repeated</th>
                    <th scope="col">ahe</th>
                    <th scope="col">ithe</th>
                    <th scope="col">ignore</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <th scope="row">{{ $ctr++ }}</th>
                        <td>{{ $result->student_id }}</td>
                        <td>{{ $result->score }}</td>
                        <td>{{ $result->time }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection