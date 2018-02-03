<?php

namespace App\Http\Controllers;

use App\Post;
use App\Query;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class QueryController extends Controller{

    public function getQueries(){
        return view('QA.addqnapost');
    }

    public function postCreateQuery(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        $query = new Query();

        $query ->qtitle = $request['title'];
        $query ->qbody = $request['body'];
        $query ->qtype = 'common';
        if($request->user()->queries()->save($query )){

            $message = 'Query successfully posted';
        }

        //dd("asdasd");
        //return redirect()->route('home.feeds')->with(['message' => $message]);
        return redirect()->route('query.feeds')->with(['message' => $message]);

    }

    public function getQueryFeeds(){
        $queries= Query::orderBy('created_at','desc')->get();
        //$posts = Post::orderBy('created_at','desc')->get();
        return view('QA.viewqueries', ['queries' => $queries]);
    }

    public function getQuery($query_id){
        $query = Query::where('id', $query_id)->first();
        //yaad rakh bum ye
//        if( Auth::user() != $post->user ){
//            return redirect()->back();
//        }
//        $post->delete();
//        return redirect()->route('dashboard')->with(['message' => 'Successfully Deleted!']);
        return view('QA.viewQuery',['query' => $query]);
    }


    public  function getDeleteQuery($query_id){
        $query= Query::where('id', $query_id)->first();
        //yaad rakh bum ye
        if( Auth::user() != $query->user ){
            return redirect()->back();
        }
        $query->delete();
        return redirect()->route('query.feeds')->with(['message' => 'Successfully Deleted!']);
    }
}