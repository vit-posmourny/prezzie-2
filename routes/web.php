<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index']); 


Route::get('/login', [AuthController::class, 'index']); 
Route::post('/login', [AuthController::class, 'authenticate']); 
Route::get('/register', [AuthController::class, 'store']); 



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/new_wishlist', [DashboardController::class, 'create'])->name('wishlist.create');
Route::post('/create_wishlist', [DashboardController::class, 'store'])->name('wishlist.store');

Route::get('/wishes/{wishlist}', [WishController::class, 'index'])->name('wishes');
Route::get('/wish/{wishlist}', [WishController::class, 'create'])->name('wish.create');
Route::post('/wish/{wishlist}', [WishController::class, 'store'])->name('wish.store');
