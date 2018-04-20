<?php

namespace App\Http\Controllers;

use App\Post;
use App\Examinfo;
use App\Query;
use App\Question;
use App\Student;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;

class SearchController extends Controller{

    public function search(Request $request){
        $pizza  = $request->searchtext;
//        $keys = explode(" ", $pizza);
//        $keywords1 = [];
//        foreach($keys as $key){
//            $keywords1[] = ['title', 'LIKE', '%'.$key.'%'];
//        }
//
//        foreach($keys as $key){
//            $keywords[] = ['body', 'LIKE', '%'.$key.'%'];
//        }
//        $posts = Post::where($keywords)->orWhere($keywords1)->get();
        $keys = explode(" ", $pizza);

        $posts = Post::where(function ($query) use ($keys) {
            foreach ($keys as $key) {
                $query->orWhere('body', 'LIKE', '%'.$key.'%');
            }
            foreach ($keys as $key) {
                $query->orWhere('title', 'LIKE', '%'.$key.'%');
            }
        })->get();
        return view('search', ['posts' => $posts]);
    }

    public function searchq(Request $request){
        $pizza  = $request->searchtext;
//        $keys = explode(" ", $pizza);
//        $keywords1 = [];
//        foreach($keys as $key){
//            $keywords1[] = ['title', 'LIKE', '%'.$key.'%'];
//        }
//
//        foreach($keys as $key){
//            $keywords[] = ['body', 'LIKE', '%'.$key.'%'];
//        }
//        $posts = Post::where($keywords)->orWhere($keywords1)->get();
        $keys = explode(" ", $pizza);

        $posts = Query::where(function ($query) use ($keys) {
            foreach ($keys as $key) {
                $query->orWhere('qbody', 'LIKE', '%'.$key.'%');
            }
            foreach ($keys as $key) {
                $query->orWhere('qtitle', 'LIKE', '%'.$key.'%');
            }
        })->get();
        return view('searchq', ['posts' => $posts]);
    }

}