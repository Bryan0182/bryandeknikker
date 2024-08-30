<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blogs/create', function () {
    return view('pages.blog_create');
})->name('blogs.create');

Route::get('/blogs/success', [BlogController::class, 'success'])->name('blogs.success');

Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/recent-blogs', [BlogController::class, 'showRecentBlogs'])->name('blogs.recent');

Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
