<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Profile;
use App\friendship;
use Session;
use Storage;
use DB;
use Auth;

class webController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
 
    public function chat() {
      
          $uid = Auth::user()->id;

        $friends1 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.user_requested') // who is not loggedin but send request to
                ->where('status', 1)
                ->where('requester', $uid) // who is loggedin
                ->get();

        //dd($friends1);

        $friends2 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.requester')
                ->leftJoin('profiles','friendships.requester','profiles.user_id')
                ->select('fname','profile_pic','sname','users.id','dept')

                ->where('status', 1)
                ->where('user_requested', $uid)
                ->get();

       // $friends = array_merge($friends1->toArray(), $friends2->toArray());


        $friends = array_merge($friends1->toArray(), $friends2->toArray());

        //dd($friends);
        $users = Auth::user();
        $profile=Profile::where('user_id','=',$users->id)->first();

        return view('communito.layouts.chat',compact('profile','friends'));

    }


    public function findFriends()
    {
        $users = Auth::user();
        $profile=Profile::where('user_id','=',$users->id)->first();
        //$alluser= User::where('id','!=',$users->id)->get();

        $alluser = DB::table('users')
                ->leftJoin('profiles','users.id','profiles.user_id')    
                ->where('users.id','!=', $users->id)
                ->select('fname','profile_pic','sname','users.id','dept')
                ->get();
        //dd($alluser);

        return view('communito.layouts.request',compact('profile','alluser'));
    }

    public function sendRequest($id)
    {
    
        return Auth::user()->addFriend($id);
        return back();
    }
    public function request()
    {
        $users = Auth::user();
        $profile=Profile::where('user_id','=',$users->id)->first();
        //$alluser= User::where('id','!=',$users->id)->get();

        $alluser = DB::table('friendships')
        ->rightJoin('users','users.id','=','friendships.requester')
        ->leftJoin('profiles','friendships.requester','profiles.user_id')
        ->select('fname','sname','users.id','dept','profile_pic','user_id')
        ->where('status','=',0)
        ->where('friendships.user_requested','=',$users->id)->get();

        return view('communito.layouts.requestanswer',compact('profile','alluser'));
    }

    public function accept($name,$id)
    {

        $uid= Auth::user()->id;
        $checkRequest = friendship::where('requester',$id)
        ->where('user_requested',$uid)->first();
        if($checkRequest)
        {
            $updateFriendship = DB::table('friendships')
                ->where('user_requested',$uid)
                ->where('requester',$id)
                ->update(['status'=>1]);

           /* $updateFriendship2 = DB::table('friendships')
                ->where('user_requested',$id)
                ->where('requester',$uid)
                ->update(['status'=>1]);*/
                if($updateFriendship)
                {
                    return back()->with('msg','You are friend with  ' .$name);
                }
        }
        else
        {
            return back()->with('msg','You are not friend with ' .$name);
        }
    }

    public function requestRemove($id)
    {
            DB::table('friendships')
                    ->where('user_requested', Auth::user()->id)
                    ->where('requester', $id)
                    ->delete();

            return back()->with('msg', 'Request has been deleted');
    }

    public function unFriend($id)
    {
            DB::table('friendships')
                    ->where('user_requested', Auth::user()->id)
                    ->where('requester', $id)
                    ->delete();

            return back()->with('msg', 'You are not friend now');
    }


    public function friends() {
      
          $uid = Auth::user()->id;

        $friends1 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.user_requested') // who is not loggedin but send request to
                ->where('status', 1)
                ->where('requester', $uid) // who is loggedin
                ->get();

        //dd($friends1);

        $friends2 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.requester')
                ->leftJoin('profiles','friendships.requester','profiles.user_id')
                ->select('fname','profile_pic','sname','users.id','dept')

                ->where('status', 1)
                ->where('user_requested', $uid)
                ->get();

       // $friends = array_merge($friends1->toArray(), $friends2->toArray());


        $friends = array_merge($friends1->toArray(), $friends2->toArray());

        //dd($friends);
        $users = Auth::user();
        $profile=Profile::where('user_id','=',$users->id)->first();
        
        return view('communito.layouts.friends',compact('profile','friends'));

    }



    public function myaccount()
    {
        $users = Auth::user();
        $posts=Post::where('user_id',$users->id)->get(); 
        $profile=Profile::where('user_id','=',$users->id)->first();
        $postsCount = Post::where('user_id',Auth::user()->id)->count();
        $friends = friendship::where('status',1)
                            ->where('user_requested',Auth::user()->id)
                            ->count(); 

        
        return view('communito.layouts.myaccount',compact('friends','users','posts','profile','postsCount'));
    }
    public function setting()
    {
        $users = Auth::user();
        $profile=Profile::where('user_id','=',$users->id)->first();
        

        //dd($User);        
          return view('communito.layouts.setting',compact('users','profile'));
    }

    public function friendprofile($id)
    {
        $users =User::where('id',$id)->first();

        $posts=Post::where('user_id',$id)->get(); 
        $profile=Profile::where('user_id','=',$id)->first();
        $postsCount = Post::where('user_id',$id)->count();
        $friends = friendship::where('status',1)
                            ->where('user_requested',$id)
                            ->count(); 

        
        return view('communito.layouts.myaccount',compact('users','posts','profile','postsCount','friends'));
    }
}
