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
    return view('welcome');
});
Route::get('ntaps', function () {
    return 'mantap gan';
});
//Route::get('pengguna/{pengguna}', function ($pengguna) {
//    return "Hello World dari pengguna $pengguna";
//});
Route::get('kelas_b/framework/{mhs?}', function ($mhs="Anonim") {
    return "Selamat Datang $mhs";
});
Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('tb_dosen','tb_dosenController@awal');

Route::get('tb_dosen/tambah','tb_dosenController@tambah');

Route::get('tb_mhs','tb_mhsController@awal');

Route::get('tb_mhs/tambah','tb_mhsController@tambah');

Route::get('tb_mk','tb_mkController@awal');

Route::get('tb_mk/tambah','tb_mkController@tambah');

Route::get('tb_ruangan','tb_mkController@awal');

Route::get('tb_ruangan/tambah','tb_ruanganController@tambah');

Route::get('tb_dosen_mk','tb_dosen_mkController@awal');

Route::get('tb_dosen_mk/tambah','tb_dosen_mkController@tambah');

Route::get('tb_jadwal_mk','tb_jadwal_mkController@awal');

Route::get('tb_jadwal_mk/tambah','tb_jadwal_mkController@tambah');