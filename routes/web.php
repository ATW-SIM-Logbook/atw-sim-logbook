<?php

use Illuminate\Support\Facades\Route;

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

// agar route awal selalu mengarah ke /home
Route::redirect('/', '/home');

// route untuk Home
Route::get('/home', function () {
    return view('index');
});

// route untuk Master Mahasiswa 
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/list', 'MahasiswaController@list');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show');

//mengirim data
Route::post('/mahasiswa', 'MahasiswaController@store');

//mengangkap data
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit');
//mengubah data
Route::patch('/mahasiswa/{mahasiswa}', 'MahasiswaController@update');

//menghapus data
Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');
