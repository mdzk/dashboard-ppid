<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeberatanController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/keberatan', [KeberatanController::class, 'index']);
    Route::get('/keberatan/show/{id}', [KeberatanController::class, 'show']);

    Route::get('/pengajuan', [PengajuanController::class, 'index']);
    Route::get('/pengajuan/show/{id}', [PengajuanController::class, 'show']);
});
