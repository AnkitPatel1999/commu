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

Route::get('firebase','FirebaseController@index');



route::post('user/login','userController@login');
route::get('user/login',['as'=>'user/login','uses'=>'userController@showLogin']);

Route::get('user/signup','userController@showSignup');
Route::post('/user/signup','userController@store');
Route::post('/user/logout','userController@logout');


/*Route::get('/communito/home', function () {
    return view('communito.layouts.home');
});*/

Route::group(['middleware'=>['auth']],function(){
	Route::get('/user/findfriends','webController@findfriends');
	route::get('/addFriend/{id}','webController@sendRequest');

	route::get('/request','webController@request');
	route::get('/accept/{name}/{id}','webController@accept');
	route::get('/requestRemove/{id}','webController@requestRemove');
	route::get('/friends','webController@friends');
	route::get('/friendprofile/{id}','webController@friendprofile');
	//route::get('/friendprofile',['as'=>'/friendprofile/{id}','uses'=>'webController@friendprofile']);
	route::get('/unfriend/{id}','webController@unFriend');




	Route::get('/user/chat','webController@chat');
	Route::get('/user/profile','webController@myaccount');
	Route::get('/user/setting','webController@setting');
	Route::get('/user/post','postController@post');
	route::post('/user/post',['as'=>'user/post','uses'=>'postController@store']);
	route::get('delete/{post_id}',['as'=>'delete','uses'=>'postController@deletePost']);
	route::get('like/{id}',['as'=>'like','uses'=>'postController@like']);

    //Route::get('/like/{id}','postController@like');

/*	Route::post('user/edit',function(\Illuminate\Http\Request $request){
		return response()->json( ['message'=> $request['post_id']] );
	})->name('user/edit');*/
	route::post('user/edit',['as' => 'user/edit' , 'uses' => 'postController@editPost']);
	route::post('user/like',['as' => 'user/like' , 'uses' => 'postController@like']);

	
	route::post('/user/profileUpdate/{id}',['as' => 'user/profileUpdate' , 'uses' => 'profileController@update']);

	route::get('/user/home','userController@index');
});


//Route::get('/user/home','webController@home')->name('user.home');

Route::get('/ok','userController@show');



Route::get('/test',function(){
	return Auth::user()->test();
});

Route::get('/', function () {
	return view('welcome');
	});
	Route::get('/phpfirebase_sdk','FirebaseController@index');
