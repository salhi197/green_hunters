<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DailyLogController;
use Illuminate\Support\Facades\Route;

// Public marketing site
Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin backend — everything here requires login
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.areas.index');
    })->name('dashboard');
    Route::resource('areas', AreaController::class)->except(['show']);
    Route::resource('users', UserController::class)->except(['show']);

    Route::get('/logs', [DailyLogController::class, 'index'])->name('logs.index');
    Route::get('/logs/entry', [DailyLogController::class, 'entry'])->name('logs.entry');
    Route::post('/logs/entry', [DailyLogController::class, 'save'])->name('logs.save');
});
