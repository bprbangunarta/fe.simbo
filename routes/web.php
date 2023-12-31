<?php

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
    return redirect('login');
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
        Route::get('/transaksi', 'index')->name('transaksi.mutasi');
        Route::get('/transaksi/detail/{id?}/{param?}', 'show')->name('transaksi.mutasi.detail');
    });

    Route::controller(RekeningController::class)->group(function () {
        Route::get('/rekening', 'list')->name('rekening.list');
    });





    Route::get('/transaksi/detail', function () {
        return view('transaksi.detail');
    });

    Route::get('/akun', function () {
        return view('akun.profile');
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
