<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Student;
use App\Examinfo;
use Auth;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quiz.enterquiz');
    }

    public function store(Request $request)
    {
        $student= new Student;

        $sIdForValidate=$request->input('student_id');
        $examCodeForValidate=$request->input('exam_code');
        $initialScore=0;

        $checker=Student::where('student_id','=',$sIdForValidate)->where('uniqueid','=',$examCodeForValidate)->count();

        if ($checker > 0) {
            return "YOU ALREADY DONE THIS EXAM";
        }else{
            $findcourse = Examinfo::where('uniqueid', (string)$request->input('exam_code'))->first();
            if(count($findcourse) <= 0)
                return redirect()->route('giveq')->with(['error' => 'Entered code is incorrect']);
            elseif ($findcourse->active == 0)
                return redirect()->route('giveq')->with(['error' => 'Please wait, the link is not activated yet.']);
            $roll = Auth::User()->roll;
            $student = new Student();

            $student->student_id = $request->input('student_id');
            $student->uniqueid = $request->input('exam_code');
            $student->roll =  $roll;
            $student->score = $initialScore;
            $student->save();

            $id=$request->input('exam_code');
            $studentRealId=$request->input('student_id');
            $student_id=Student::where('student_id',$studentRealId)->where('uniqueid',$id)->value('id');
            $findcourse= Examinfo::where('uniqueid',$id)->value('id');

            $len= Examinfo::where('uniqueid',$id)->first();
            $len = $len->question_lenth;
            $findtime= Examinfo::where('uniqueid',$id)->value('time');
            $course= Examinfo::where('uniqueid',$id)->value('Course');
            $questions=Question::where('quiz_id',$findcourse)->get();
            $questions->transform(function ($question, $key){
                $question->body = unserialize($question->body);
                return $question;
            });
            $arr = [];
            //dd($questions[1]->body[1]['txt']);
            for($i = 0; $i < $len; $i++){
                $arr[] = [
                    'txt'      => $questions[0]->body[$i]['txt'],
                    'o1'     => $questions[0]->body[$i]['o1'],
                    'o2'     => $questions[0]->body[$i]['o2'],
                    'o3'     => $questions[0]->body[$i]['o3'],
                    'o4'     => $questions[0]->body[$i]['o4'],
                    'opt'     => $questions[0]->body[$i]['opt']
                ];
            }


            return view('quiz.showq')->with('questions', $questions)->with('student_id',$student_id)->with('course',$course)->with('time',$findtime)->with('array',$arr)->with('cid',$id);
        }
        //return $this->show($request->input('exam_code'));
    }

}