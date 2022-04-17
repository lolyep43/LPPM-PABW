<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use app\Http\Controllers;

=======
>>>>>>> 39746d2 (MailHog)

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
<<<<<<< HEAD
=======

>>>>>>> 39746d2 (MailHog)
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/login',  'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
=======
>>>>>>> 39746d2 (MailHog)
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('portofolio', 'PortofolioController');
    Route::resource('user', 'UserController');
    Route::resource('QNA', 'qnaController');
    Route::resource('blog', 'blogController');
<<<<<<< HEAD
});
=======
    Route::resource('anggota', 'anggotaController');
    
});
require __DIR__.'/auth.php';
>>>>>>> 39746d2 (MailHog)
