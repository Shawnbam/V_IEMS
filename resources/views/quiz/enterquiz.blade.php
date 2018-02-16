@extends('partials.header')

@section('content')
    <form method="post" action="{{ route('quizpage') }}">
        {{ csrf_field() }}

        <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
            <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput">Student ID</label>
                <input type="text" name="student_id" class="form-control " id="formGroupExampleInput" value="{{ Auth::user()->id }}" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="formGroupExampleInput2">Exam Code</label>
                <input type="text" name="exam_code" class="form-control" id="formGroupExampleInput2" placeholder="E.g. A6xgP" required>
            </div>
            <button type="Submit" class="btn btn-success btn-block click">Submit</button><br><br>
            <h4 style="color: red">**Keep in mind that Question set (next page) would be invalid after limited exam time. Try to give Answer in time.</h4>
        </div>

    </form>
    <script>
        function getit() {
            var ret = document.getElementById("formGroupExampleInput2").value;
            return ret;
            //console.log(ret);
        }
    </script>

@endsection