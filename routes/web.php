<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Models\category;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('product', ProductController::class)->middleware('auth');
    Route::resource('category', CategoryController::class)->middleware('auth');
    Route::resource('pemesanan', PemesananController::class)->middleware('auth');
});

Route::get('/frontend', [FrontendController::class, 'index'])->name('homepage-index');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('dashboard', function () {
//     return view('dashboard');
// });