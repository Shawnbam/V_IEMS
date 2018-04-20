@extends('partials.header')


@section('content')
    <div class="row">
        <div class="table-responsive col-md-9">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Roll no.</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Div</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <th scope="row">{{ $ctr++ }}</th>
                        <td>{{ $result->roll }}</td>
                        <td>{{ $result->score }}</td>
                        <td>{{ substr($result->roll , 5, 1) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection