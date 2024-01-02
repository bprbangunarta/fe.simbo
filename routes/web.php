<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('home.index');
    });

    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/transaksi', 'index')->name('transaksi.index');

        Route::get('/mutasi', 'mutasi')->name('mutasi.index');
        Route::get('/mutasi/{id?}/{param?}', 'show_mutasi')->name('mutasi.detail');
    });

    Route::controller(RekeningController::class)->group(function () {
        Route::get('/rekening', 'list')->name('rekening.list');
    });

    Route::controller(AkunController::class)->group(function () {
        Route::get('/akun', 'index')->name('akun.profile');
    });



    Route::get('/hubungi-kami', function () {
        return view('bantuan.hubungi-kami');
    });
    Route::get('/pusat-bantuan', function () {
        return view('bantuan.pusat-bantuan');
    });
    Route::get('/syarat-ketentuan', function () {
        return view('bantuan.syarat-ketentuan');
    });
});
