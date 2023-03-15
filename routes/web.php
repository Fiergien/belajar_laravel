<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;





Route::get('/register',[RegisterController::class,'index']); 
Route::post('/proses_register',[RegisterController::class,'register_proses']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login_proses',[LoginController::class, 'login_proses']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');

Route::post('/logout', [LoginController::class, 'index']);