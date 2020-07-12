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
//Public
Route::get('/', function () { return view('index'); });

//Admin
Route::get('/admin', function () { return view('login'); });
Route::get('/admin/profile/id','UserController@index')->middleware('guest')->name('profile');
Route::get('/admin/dashboard','DashboardController@index')->middleware('guest')->name('dashboard');
Route::get('/admin/data-permohonan','PermohonanController@index')->middleware('guest')->name('permohonan');
Route::get('/admin/data-pengguna','PenggunaController@index')->middleware('guest')->name('pengguna');
