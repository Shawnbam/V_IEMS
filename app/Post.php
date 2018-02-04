<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pcomments(){
        return $this->hasMany('App\Pcomment');
    }

    public function plikes(){
        return $this->hasMany('App\Plike');
    }
}
