<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# API Portofolio 
Route::get('lihat-portofolio', [API::class, 'PortofolioIndex']);
Route::post('tambah-portofolio', [API::class, 'PortofolioStore']);
Route::put('edit-portofolio/{id}',  [API::class, 'PortofolioEdit']);
Route::delete('hapus-portofolio/{id}',  [API::class, 'PortofolioDelete']);

# API Anggota
Route::get('lihat-anggota', [API::class, 'AnggotaIndex']);
Route::post('tambah-anggota', [API::class, 'AnggotaStore']);
Route::put('edit-anggota/{id}',  [API::class, 'AnggotaEdit']);
Route::delete('hapus-anggota/{id}',  [API::class, 'AnggotaDelete']);

# API Users
Route::get('lihat-user', [API::class, 'UserIndex']);
Route::post('tambah-user', [API::class, 'UserStore']);
Route::put('edit-user/{id}',  [API::class, 'UserEdit']);
Route::delete('hapus-user/{id}',  [API::class, 'UserDelete']);