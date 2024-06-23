<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PenjualanController;

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/auth', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/penjualan', [PenjualanController::class, 'index'])->middleware('auth');
Route::post('/penjualan', [PenjualanController::class, 'store']);

Route::get('/pesanan', [PesananController::class, 'index'])->middleware('auth');
Route::post('/pesanan', [PesananController::class, 'store']);