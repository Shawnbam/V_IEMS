@extends('partials.header')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col" ><a class="nav-link" href="{{ route('quiz.get') }}"><i class="fa fa-plus"></i></a></th>
            <th scope="col">Quiz Name</th>
            <th scope="col">No. of Questions</th>
            <th scope="col">Time Limit(mins)</th>
            <th scope="col">Unique Code</th>
            <th scope="col">Results</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results as $result)
            <tr>
                <th scope="row">{{ $ctr++ }}</th>
                <td>{{ $result->Course }}</td>
                <td>{{ $result->question_lenth }}</td>
                <td>{{ $result->time }}</td>
                <td>{{ $result->uniqueid }}</td>
                <td><a href="{{ route('getresults',['uniqueid' => $result->uniqueid]) }}">View Results</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection