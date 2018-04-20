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

    public function journals(){
        return $this->hasMany('App\Journal');
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

    public function qcomments() {
        return $this->hasMany('App\Qcomment');
    }

    public function qclikes() {
        return $this->hasMany('App\Qclike');
    }

    //addy
    public function likes() {
        return $this->hasMany('App\QLike');
    }
    public function pclikes(){
        return $this->hasMany('App\Pclike');
    }

    public function collaborates(){
        return $this->hasMany('App\Collaborate');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }
}
