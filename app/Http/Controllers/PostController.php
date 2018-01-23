<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller{

    public function getCommitteesFeeds($type){
        //dd($type);

        $posts = Post::where('type', '=', $type)
            ->orderBy('created_at','desc')
            ->get();
        //$posts = Post::orderBy('created_at','desc')->get();
        return view('home.hompg', ['posts' => $posts]);
    }
    public function getHomeFeeds(){
        //dd($type);

        $posts = Post::where('type', '=', 'common')
            ->orderBy('created_at','desc')
            ->get();
        //$posts = Post::orderBy('created_at','desc')->get();
        return view('home.hompg', ['posts' => $posts]);
    }

    public function getCommittees(){
        $postsiee = Post::where('type', '=', 'ieee')
            ->orderBy('created_at','desc')
            ->get();
        $postsacm = Post::where('type', '=', 'acm')
            ->orderBy('created_at','desc')
            ->get();
        $postsitsa = Post::where('type', '=', 'itsa')
            ->orderBy('created_at','desc')
            ->get();
        $postscsi = Post::where('type', '=', 'csi')
            ->orderBy('created_at','desc')
            ->get();
        //$posts = Post::orderBy('created_at','desc')->get();
        return view('posts.committee', ['postscsi' => $postscsi , 'postsitsa' => $postsitsa , 'postsacm' => $postsacm , 'postsiee' => $postsiee]);
    }
/*
 *
        $posts = Post::where('type', '=', Auth::user()->type)
            ->orderBy('created_at','desc')
            ->get();
        $postsiee = Post::where('type', '=', 'ieee')
            ->orderBy('created_at','desc')
            ->get();
        $postsacm = Post::where('type', '=', 'acm')
            ->orderBy('created_at','desc')
            ->get();
        $postsitsa = Post::where('type', '=', 'itsa')
            ->orderBy('created_at','desc')
            ->get();
        $postscsi = Post::where('type', '=', 'csi')
            ->orderBy('created_at','desc')
            ->get();
        //$posts = Post::orderBy('created_at','desc')->get();
        return view('home.hompg', ['posts' => $posts , 'postscsi' => $postscsi , 'postsitsa' => $postsitsa , 'postsacm' => $postsacm , 'postsiee' => $postsiee]);
*/

    public function getAddPost(){
        return view('posts.addpost');
    }

    public function postCreatePost(Request $request){

        $this->validate($request,[
            'title' => 'required',
           'body' => 'required|max:500'
        ]);

        $post = new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->type = 'common';
        if($request->user()->posts()->save($post)){
            $message = 'Post successfully Create';
        }

        //dd("asdasd");
        return redirect()->route('home.feeds')->with(['message' => $message]);

    }
}