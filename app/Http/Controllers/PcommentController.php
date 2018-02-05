<?php

namespace App\Http\Controllers;

use App\Pclike;
use App\Pcomment;
use App\Post;
use App\Query;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;

class PcommentController extends Controller
{
    public function savePComment(Request $request, $post_id, $user_id, $uname)
    {
        $this->validate($request, array(
            'comment' => 'required'
        ));
        $post = Post::find($post_id);
        $user = User::find($user_id);

        $pcomment = new Pcomment();
        $pcomment->approved = true;
        $pcomment->comment = $request->comment;
        $pcomment->name = $uname;

        $pcomment->pclikecnt = 0;
        $pcomment->pcdislikecnt = 0;
        $pcomment->post()->associate($post);
        $pcomment->user()->associate($user);

        //dd($post_id.' '.$user_id.' '.$uname);
        $pcomment->save();
        return redirect()->back();
    }

    public function deletePComment($pcommentid)
    {
        $pcomment = Pcomment::where('id', $pcommentid);

        $pcomment->delete();
        return redirect()->back();
    }

    public function postLikeCPost(Request $request){
        $post_Id = $request['postId'];
        $pcommentid = $request['pcommentid'];
        $is_Like = $request['isLike'] === 'true';
        $update = false;
        $pcomment = Pcomment::find($pcommentid);
        $post = Post::find($post_Id);

        if(!$pcomment || !$post){
            return null;
        }
        $user = Auth::user();
        $like = Pclike::where('user_id', $user->id)->where('post_id', $post_Id)->where('pcomment_id', $pcommentid)->first();
        $pclikecnt = Pcomment::find($pcommentid);
        $pcdislikecnt = Pcomment::find($pcommentid);

        //echo $like->like;
        // dd($like->like);
        //dd($user->plikes()->where('post_id', $post_Id)->first()->like);

        //dd($like);
        if($like){//like or dislike present already
            if($is_Like && !($like->like)){//clicked like and already disliked
                $pclikecnt->pclikecnt += 1;
                $pcdislikecnt->pcdislikecnt -= 1;
                //dd('here1');
            }
            else if($is_Like && $like->like){//clicked like and already liked
                $pclikecnt->pclikecnt -= 1;
                //dd('here2');
            }
            else if(!($is_Like) && !($like->like)){//clicked dislike and already disliked
                $pcdislikecnt->pcdislikecnt -= 1;
                //dd('here3');
            }
            else if(!($is_Like) && $like->like){//clicked dislike and already liked

                $pclikecnt->pclikecnt -= 1;
                $pcdislikecnt->pcdislikecnt += 1;
            }
        }
        else{
            if($is_Like)
                $pclikecnt->pclikecnt += 1;
            else
                $pcdislikecnt->pcdislikecnt += 1;
        }
        if($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_Like){
//                $plikecnt->plikecnt = 0;
//                $pdislikecnt->pdislikecnt = 0;
                $pclikecnt->update();
                $pcdislikecnt->update();
                $like->delete();
                return response()->json(['pclikecnt' => $pclikecnt->pclikecnt, 'pcdislikecnt' => $pcdislikecnt->pcdislikecnt],200);
            }
        } else {
            $like = new Pclike();
        }
        //echo $pdislikecnt->pdislikecnt;
        $like->like = $is_Like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        $like->pcomment_id = $pcomment->id;
        //dd($user->id );
        if($update){
            $like->update();
            //echo ('he');
        } else {
            $like->save();
            //echo ('he1');
        }
        $pclikecnt->update();
        $pcdislikecnt->update();
        //return 'bumm';
        return response()->json(['pclikecnt' => $pclikecnt->pclikecnt, 'pcdislikecnt' => $pcdislikecnt->pcdislikecnt],200);
    }

}
