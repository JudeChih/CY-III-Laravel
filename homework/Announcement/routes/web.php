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

Route::get('/', function () {
    return redirect('/ann');
});

Route::resource('/ann', 'AnnouncementController');
Route::get('/ann/{id}/delete','AnnouncementController@destroy');
Route::resource('/user', 'UserController');
Route::get('/login',function(){
    return view('login');
});
Route::post('/login','UserController@checkUser');
Route::get('/logout',function(){
    setcookie('userdata',null,time() - 24 * 60 * 60);
    return redirect('/login');
});