<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->hasMany('App\QLike');
    }

    public function qcomments() {
        return $this->hasMany('App\Qcomment');
    }
}
