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

Route::group(['middleware' => 'admin'], function () {
    // Rute-rute admin di sini
    Route::get('/admin-login', 'Auth\LoginController@adminLoginForm')->name('admin.login');
    Route::post('/admin-login', 'Auth\LoginController@adminLogin');
});

Route::group(['middleware' => 'admin'], function () {
    // Rute-rute admin di sini
    Route::get('/admin-login', 'Auth\LoginController@adminLoginForm')->name('admin.login');
    Route::post('/admin-login', 'Auth\LoginController@adminLogin');
    Route::post('/admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
});

Route::get('/', function () {
    return view('index');
});
