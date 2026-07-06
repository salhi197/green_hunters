<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Public marketing site
Route::view('/', 'welcome');

// Auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin backend — everything here requires login
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', '/admin/areas')->name('dashboard');
    Route::resource('areas', AreaController::class)->except(['show']);
    Route::resource('users', UserController::class)->except(['show']);
});
