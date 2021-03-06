<?php

use Illuminate\Routing\RouteGroup;
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


// agar route awal selalu mengarah ke /login
Route::redirect('/', '/login');

//route untuk auth (login dan 404)
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::middleware(['auth', 'CheckRole:admin'])->group(function () {

    //route untuk dashboard
    Route::get('/dashboard', 'DashboardController@index');

    // route untuk Master Mahasiswa 
    Route::get('/mahasiswa', 'MahasiswaController@index');
    Route::get('/mahasiswa/list', 'MahasiswaController@list');
    Route::get('/mahasiswa/create', 'MahasiswaController@create');
    Route::get('/logbook', 'LogbookController@index');
    Route::get('/logbook/create', 'LogbookController@create');
    Route::get('/logbook/list', 'LogbookController@getLogbook')->name('logbook.list');
    Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show');

    Route::post('/mahasiswa', 'MahasiswaController@store');                     //mengirim data
    Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit');      //mengangkap data
    Route::patch('/mahasiswa/{mahasiswa}', 'MahasiswaController@update');       //mengubah data
    Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');     //menghapus data (dari detail)
    Route::get('/mahasiswa/{mahasiswa}/delete', 'MahasiswaController@delete');  //menghapus data (dari menu)

});

Route::middleware(['auth', 'CheckRole:admin,mahasiswa'])->group(function () {
});

Route::middleware(['auth', 'CheckRole:mahasiswa'])->group(function () {

    // route untuk Home
    Route::get('/home', function () {
        return view('index');
    });

    // route untuk Profil
    Route::get('/profil', 'ProfilController@index');
});
