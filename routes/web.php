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
  Route::get('/dashboard', 'DashboardController@index');
  Route::get('/dashboard/instruksikerja/create', 'InstruksiKerjaController@create');
  Route::get('/dashboard/instruksikerja/{id}/edit', 'InstruksiKerjaController@edit');
});

Auth::routes();

Route::get('/sop', 'SOPController@index');
Route::get('/daftar', 'DaftarAlatBahanController@index');
Route::get('/peminjaman', 'PeminjamanController@index');

//instruksikerja
Route::get('/instruksikerja', 'InstruksiKerjaController@index');
Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
