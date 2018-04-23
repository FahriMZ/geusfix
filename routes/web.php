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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delete-user/{id}', 'HomeController@deleteUser')->name('delete-user');
Route::get('/user-akses', 'HomeController@userAkses')->name('user-akses');
Route::post('/tambah-user-akses/{id}', 'HomeController@tambahUserAkses')->name('set_user_akses');
