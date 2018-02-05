<?php

namespace App\Http\Controllers;

use App\Post;
use App\Pcomment;
use Illuminate\Http\Request;
use App\User;
use App\Plike;
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
        $post->plikecnt = 0;
        $post->pdislikecnt= 0;

        if($request->user()->posts()->save($post)){
            $message = 'Post successfully Created';
        }

        //dd("asdasd");
        return redirect()->route('home.feeds')->with(['message' => $message]);
    }


    public function getDeletePost($post_id){
        $post = Post::where('id', $post_id)->first();
        //yaad rakh bum ye
        if( Auth::user() != $post->user ){
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('home.feeds')->with(['message' => 'Successfully Deleted!']);
    }

    public function getPost($post_id){

        $post = Post::where('id', $post_id)->first();
        $pcomments = Pcomment::where('post_id', $post_id)->orderBy('created_at','desc')->get();
        //dd($pcomments);
        //yaad rakh bum ye
//        if( Auth::user() != $post->user ){
//            return redirect()->back();
//        }
//        $post->delete();
//        return redirect()->route('dashboard')->with(['message' => 'Successfully Deleted!']);
        return view('posts.viewPost',['post' => $post, 'pcomments' => $pcomments]);
    }

    public function postEditPost($post_id){
        $post = Post::where('id', $post_id)->first();

        return view('posts.editpost',['post' => $post]);
    }

    public function postUpdatePost(Request $request){
        $input = Input::get('cbtn');
        $pass = $request['post_id'];
        if($input == 'delete'){
            return $this->getDeletePost($pass);
        }
        else if($input == 'update'){
            $this -> validate($request, [
                'title' => 'required|max:50',
            ]);
            $post = Post::find($pass);
            if( Auth::user() != $post->user ){
                return redirect()->back();
            }
            $post->body = $request['body'];
            $post->title = $request['title'];
            $post->update();
            if( Auth::user() != $post->user ){
                return redirect()->back();
            }
            $message = 'Post updated';
            return redirect()->route('home.feeds')->with(['message' => $message]);
        }
        return redirect()->back();
    }


    public function postLikePost(Request $request){
        $post_Id = $request['postId'];
        $is_Like = $request['isLike'] === 'true';
        $update = false;
        $post_Id = $post_Id;
        $post = Post::find($post_Id);
        if(!$post){
            return null;
        }
        $user = Auth::user();
        $like = $user->plikes()->where('post_id', $post_Id)->first();
        $plikecnt = Post::where('id', $post_Id)->first();
        $pdislikecnt = Post::where('id', $post_Id)->first();
        //echo $like->like;
        // dd($like->like);
        //dd($user->plikes()->where('post_id', $post_Id)->first()->like);

        //dd($like);
        if($like){//like or dislike present
            if($is_Like && !($like->like)){//clicked like and already disliked
                $plikecnt->plikecnt = $plikecnt->plikecnt + 1;
                $pdislikecnt->pdislikecnt = $pdislikecnt->pdislikecnt - 1;
                //echo ('here1');
            }
            else if($is_Like && $like->like){//clicked like and already liked
                $plikecnt->plikecnt = $plikecnt->plikecnt - 1;
                //echo ('here2');
            }
            else if(!($is_Like) && !($like->like)){//clicked dislike and already disliked
                $pdislikecnt->pdislikecnt = $pdislikecnt->pdislikecnt - 1;
                //echo ('here3');
            }
            else if(!($is_Like) && $like->like){//clicked dislike and already liked
                $plikecnt->plikecnt = $plikecnt->plikecnt - 1;
                $pdislikecnt->pdislikecnt = $pdislikecnt->pdislikecnt + 1;
                //echo ('here4');
            }
        }
        else{
            if($is_Like)
                $plikecnt->plikecnt = $plikecnt->plikecnt + 1;
            else
                $pdislikecnt->pdislikecnt = $pdislikecnt->pdislikecnt + 1;
        }
        if($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_Like){
//                $plikecnt->plikecnt = 0;
//                $pdislikecnt->pdislikecnt = 0;
                $plikecnt->update();
                $pdislikecnt->update();
                $like->delete();
                return response()->json(['plikecnt' => $plikecnt->plikecnt, 'pdislikecnt' => $pdislikecnt->pdislikecnt],200);
            }
        } else {
            $like = new Plike();
        }
        //echo $pdislikecnt->pdislikecnt;
        $like->like = $is_Like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        //dd($user->id );
        if($update){
            $like->update();
            //echo ('he');
        } else {
            $like->save();
            //echo ('he1');
        }
        $plikecnt->update();
        $pdislikecnt->update();
        //return 'bumm';
        return response()->json(['plikecnt' => $plikecnt->plikecnt, 'pdislikecnt' => $pdislikecnt->pdislikecnt],200);
    }


}