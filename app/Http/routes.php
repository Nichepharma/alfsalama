<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('http://www.nichepharma.com/soon');
});
Route::get('/protocols', function(){
  return view('protocols');
});

Route::auth();

Route::get('/home', 'HomeController@index');
