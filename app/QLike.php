<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QLike extends Model
{
    protected $table = 'q_likes';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function queries() {
        return $this->belongsTo('App\Query');
    }
}
