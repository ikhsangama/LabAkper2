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
  Route::get('/pengguna/create', 'PenggunaController@create');
  Route::get('/pengguna/query', 'PenggunaController@search');
  Route::get('/pengguna/{id}/delete', 'PenggunaController@destroy');
  Route::get('/pengguna/{id}/edit', 'PenggunaController@edit');
  Route::get('/pengguna/{id}/lock', 'PenggunaController@lock');
  Route::get('/pengguna/{id}/unlock', 'PenggunaController@unlock');
  Route::get('/pengguna/{id}/verify', 'PenggunaController@verify');
  Route::get('/pengguna/{id}', 'PenggunaController@show');
  Route::PUT('/pengguna/{id}', 'PenggunaController@update');
  Route::post('/pengguna', 'PenggunaController@store');
  //kategori
  Route::get('/kategori/create', 'KategoriController@create');
  Route::post('/daftarkategori', 'KategoriController@store');

});

Auth::routes();

Route::get('/sop', 'SOPController@index');
Route::get('/daftarkategori', 'KategoriController@index');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
//instruksikerja
Route::get('/instruksikerja', 'InstruksiKerjaController@index');
// Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
