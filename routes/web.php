<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');
Route::post('/', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/dashboard/filter', [DashboardController::class, 'filterBy'])->name('filter');

    Route::resource('resume', ResumeController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

