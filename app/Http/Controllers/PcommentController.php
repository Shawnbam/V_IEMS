<?php

namespace App\Http\Controllers;

use App\Pcomment;
use App\Post;
use App\Query;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class PcommentController extends Controller{
    public function savePComment(Request $request, $post_id, $user_id, $uname){
        $this->validate($request, array(
            'comment' => 'required'
        ));
        $post = Post::find($post_id);
        $user = User::find($user_id);

        $pcomment = new Pcomment();
        $pcomment->approved = true;
        $pcomment->comment = $request->comment;
        $pcomment->name = $uname;
        $pcomment->post()->associate($post);
        $pcomment->user()->associate($user);

        //dd($post_id.' '.$user_id.' '.$uname);
        $pcomment->save();
        return redirect()->back();
    }

    public function deletePComment($pcommentid){
        $pcomment = Pcomment::where('id', $pcommentid);

        $pcomment->delete();
        return redirect()->back();
    }
}
