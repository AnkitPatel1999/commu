<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/communito','userController@index');

Route::get('/communito/login','userController@login');
*/

Route::get('communito','userController@index');




route::post('user/login','userController@login');
route::get('user/login',['as'=>'user/login','uses'=>'userController@showLogin']);

Route::get('user/signup','userController@showSignup');
Route::post('/user/signup','userController@store');
Route::post('/user/logout','userController@logout');


/*Route::get('/communito/home', function () {
    return view('communito.layouts.home');
});*/

Route::group(['middleware'=>['auth']],function(){
	Route::get('/user/findfriends','webController@request');
	Route::get('/user/chat','webController@chat');
	Route::get('/user/profile','webController@myaccount');
	Route::get('/user/setting','webController@setting');
	Route::get('/user/post','postController@post');
	route::post('/user/post',['as'=>'user/post','uses'=>'postController@store']);
	route::get('delete/{post_id}',['as'=>'delete','uses'=>'postController@deletePost']);
/*	Route::post('user/edit',function(\Illuminate\Http\Request $request){
		return response()->json( ['message'=> $request['post_id']] );
	})->name('user/edit');*/
	route::post('user/edit',['as' => 'user/edit' , 'uses' => 'postController@editPost']);
	route::post('user/like',['as' => 'user/like' , 'uses' => 'postController@like']);

	route::post('/user/profileUpdate',['as' => 'user/profileUpdate' , 'uses' => 'profileController@update']);

});


//Route::get('/user/home','webController@home')->name('user.home');

Route::get('/ok','userController@show');

Route::get('/home',function(){
	return view('/communito/home');
});

