<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return redirect()->away('https://www.bryandeknikker.nl', 301);
});

Route::get('/', function () {
    return view('pages.home');
})->name('home');


