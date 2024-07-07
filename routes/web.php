<?php

use App\Models\Pesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TransaksiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/auth', [UserController::class, 'index'])->name('login');
Route::post('/auth', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::post('/penjualan', [PenjualanController::class, 'store']);

Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::post('/pesanan/edit', [PesananController::class, 'update']);
Route::post('/pesanan/detail/{id}', [PesananController::class, 'getDetail']);
Route::delete('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi/edit', [TransaksiController::class, 'update']);
Route::post('/transaksi/detail/{id}', [TransaksiController::class, 'getDetail']);
Route::delete('/transaksi/delete/{id}', [TransaksiController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang', [BarangController::class, 'store']);
Route::post('/barang/edit', [BarangController::class, 'update']);
Route::post('/barang/detail/{id}', [BarangController::class, 'getDetail']);
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::post('/pelanggan/edit', [PelangganController::class, 'update']);
Route::post('/pelanggan/detail/{id}', [PelangganController::class, 'getDetail']);
Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
Route::post('/pelanggan/leaderboard', [PelangganController::class, 'getLeaderboard']);

Route::get('/', [DashboardController::class, 'index']);