<?php

namespace App;

use App\Traits\Friendable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatble;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatble
{
	use Notifiable;

	use Friendable;

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
