<?php

use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/accounts', function () {
    return view('accounts');
})->name('accounts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::middleware(['auth', 'role:seller'])->get('/seller/dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
Route::middleware(['auth', 'role:consumer'])->get('/consumer/dashboard', [ConsumerController::class, 'index'])->name('consumer.dashboard');

require __DIR__.'/auth.php';