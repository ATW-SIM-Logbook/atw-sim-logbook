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

//route untuk auth (login dan 404)
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


// agar route awal selalu mengarah ke /home
// Route::redirect('/', '/dashboard');

// route untuk Home
Route::get('/home', function () {
    return view('index');
});

Route::middleware(['auth', 'CheckRole:admin'])->group(function () {

    //route untuk dashboard
    Route::get('/dashboard', 'DashboardController@index');

    // route untuk Master Mahasiswa 
    Route::get('/mahasiswa', 'MahasiswaController@index');
    Route::get('/mahasiswa/list', 'MahasiswaController@list');
    Route::get('/mahasiswa/create', 'MahasiswaController@create');
    Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show');

    Route::post('/mahasiswa', 'MahasiswaController@store');                     //mengirim data
    Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit');      //mengangkap data
    Route::patch('/mahasiswa/{mahasiswa}', 'MahasiswaController@update');       //mengubah data
    Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');     //menghapus data (dari detail)
    Route::get('/mahasiswa/{mahasiswa}/delete', 'MahasiswaController@delete');  //menghapus data (dari menu)
});

Route::middleware(['auth', 'CheckRole:admin,mahasiswa'])->group(function () {

    // route untuk logbook
    Route::get('/logbook', 'LogbookController@index');

    // route untuk Profil
    Route::get('/profil', 'ProfilController@index');
});
