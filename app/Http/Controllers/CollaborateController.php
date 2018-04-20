<?php

namespace App\Http\Controllers;


use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborate;
use Illuminate\Support\Facades\Auth;

class CollaborateController extends Controller{

    public function getCollaborateView(){

        $collaborates = Collaborate::orderBy('created_at','desc')->get();
        return view('collab.collabview', ['collaborates' => $collaborates]);
    }

    public function getCollaboratePost(){
        if(Auth::User()->email == null or Auth::User()->email == "")
            return view('user.profile')->with(['err' => "Enter your email first."]);

        return view('collab.collabpost');

    }


    public function postCollabSave(Request $request){

        $title = $request->input('title');
        $idea = $request->input('idea');
        $collborate = new Collaborate();
        $collborate->title = $title;
        $collborate->idea = $idea;

        if($request->user()->collaborates()->save($collborate)){
            $message = 'Idea posted successfully';
        }

        //dd("asdasd");
        return redirect()->route('collaborate.view')->with(['message' => $message]);
    }

    public function getCollaboratewith($collab_id){
        $uid = Auth::user()->id;
        $yolo = 'asdas';
        $data = array(
            'email' => 'shbhmambavale7@gmail.com',
            'subject' => 'Collaborate',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'num' => '9920960512',
        );
        Mail::send('mail',['data' => $data],function ($message) use ($data){
            $message->from('shbhmambavale7@gmail.com', 'Shubham');
            $message->to('shbhmambavale7@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect()->route('collaborate.view')->with(['message' => 'Details Sent for collaboration']);


    }

}