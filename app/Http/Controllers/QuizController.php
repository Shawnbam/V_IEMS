<?php

namespace App\Http\Controllers;

use App\Post;
use App\Examinfo;
use App\Query;
use App\Question;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller{

    public function getQuiz(){
        //bum check if user is teacher
        $teacher_id = Auth::user()->id;
        return view('quiz.createq')->with(['teacher_id' => $teacher_id]);
    }
    public function store(Request $request){
        $examinfo = Examinfo::create([
            'Teacher_id' => Auth::user()->id,
            'Course' => $request->input('Course'),
            'question_lenth' => $request->input('question_lenth'),
            'uniqueid' => $request->input('uniqueid'),
            'time' => $request->input('time')
        ]);
        $arr = array();
        $cnt = $request->input('question_lenth');
        for ($i = 0; $i < $request->input('question_lenth'); $i++)
            $arr[] = $i + 1;

        return view('quiz.questions', ['examinfo' => $examinfo, 'arr' => $arr, 'cnt' => $cnt]);
    }


    public function qstore(Request $request,$cnt){
        $txt = $request->input('txt');
        $o1 = $request->input('o1');
        $o2 = $request->input('o2');
        $o3 = $request->input('o3');
        $o4 = $request->input('o4');
        $opt = $request->input('opt');
        $squestion = [];
        //$squestion = ['txt' => 0,'o1' => $item->price, 'o1' => $item->price, 'o1' => $item->price, 'o1' => $item->price, 'o1' => $item->price];
        for($i = 0; $i < $cnt; $i++){
            $squestion[] = [
                'txt'      => $txt[$i],
                'o1'     => $o1[$i],
                'o2'     => $o2[$i],
                'o3'     => $o3[$i],
                'o4'     => $o4[$i],
                'opt'     => $opt[$i]
            ];
        }

        $squestions = new Question();
        $squestions->body = serialize($squestion);
        $squestions->quiz_id = $request->input('quizid');
        $squestions->save();

        return redirect()->route('home.feeds')->with('error_code', 5);
    }

}