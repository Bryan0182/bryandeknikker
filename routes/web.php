<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/recent-blogs', [BlogController::class, 'showRecentBlogs'])->name('recent-blogs');
