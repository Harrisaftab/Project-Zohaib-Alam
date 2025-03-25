<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ShopController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');


// Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
// Admin Routes (Protected)
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/products', function () {
        return view('admin.products');
    })->name('admin.products');

    Route::get('/services', function () {
        return view('admin.services');
    })->name('admin.services');
});

// Profile Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';
