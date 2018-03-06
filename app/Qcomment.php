<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qcomment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function queries() {
        return $this->belongsTo('App\Query');
    }

    public function qclikes() {
        return $this->hasMany('App\Qclike');
    }
}
