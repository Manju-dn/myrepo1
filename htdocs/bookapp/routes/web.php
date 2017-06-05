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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/home',function() {
	return  "hi";
});
*/

Route::get('/', function () {
    return view('front');
});


/*Route::get('/notebooks',function(){
	return view('notebooks.index');
});*/

/*or*/

Route::get('/notebooks','NotebooksController@index');

Route::get('/notebooks/create','NotebooksController@create');
Route::post('notebooks','NotebooksController@store');
Route::post('notebooks','NotebooksController@store');
Route::get('notebooks/{notebooks}','NotebooksController@edit');
Route::put('notebooks/{notebooks}','NotebooksController@update');
