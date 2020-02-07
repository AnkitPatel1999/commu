<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatble;

class User extends Authenticatble
{
    protected $fillable = ['fname','sname','bday','profession','dept','sem','email','password'];

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

    public function likes()
    {
    	return $this->hasMany('App\Like');
    }
}
