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
    return view('welcome');
});

//guru
Route::get('penilaian_siswa','penilaianController@index');//penilaian siswa //masih useles 
Route::get('penilaian_siswa/create','penilaianController@create'); //route untuk create
Route::post('penilaian_siswa','penilaianController@store'); 
Route::get('penilaian_siswa/check','penilaianController@check_kode');
Route::post('penilaian_siswa/check','penilaianController@checking');

Route::get('siswa','siswaController@index');//siswa
Route::get('siswa/create','siswaController@create');
Route::post('siswa','siswaController@store');
Route::delete('/siswa/{id}','siswaController@destroy');

Route::get('raport','raportController@index');//raport
Route::get('/raport/{id}/check','raportController@check');
Route::get('/raport/{id}/penjurusan','raportController@penjurusan');

Route::get('bobot_soal','bobotController@index');//bobot soal
Route::get('bobot_soal/{id}/search','bobotController@search');

//admin
Route::get('penjurusan','penjurusanController@index');//penjurusan
Route::get('penjurusan/create','penjurusanController@create');
Route::post('penjurusan','penjurusanController@store'); 

Route::resource('pegawai', 'PegawaiController');
Route::resource('pelajaran', 'PelajaranController');

// kumpulan route useles
Route::resource('post', 'PostsController');
Route::resource('pos2', 'Pos2Controller');
Route::resource('posts', 'PostsController');
//Route::resource('siswa', 'siswaController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
