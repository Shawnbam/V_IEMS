<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinfo extends Model
{
    protected $fillable = [
        'Teacher_id', 'Course', 'question_lenth','uniqueid','time',
    ];

    public function questions(){
        $this->hasMany('App\Question');
    }
}
