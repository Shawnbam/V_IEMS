<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qclike extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function queries() {
        return $this->belongsTo('App\Query');
    }

    public function qcomment() {
        return $this->belongsTo('App\Qcomment');
    }
}
