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

Route::get('/lab', "LabController@index");
Route::get('/lab/show/{id}/{ddd}', "LabController@show");
Route::get('/lab/param', "LabController@param");
Route::get('/lab/form', "LabController@getForm");
Route::post('/lab/form/{id}', "LabController@postForm");
Route::get('/lab/xml', "LabController@xml");
Route::get('/lab/memberOnly', "LabController@memberOnly");
Route::post('/lab/memberOnly', "LabController@memberOnly");



Route::resource('data', 'DataController');
Route::resource('data', 'DataController', 
    ['only' => ['index', 'show']]); //除了index跟show可以用，其他連結都不用
Route::resource('data', 'DataController', 
    ['except' => ['create', 'store', 'update', 'destroy']]); //什麼都可以用，除了上列這幾個不用
