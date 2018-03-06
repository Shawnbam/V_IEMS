<?php

namespace App\Http\Controllers;

use App\Query;
use App\Qclike;
use App\User;
use App\Qcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QcommentController extends Controller
{
    public function saveQComment(Request $request, $query_id, $user_id, $uname)
    {
        $this->validate($request, array(
            'comment' => 'required'
        ));

        $query = Query::find($query_id);
        $user = User::find($user_id);

        $qcomment = new Qcomment();
        $qcomment->approved = true;
        $qcomment->comment = $request->comment;
        $qcomment->name = $uname;

        $qcomment->qclikecnt = 0;
        $qcomment->qcdislikecnt = 0;
        $qcomment->query_id = $query->id;
        $qcomment->user()->associate($user);

        //dd($post_id.' '.$user_id.' '.$uname);
        $qcomment->save();
        return redirect()->back();
    }

    public function deleteQComment($qcommentid)
    {
        $qcomment = Qcomment::where('id', $qcommentid);

        $qcomment->delete();
        return redirect()->back();
    }

    public function postLikeCQuery(Request $request){
        $query_Id = $request['queryId'];
        $qcommentid = $request['qcommentid'];
        $is_Like = $request['isLike'] === 'true';
        $update = false;
        $qcomment = Qcomment::find($qcommentid);
        $query = Query::find($query_Id);

        if(!$qcomment || !$query){
            return null;
        }
        $user = Auth::user();
        $like = Qclike::where('user_id', $user->id)->where('query_id', $query_Id)->where('qcomment_id', $qcommentid)->first();
        $qclikecnt = Qcomment::find($qcommentid);
        $qcdislikecnt = Qcomment::find($qcommentid);

        //echo $like->like;
        // dd($like->like);
        //dd($user->plikes()->where('post_id', $post_Id)->first()->like);

        //dd($like);
        if($like){//like or dislike present already
            if($is_Like && !($like->like)){//clicked like and already disliked
                $qclikecnt->qclikecnt += 1;
                $qcdislikecnt->qcdislikecnt -= 1;
                //dd('here1');
            }
            else if($is_Like && $like->like){//clicked like and already liked
                $qclikecnt->qclikecnt -= 1;
                //dd('here2');
            }
            else if(!($is_Like) && !($like->like)){//clicked dislike and already disliked
                $qcdislikecnt->qcdislikecnt -= 1;
                //dd('here3');
            }
            else if(!($is_Like) && $like->like){//clicked dislike and already liked

                $qclikecnt->qclikecnt -= 1;
                $qcdislikecnt->qcdislikecnt += 1;
            }
        }
        else{
            if($is_Like)
                $qclikecnt->qclikecnt += 1;
            else
                $qcdislikecnt->qcdislikecnt += 1;
        }
        if($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_Like){
//                $plikecnt->plikecnt = 0;
//                $pdislikecnt->pdislikecnt = 0;
                $qclikecnt->update();
                $qcdislikecnt->update();
                $like->delete();
                return response()->json(['qclikecnt' => $qclikecnt->qclikecnt, 'qcdislikecnt' => $qcdislikecnt->qcdislikecnt],200);
            }
        } else {
            $like = new Qclike();
        }
        //echo $pdislikecnt->pdislikecnt;
        $like->like = $is_Like;
        $like->user_id = $user->id;
        $like->query_id = $query->id;
        $like->qcomment_id = $qcomment->id;
        //dd($user->id );
        if($update){
            $like->update();
            //echo ('he');
        } else {
            $like->save();
            //echo ('he1');
        }
        $qclikecnt->update();
        $qcdislikecnt->update();
        //return 'bumm';
        return response()->json(['qclikecnt' => $qclikecnt->qclikecnt, 'qcdislikecnt' => $qcdislikecnt->qcdislikecnt],200);
    }
}
