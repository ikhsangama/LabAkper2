<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verify/{token}/{id}', 'Auth\RegisterController@verify_register');

//admin
Route::group(['middleware' => 'web'], function(){
  Route::get('/dashboard', 'AdminController@dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/instruksikerja', 'InstruksiKerjaController@index');
