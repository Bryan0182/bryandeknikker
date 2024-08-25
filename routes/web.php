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

Route::get('/contact/', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/over-mij/', function () {
    return view('pages.about');
})->name('over-mij');

Route::get('/cases/', function () {
    return view('pages.cases');
})->name('cases');

Route::get('/cases/accessibility/', function () {
    return view('pages.accessibility');
})->name('accessibility');

Route::get('/cases/kunst-van-elk/', function () {
    return view('pages.kunstvanelk');
})->name('kunstvanelk');

Route::get('/cases/test-correct/', function () {
    return view('pages.testcorrect');
})->name('testcorrect');

Route::get('/cases/pixels-gunner/', function () {
    return view('pages.pixelsgunner');
})->name('pixelsgunner');

Route::get('/cases/glitch/', function () {
    return view('pages.glitch');
})->name('glitch');

Route::get('/cases/readyfortravelling/', function () {
    return view('pages.readyfortravelling');
})->name('readyfortravelling');

Route::get('/cases/magazijnlade/', function () {
    return view('pages.magazijnlade');
})->name('magazijnlade');

Route::get('/contact/', [ContactController::class, 'contact'])->name('contact');

Route::post('/contact/', [ContactController::class, 'contactPost'])->name('contact.store');

Route::get('/sitemap.xml', [SitemapController::class, 'generate'])->name('sitemap');
