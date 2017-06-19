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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/verify/{token}/{username}', 'Auth\RegisterController@verify_register');

//admin
Route::group(['middleware' => 'admin'], function(){
  Route::get('/dashboard', 'DashboardController@index');
  //instruksikerja
  Route::get('/instruksikerja/create', 'InstruksiKerjaController@create');
  Route::get('/instruksikerja/chart', 'InstruksiKerjaController@chart');
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
  Route::get('/pengguna/{id}/unverify', 'PenggunaController@unverify');
  Route::get('/pengguna/{id}', 'PenggunaController@show');
  Route::PUT('/pengguna/{id}', 'PenggunaController@update');
  Route::post('/pengguna', 'PenggunaController@store');
  //kategori
  Route::get('/kategori/create', 'KategoriController@create');
  Route::get('/kategori/{id}/edit', 'KategoriController@edit');
  Route::post('/kategori', 'KategoriController@store');
  Route::get('/kategori/{id}/delete', 'KategoriController@destroy');
  Route::PUT('/kategori/{id}', 'KategoriController@update');
  //alatbahan
  Route::get('/alatbahan/createalat', 'AlatBahanController@createalat');
  Route::get('/alatbahan/{id}/edit', 'AlatBahanController@edit');
});

//admin
Route::group(['middleware' => 'auth'], function()
{
  //instruksikerja
  Route::get('/instruksikerja', 'InstruksiKerjaController@index');
  Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
  //SOP
  Route::get('/sop', 'SOPController@index');
  //Alat
  Route::get('/alatbahan', 'AlatBahanController@index');
  Route::get('/alatbahan/{id}', 'AlatBahanController@show');
  //kategori
  // Route::get('/kategori/{id}', 'KategoriController@show');
});

Route::get('/kategori', 'KategoriController@index');
Route::get('/peminjaman', 'PeminjamanController@index');

// Route::get('/instruksikerja/{id}', 'InstruksiKerjaController@show');
