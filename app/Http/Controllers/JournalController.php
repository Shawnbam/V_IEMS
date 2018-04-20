<?php

namespace App\Http\Controllers;

use App\Journal;
use App\Post;
use App\Pcomment;
use Illuminate\Http\Request;
use App\User;
use App\Tag;
use App\Plike;
use Auth;
use Illuminate\Support\Facades\Input;


class JournalController extends Controller{

    public function getview(){
        $posts = Journal::where('approve', '=', 1)
            ->orderBy('created_at','desc')
            ->get();

        return view('journal.view', ['posts' => $posts]);
    }


    public function getadd(){
        return view('journal.add');
    }

    public function postj(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Journal();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->approve = 0;

        if($request->user()->posts()->save($post)){
            $message = 'Your Journal is requested for approval from the admin';
        }

        //dd("asdasd");
        return redirect()->route('j.viewj')->with(['message' => $message]);
    }

    public function approveview()    {
        $posts = Journal::where('approve', '=', 0)->get();
        return view('journal.approveview', ['posts' => $posts]);
    }


    public function approveit($postid){
        $posts = Journal::find($postid);
        $posts->approve = 1;
        $posts->update();
        return redirect()->route('j.viewj')->with(['message' => "Journal Approved Successfully"]);
    }
}