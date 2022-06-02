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

Route::get('/', 'landingPageController@dataLanding');
Route::get('/list-blog', 'landingPageController@dataBlog')->name('blog-data.list');
Route::get('/data-blog/{slug}', 'landingPageController@detailDataBlog')->name('blog-data.isi');

// Route::get('/login','AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('portofolio', 'PortofolioController');
    Route::resource('user', 'UserController');
    Route::resource('QNA', 'qnaController');
    Route::resource('blog', 'blogController');
    Route::resource('anggota', 'anggotaController');
    Route::resource('contact', 'ContactController');
    
});


require __DIR__.'/auth.php';
