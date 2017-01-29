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
Route::group(['middleware' => 'admin'], function(){
  Route::get('/dashboard', 'DashboardController@index');
  //instruksikerja
  Route::get('/instruksikerja/create', 'InstruksiKerjaController@create');
  Route::post('/instruksikerja', 'InstruksiKerjaController@store');
  Route::get('/instruksikerja/{id}/delete', 'InstruksiKerjaController@destroy');
  Route::get('/instruksikerja/{id}/edit', 'InstruksiKerjaController@edit');
  Route::PUT('/instruksikerja/{id}', 'InstruksiKerjaController@update');
  //pengguna
  Route::get('/pengguna', 'PenggunaController@index');
});

Auth::routes();

Route::get('/sop', 'SOPController@index');
Route::get('/daftar', 'DaftarAlatBahanController@index');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
//instruksikerja
Route::get('/instruksikerja', 'InstruksiKerjaController@index');
// Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
