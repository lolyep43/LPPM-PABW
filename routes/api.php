<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;
use App\Http\Controllers\AuthAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(AuthAPI::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});
# API Lupa password
Route::post('reset-password', [API::class, 'link_password']);


Route::group(['middleware' => 'auth:api'], function (){
    
    # API Portofolio 
    Route::get('lihat-portofolios', [API::class, 'PortofolioIndex']);
    Route::get('lihat-portofolio/{id}', [API::class, 'PortofolioData']);
    Route::post('tambah-portofolio', [API::class, 'PortofolioStore']);
    Route::put('edit-portofolio/{id}',  [API::class, 'PortofolioEdit']);
    Route::delete('hapus-portofolio/{id}',  [API::class, 'PortofolioDelete']);
    
    # API Anggota
    Route::get('lihat-anggotas', [API::class, 'AnggotaIndex']);
    Route::get('lihat-anggota/{id}', [API::class, 'AnggotaData']);
    Route::post('tambah-anggota', [API::class, 'AnggotaStore']);
    Route::put('edit-anggota/{id}',  [API::class, 'AnggotaEdit']);
    Route::delete('hapus-anggota/{id}',  [API::class, 'AnggotaDelete']);
    
    # API Blog
    Route::get('lihat-blogs', [API::class, 'BlogIndex']);
    Route::get('lihat-blog/{id}', [API::class, 'BlogData']);
    Route::post('tambah-blog', [API::class, 'BlogStore']);
    Route::put('edit-blog/{id}',  [API::class, 'BlogEdit']);
    Route::delete('hapus-blog/{id}',  [API::class, 'BlogDelete']);
    
    # API Users
    Route::get('lihat-users', [API::class, 'UserIndex']);
    Route::get('lihat-user/{id}', [API::class, 'UserData']);
    Route::post('tambah-user', [API::class, 'UserStore']);
    Route::put('edit-user/{id}',  [API::class, 'UserEdit']);
    Route::delete('hapus-user/{id}',  [API::class, 'UserDelete']);

    # API FAQ
    Route::get('lihat-faqs', [API::class, 'qnaIndex']);
    Route::get('lihat-faq/{id}', [API::class, 'qnaData']);
    Route::post('tambah-faq', [API::class, 'qnaStore']);
    Route::put('edit-faq/{id}',  [API::class, 'qnaEdit']);
    Route::delete('hapus-faq/{id}',  [API::class, 'qnaDelete']);

    #API Contact Us
    Route::get('lihat-contact', [API::class, 'ContactIndex']);
    Route::put('edit-contact/{id}', [API::class, 'ContactEdit']);
});
