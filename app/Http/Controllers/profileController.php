<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;

class profileController extends Controller
{
	public function update(Request $request,$id)
	{

		$userid =Profile::where('user_id',$id)->first();
		
		if(($userid['user_id']) == $id)
		{

			$filename =$request->profile_pic->getClientOriginalName();
			$request->profile_pic->storeAs('public',$filename);
		    $Profile = new Profile;
			$profile_pic =$Profile->profile_pic=$filename;
			$bio = $Profile->bio=$request['bio'];
			$user_id =$Profile->user_id=Auth::user()->id;

			/*$profile_pic = $request->input('profile_pic');
			$bio = $request->input('bio');
			$user_id = Auth::user()->id;*/
			$data=array('profile_pic' =>$profile_pic , 'bio' => $bio, 'user_id' => $user_id );

			//Profile::update($id,$data);
			//DB::table('student')->update($data);
			Profile::where('user_id', $id)->update($data);


			$fname=$request->input('fname');
			$dept=$request->input('dept');
			$sem=$request->input('sem');
			$data=array('fname' => $fname, 'dept' => $dept, 'sem' => $sem);

			User::where('id',$id)->update($data);



		  return redirect('/user/profile')->with(['message'=>"suceessfull"]);

		}	
		else
		{
			$this->validate($request,[
    			'profile_pic'=> 'required'
    		]);

	    	$user_id=Auth::user()->id;
	    	$user=Profile::where('user_id',$user_id)->first();

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
