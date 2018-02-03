<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcomment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
//$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
