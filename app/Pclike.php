<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pclike extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function pcomment() {
        return $this->belongsTo('App\Pcomment');
    }


}
