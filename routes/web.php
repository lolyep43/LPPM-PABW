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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('portofolio', 'PortofolioController');
    Route::resource('user', 'UserController');
    Route::resource('QNA', 'qnaController');
    Route::resource('blog', 'blogController');
    Route::resource('anggota', 'anggotaController');
    
});
require __DIR__.'/auth.php';
