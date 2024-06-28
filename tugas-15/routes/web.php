<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CastController;

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


Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/table', [HomeController::class, 'tabel']);

Route::get('/data-table', [HomeController::class, 'data']);
Route::get('/home', function() {
    return view('page.main');
});
Route::get('/biodata', function () {
    return view('page.biodata');
});

Route::get('/selamatdatang', [MainController::class, 'kirim']);

//CRUD Cast
// Create Data Cast
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);//menyimpan data cast

//Read data cast
Route::get('/cast', [CastController::class, 'index']);//untuk menampilkan semua cast di table
//Tampilan detail data pemain
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
//Update data
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Delete Data
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);

