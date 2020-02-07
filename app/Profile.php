<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable=['id','profilepic','bio','name','dept','sem','followers','following','total_post'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    } 
    
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

   
}
