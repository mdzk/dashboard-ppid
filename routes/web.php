<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeberatanController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/keberatan', [KeberatanController::class, 'index']);
    Route::get('/pengajuan', [PengajuanController::class, 'index']);
});
