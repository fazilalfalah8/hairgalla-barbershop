<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

Route::get('/', function () {
    return view('home');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::post('/pesan', [PesananController::class, 'store']);

Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PesananController as AdminPesananController;
use App\Http\Controllers\Admin\LayananController;

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Panel
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/pesanan', [AdminPesananController::class, 'index'])->name('admin.pesanan');
Route::patch('/pesanan/{pesanan}/status', [AdminPesananController::class, 'updateStatus']);
Route::delete('/pesanan/{pesanan}', [AdminPesananController::class, 'destroy']);

    Route::get('/layanan', [LayananController::class, 'index'])->name('admin.layanan');
    Route::get('/layanan/create', [LayananController::class, 'create']);
    Route::post('/layanan', [LayananController::class, 'store']);
    Route::get('/layanan/{layanan}/edit', [LayananController::class, 'edit']);
    Route::patch('/layanan/{layanan}', [LayananController::class, 'update']);
    Route::delete('/layanan/{layanan}', [LayananController::class, 'destroy']);
});