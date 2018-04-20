@extends('partials.header')

@section('script')
    <!-- script for time limitation of exam -->
    <script type="text/javascript">
        var timeoutHandle;
        function countdown(minutes) {
            var seconds = 60;
            var mins = minutes
            function tick() {
                var counter = document.getElementById("timer");
                var current_minutes = mins-1
                seconds--;
                counter.innerHTML =
                    current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                if( seconds > 0 ) {
                    timeoutHandle=setTimeout(tick, 1000);
                } else {

                    if(mins > 1){

                        setTimeout(function () { countdown(mins - 1); }, 1000);

                    }
                }
            }
            tick();
        }

        countdown('<?php echo $time; ?>');

    </script>

    <!-- script for disable url -->
    <script type="text/javascript">
        var time= '<?php echo $time; ?>';
        var realtime = time*60000;
        setTimeout(function () {
                alert('Time Out');
                window.location.href= '/Home';},
            realtime);

        function done() {
            alert('Time Out');
            window.location.href= '/Home';
        }


    </script>

@endsection




@section('content')
    <body style="background-color: darkseagreen">

    <div>
        <nav class="col-lg-1 pull-right">
            <div class="sidebar-nav-fixed affix">
                <h1><b>Time <span id="timer" style="color: red">0.00</span></b></h1><br>
            </div>
        </nav>
        <h1 class="col-lg-offset-4" style="color: red;"><span style="background-color:seagreen;color: white;border-radius: 5px"><b>  Examination on {{$course}}  </b></span></h1>
        <div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3 rows" style="background-color: white">

            @foreach($array as $arr)
                <div class="row col-md-offset-0">
                    <form method="post" action="{{ route('answer.store') }}" class="ansform">
                        <h3>{{strip_tags($arr['txt'])}} ?</h3>
                        <div class="col-lg-offset-1">
                            <input type="hidden" name="question" value="{{ $arr['txt'] }}">
                            <input type="hidden" name="roll" value="{{Auth::User()->roll}}">
                            <input type="hidden" name="student_id" value="{{$student_id}}">
                            <input type="hidden" name="course" value="{{$cid}}">
                            <input type="hidden" name="true_answer" value="{{$arr['opt']}}">
                            <input name="answer" value="Option 1" type="radio"> {{$arr['o1']}} <br>
                            <input name="answer" value="Option 2" type="radio">{{$arr['o2']}}<br>
                            <input name="answer" value="Option 3" type="radio">{{$arr['o3']}}<br>
                            <input name="answer" value="Option 4" type="radio">{{$arr['o4']}}<br>
                            <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
                <hr>
            @endforeach
            <button class="btn btn-primary" onclick="done()">End</button>
        </div>
    </div>

    </body>




@endsection


