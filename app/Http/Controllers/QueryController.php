<?php

namespace App\Http\Controllers;

use App\Post;
use App\Query;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Qcomment;
use App\QLike;
class QueryController extends Controller{

    public function postQCreateTag(Request $request)
    {
        $tags = Tag::all();
        $tagname = $request['addQtags'];
        foreach($tags as $tag){
            if(strtolower($tag->tag_name) == strtolower($tagname)){
                $message = 'Tag already exists';
                return view('QA.addqnapost', ['tags' => $tags])->with(['message' => $message]);
            }
        }
        $tag = new Tag();
        $tag->tag_name = $tagname;
        $tag->save();

        $tags = Tag::all();
        $message = 'Tag successfully added';
        return view('QA.addqnapost', ['tags' => $tags])->with(['message' => $message]);
        //return redirect()->route('home.feeds')->with(['message' => $message]);


    }

    public function getQueries(){
        $tags = Tag::all();
        return view('QA.addqnapost', ['tags' => $tags]);
//        return view('QA.addqnapost');
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
        $query ->qlikecnt = 0;
        $query ->qdislikecnt = 0;
        if($request->has('tags')) {
            $query->tags = implode(', ', $request['tags']);
        }
        else{
            $query->tags = "null";
        }

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
        $keys = explode(",", Auth::user()->tags);
        $keywords = [];
        //dd($keys);
        foreach($keys as $key){
            $keywords[] = ['tags', 'LIKE', '%'.$key.'%'];
        }
        $recs = Query::where($keywords)->get();
        //dd($recs);


        //$posts = Post::orderBy('created_at','desc')->get();
        return view('QA.viewqueries', ['queries' => $queries, 'recs' => $recs]);
    }

    public function getQuery($query_id){
        $query = Query::where('id', $query_id)->first();
        $qcomments = Qcomment::where('query_id', $query_id)->orderBy('created_at','desc')->get();
        //yaad rakh bum ye
        //        if( Auth::user() != $post->user ){
        //            return redirect()->back();
        //        }
        //        $post->delete();
        //        return redirect()->route('dashboard')->with(['message' => 'Successfully Deleted!']);
        return view('QA.viewQuery',['query' => $query, 'qcomments' => $qcomments]);
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

    public function postLikeQuery(Request $request) {
        $query_id = $request['queryId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $query = Query::find($query_id);

        if(!$query) {
            return null;
        }

        $user = Auth::user();
        $qlike = $user->likes()->where('query_id', $query_id)->first();
        $qlikecnt = Query::where('id', $query_id)->first();
        $qdislikecnt = Query::where('id', $query_id)->first();

        if($qlike) {
            if($is_like && !($qlike->qlike)){//clicked like and already disliked
                $qlikecnt->qlikecnt = $qlikecnt->qlikecnt + 1;
                $qdislikecnt->qdislikecnt = $qdislikecnt->qdislikecnt - 1;
            }
            else if($is_like && ($qlike->qlike)) {
                $qlikecnt->qlikecnt = $qlikecnt->qlikecnt -1 ;
            }
            else if(!$is_like && ($qlike->qlike)) {
                $qlikecnt->qlikecnt = $qlikecnt->qlikecnt - 1;
                $qdislikecnt->qdislikecnt = $qdislikecnt->qdislikecnt + 1;
            }
            else if(!$is_like && !$qlike->qlike) {
                $qdislikecnt->qdislikecnt = $qdislikecnt->qdislikecnt - 1;
            }
        }
        else {
            if($is_like) {
                $qlikecnt->qlikecnt = $qlikecnt->qlikecnt + 1;
            }
            else {
                $qdislikecnt->qdislikecnt = $qdislikecnt->qdislikecnt + 1;
            }
        }
        if($qlike) {
            $already_like = $qlike->qlike;
            $update = true;
            if ($already_like == $is_like) {
                $qlikecnt->update();
                $qdislikecnt->update();
                $qlike->delete();
                return response()->json(['qlikecnt'=>$qlikecnt->qlikecnt , 'qdislikecnt'=>$qdislikecnt->qdislikecnt], 200);
            }
        }
        else {
            $qlike = new QLike();
        }

        $qlike->qlike = $is_like;
        $qlike->user_id = $user->id;
        $qlike->query_id = $query->id;

        if($update) {
            $qlike->update();
        }
        else {
            $qlike->save();
        }
        $qlikecnt->update();
        $qdislikecnt->update();
        return response()->json(['qlikecnt'=>$qlikecnt->qlikecnt , 'qdislikecnt'=>$qdislikecnt->qdislikecnt], 200);
    }

    protected function postEditQuery($queryid){
        $query = Query::where('id', $queryid)->first();
        return view('QA.editquery',['query' => $query]);
    }

    public function postUpdateQuery(Request $request){
        $input = Input::get('cbtn');
        $pass = $request['query_id'];
        if($input == 'delete'){
            return $this->getDeleteQuery($pass);
        }
        else if($input == 'update'){
            $this -> validate($request, [
                'title' => 'required|max:50',
            ]);
            $query = Query::find($pass);
            if( Auth::user() != $query->user ){
                return redirect()->back();
            }
            $query->qbody = $request['body'];
            $query->qtitle = $request['title'];
            $query->update();
            if( Auth::user() != $query->user ){
                return redirect()->back();
            }
            $message = 'Query updated';
            return redirect()->route('query.view', ['queryid' => $query->id])->with(['message' => $message]);
        }
        return redirect()->back();
    }
}