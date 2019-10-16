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

Route::get('/communito','webcontroller@index');

Route::get('/communito/login','webcontroller@login');

Route::get('/communito/signup','webcontroller@signup');


/*Route::get('/communito/home', function () {
    return view('communito.layouts.home');
});*/


Route::get('/communito/post','webcontroller@post');

Route::get('/communito/request','webcontroller@requestFun');

Route::get('/communito/chat','webcontroller@chat');

Route::get('/communito/myaccount','webcontroller@myaccount');
Route::get('/communito/setting','webcontroller@setting');
