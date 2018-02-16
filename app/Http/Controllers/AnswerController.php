<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Student;

class AnswerController extends Controller{

    public function store(Request $request){
        if ($request->ajax()) {
            $answer = new Answer();
            $answer->stu_id = $request->input('student_id');
            $answer->question = $request->input('question');
            $answer->given_answer = $request->input('answer');
            $answer->true_answer = $request->input('true_answer');
            $answer->save();
            if ($request->input('answer')==$request->input('true_answer')) {
                $insert=Student::where('id','=',$request->input('student_id'))->where('uniqueid','=',$request->input('course'))->increment('score');
            }
            return response($answer);
        }else{
            return "ajax not done";
        }
    }

}