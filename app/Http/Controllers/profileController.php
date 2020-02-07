<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;

class profileController extends Controller
{
    public function update(Request $request)
    {
    	$this->validate($request,[
    			'profile_pic'=> 'required'
    		]);

    	$user_id=Auth::user()->id;
    	$user=Profile::where('user_id',$user_id)->first();

    	if(1)
    	{
    		if($request->hasFile('profile_pic'))
			{
	      
			  $filename =$request->profile_pic->getClientOriginalName();
				$request->profile_pic->storeAs('public/proiflepic',$filename);
		    	$Profile = new Profile;
				$Profile->profile_pic=$filename;
				$Profile->bio=$request['bio'];
				$Profile->user_id=Auth::user()->id;
				//$Post->total_post=$request['total_post'];	

				$message = 'There was an error';

				if($Profile->updateOrCreate())
				{
					$message= 'Profile successfully Updated';
				}
			  return redirect('/user/profile')->with(['message'=>$message]);
			}
    		
    	}else{

	 		if($request->hasFile('profile_pic'))
			{
	      
			  $filename =$request->profile_pic->getClientOriginalName();
				$request->profile_pic->storeAs('public/proiflepic',$filename);
		    	$Profile = new Profile;
				$Profile->profile_pic=$filename;
				$Profile->bio=$request['bio'];
				$Profile->user_id=Auth::user()->id;
				//$Post->total_post=$request['total_post'];	

				$message = 'There was an error';

				if($Profile->save())
				{
					$message= 'Profile successfully Updated';
				}
			  return redirect('/user/profile')->with(['message'=>$message]);
			}
		}
        
    }
}
