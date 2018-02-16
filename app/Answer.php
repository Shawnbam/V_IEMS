<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'student_id', 'question', 'given_answer','true_answer',
    ];
}
