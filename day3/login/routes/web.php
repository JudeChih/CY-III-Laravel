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

Route::get('/','HomeController@index');
Route::get('/home/login','HomeController@index');
Route::get('/member/secret','HomeController@secret');
Route::get('/member/login','MemberController@login');
Route::get('/member/logout','MemberController@logout');
Route::post('/member/login','MemberController@postLogin');



