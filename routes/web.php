<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbrgController;
use App\Http\Controllers\PnjlController;
use App\Http\Controllers\LprController;
use App\Http\Controllers\LprUserController;
use App\Http\Controllers\KbgController;
use App\Http\Controllers\KbgUserController;
use App\Http\Controllers\KptController;
use App\Http\Controllers\KptUserController;
use App\Http\Controllers\HomeUserController;

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

//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Auth::routes();



//Halaman User
Route::group(['middleware' => 'user'], function () {

    //homeuser
    Route::get('/homeuser', [App\Http\Controllers\HomeUserController::class, 'index'])
        ->name('homeuser');
    //

    //laporan User
    Route::get('/lpruser', [LprUserController::class, 'index']);
    //

    //Ketersediaan barang gudang
    Route::get('/kbguser', [KbgUserController::class, 'index']);
    //

    //Ketersediaan barang gudang
    Route::get('/kptuser', [KptUserController::class, 'index']);
    //
});

//Halaman Admin
Route::group(['middleware' => 'admin'], function () {

    //Halaman Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');

    //Halaman Input data barang
    Route::get('/ibrg', [App\Http\Controllers\IbrgController::class, 'index'])
        ->name('ibrg');
    Route::get('/ibrg/detail/{id_brg}', [App\Http\Controllers\IbrgController::class, 'detail']);
    Route::get('/ibrg/add', [App\Http\Controllers\IbrgController::class, 'add']);
    Route::post('/ibrg/insert', [App\Http\Controllers\IbrgController::class, 'insert']);
    Route::get('/ibrg/edit/{id_brg}', [App\Http\Controllers\IbrgController::class, 'edit']);
    Route::post('/ibrg/update/{id_brg}', [App\Http\Controllers\IbrgController::class, 'update']);
    Route::get('/ibrg/delete/{id_brg}', [App\Http\Controllers\IbrgController::class, 'delete']);
    //

    //Halaman Data Penjualan
    Route::get('/pnjl', [App\Http\Controllers\PnjlController::class, 'index'])
        ->name('pnjl');
    Route::get('/pnjl/detail/{id_pnjl}', [App\Http\Controllers\PnjlController::class, 'detail']);
    Route::get('/pnjl/add', [App\Http\Controllers\PnjlController::class, 'add']);
    Route::post('/pnjl/insert', [App\Http\Controllers\PnjlController::class, 'insert']);
    Route::get('/pnjl/edit/{id_pnjl}', [App\Http\Controllers\PnjlController::class, 'edit']);
    Route::post('/pnjl/update/{id_pnjl}', [App\Http\Controllers\PnjlController::class, 'update']);
    Route::get('/pnjl/delete/{id_pnjl}', [App\Http\Controllers\PnjlController::class, 'delete']);
    //

    //Halaman laporan
    Route::get('/lpr', [App\Http\Controllers\LprController::class, 'index'])
        ->name('lpr');
    Route::get('/lpr/detail/{id_lapor}', [App\Http\Controllers\LprController::class, 'detail']);
    Route::get('/lpr/add', [App\Http\Controllers\LprController::class, 'add']);
    Route::post('/lpr/insert', [App\Http\Controllers\LprController::class, 'insert']);
    Route::get('/lpr/edit/{id_lapor}', [App\Http\Controllers\LprController::class, 'edit']);
    Route::post('/lpr/update/{id_lapor}', [App\Http\Controllers\LprController::class, 'update']);
    Route::get('/lpr/delete/{id_lapor}', [App\Http\Controllers\LprController::class, 'delete']);
    //

    //Halaman Gudang
    Route::get('/kbg', [App\Http\Controllers\KbgController::class, 'index'])
        ->name('kbg');
    Route::get('/kbg/detail/{id_kbg}', [App\Http\Controllers\KbgController::class, 'detail']);
    Route::get('/kbg/add', [App\Http\Controllers\kbgController::class, 'add']);
    Route::post('/kbg/insert', [App\Http\Controllers\kbgController::class, 'insert']);
    Route::get('/kbg/edit/{id_kbg}', [App\Http\Controllers\kbgController::class, 'edit']);
    Route::post('/kbg/update/{id_kbg}', [App\Http\Controllers\KbgController::class, 'update']);
    Route::get('/kbg/delete/{id_kbg}', [App\Http\Controllers\KbgController::class, 'delete']);
    //

     //Halaman Gudang
     Route::get('/kpt', [App\Http\Controllers\KptController::class, 'index'])
     ->name('kpt');
    Route::get('/kpt/detail/{id_kpt}', [App\Http\Controllers\KptController::class, 'detail']);
    Route::get('/kpt/add', [App\Http\Controllers\KptController::class, 'add']);
    Route::post('/kpt/insert', [App\Http\Controllers\KptController::class, 'insert']);
    Route::get('/kpt/edit/{id_kpt}', [App\Http\Controllers\KptController::class, 'edit']);
    Route::post('/kpt/update/{id_kpt}', [App\Http\Controllers\KptController::class, 'update']);
    Route::get('/kpt/delete/{id_kpt}', [App\Http\Controllers\KptController::class, 'delete']);
 //


    
});
