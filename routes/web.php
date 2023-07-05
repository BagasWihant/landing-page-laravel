<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AksesPublic;

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

Route::get('/', [AksesPublic::class, 'index']);



Route::prefix('/admin')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/fitur', 'fitur')->name('fitur');
        Route::get('/kategori', 'kategori')->name('kategori');
        Route::get('/detail', 'detail')->name('detail');
        Route::get('/slogan', 'slogan')->name('slogan');
        Route::get('/layanan', 'layanan')->name('layanan');
        Route::get('/gambar', 'gambar')->name('layanan');
    });

});

Auth::routes();

