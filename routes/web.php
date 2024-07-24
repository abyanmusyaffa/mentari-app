<?php

use App\Models\Pesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AdminMiddleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/pesanan/edit', [PesananController::class, 'update']);
Route::post('/pesanan/detail/{id}', [PesananController::class, 'getDetail']);
Route::delete('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware('auth');
Route::post('/transaksi/edit', [TransaksiController::class, 'update']);
Route::post('/transaksi/detail/{id}', [TransaksiController::class, 'getDetail']);
Route::delete('/transaksi/delete/{id}', [TransaksiController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');
Route::post('/barang', [BarangController::class, 'store']);
Route::post('/barang/edit', [BarangController::class, 'update']);
Route::post('/barang/detail/{id}', [BarangController::class, 'getDetail']);
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy']);

Route::get('/pelanggan', [PelangganController::class, 'index'])->middleware('auth');
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::post('/pelanggan/edit', [PelangganController::class, 'update']);
Route::post('/pelanggan/detail/{id}', [PelangganController::class, 'getDetail']);
Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
Route::post('/pelanggan/leaderboard', [PelangganController::class, 'getLeaderboard']);

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth', AdminMiddleware::class);

Route::post('/satuan', [AdminController::class, 'insertSatuan']);
Route::post('/satuan/detail/{id}', [AdminController::class, 'getDetailSatuan']);
Route::post('/satuan/edit', [AdminController::class, 'updateSatuan']);
Route::delete('/satuan/delete/{id}', [AdminController::class, 'destroySatuan']);

Route::post('/kategori', [AdminController::class, 'insertKategori']);
Route::post('/kategori/detail/{id}', [AdminController::class, 'getDetailKategori']);
Route::post('/kategori/edit', [AdminController::class, 'updateKategori']);
Route::delete('/kategori/delete/{id}', [AdminController::class, 'destroyKategori']);

Route::post('/user', [UserController::class, 'store']);
Route::post('/user/detail/{id}', [UserController::class, 'getDetail']);
Route::post('/user/edit', [UserController::class, 'update']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);

Route::post('/toko', [AdminController::class, 'updateToko']);