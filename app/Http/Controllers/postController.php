<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Like;
use Session;
use Auth;
use Storage;

class postController extends Controller
{
	public function post()
    {
        $posts=Post::orderBy('created_at','desc')->get();
        $users=User::all();
       
        	return view('communito.layouts.post',compact('posts','users'));
    }

    public function store(Request $request)
    {
    		$this->validate($request,[
    			'postpic'=> 'required'
    		]);
 		if($request->hasFile('postpic'))
		{
      
		  $filename =$request->postpic->getClientOriginalName();
			$request->postpic->storeAs('public',$filename);

	    $Post = new Post;
			$Post->postpic=$filename;
			$Post->postdes=$request['postdes'];	
			$message = 'There was an error';

			if($request->user()->posts()->save($Post))
			{
				$message= 'Post successfully created';
			}
		  return redirect('/user/post')->with(['message'=>$message]);
		}
        

				    	/*$Post = new Post;
				  		$Post->postdes=request('postdes');	
				  		$Post->save();*/
//			dd($request->all());
    }
    public function deletePost($post_id)
    {
    	$post = Post::where('id',$post_id)->first();
    	if(Auth::user() != $post->user){
    		return redirect()->back();
    	}
    	$post->delete();
    	return redirect('/user/post')->with('deleteMessage','Post deleted successfully');
    }
    /*public function editPost(Request $request)
    {
    	$this->validate($request,[
    		'postdes'=>'required'
    	]);
    	$post = Post::find($request['post_id']);
    	$post->postdes=$request['postdes'];
    	$post->update();
    	return response()->json(['message' => 'Post edited'],200);
    }*/
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $post->update($request->all());
  
        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');
    }
    public function like(Request $request)
    {
           $post_id = $request['post_Id'];
           $islike = $request['isLike'] === 'true';
           $update = false;
           $post = Post::find($post_id);
           if (!$post) {
               return null;
           }
           $user = Auth::user();
           $like = $user->likes()->where('post_id', $post_id)->first();
           if ($like) {
               $already_like = $like->like;
               $update = true;
               if ($already_like == $islike) {
                   $like->delete();
                   return null;
               }
           } else {
               $like = new Like();
           }
           $like->like = $is_like;
           $like->user_id = $user->id;
           $like->post_id = $post->id;
           if ($update) {
               $like->update();
           } else {
               $like->save();
           }
           return null;
       
       
    }
}