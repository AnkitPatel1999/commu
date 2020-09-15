<?php

namespace App\Traits;
use App\friendship;

trait Friendable
{
	public function test()
	{
		return 'hi';
	}
	public function addFriend($id)
	{
		$Friendship = friendship::create([
			'requester' => $this->id,
			'user_requested' =>$id,
		]);
		if($Friendship)
		{
			return back();
		}
		else
		{
			return 'failed';
		}
	}
}