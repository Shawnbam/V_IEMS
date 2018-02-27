<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function queries(){
        return $this->hasMany('App\Query');
    }

    public function pcomments(){
        return $this->hasMany('App\Pcomment');
    }

    public function plikes(){
        return $this->hasMany('App\Plike');
    }

    public function pclikes(){
        return $this->hasMany('App\PClike');
    }

    public function collaborates(){
        return $this->hasMany('App\Collaborate');
    }
}
