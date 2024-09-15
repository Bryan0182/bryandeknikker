<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cases/create', [BlogController::class, 'create'])->name('blogs.create')->middleware('auth');

Route::get('/cases/success', [BlogController::class, 'success'])->name('blogs.success');

Route::post('/cases', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/recent-blogs', [BlogController::class, 'showRecentBlogs'])->name('blogs.recent');

Route::get('/cases/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
