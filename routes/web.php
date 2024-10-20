<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\ServicesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cases/create/', [BlogController::class, 'create'])->name('blogs.create')->middleware('auth');

Route::get('/cases/success/', [BlogController::class, 'success'])->name('pages.case_success');

Route::get('/cases/edit/{blog}', [BlogController::class, 'edit'])->name('pages.case_edit');

Route::delete('/cases/{blog}', [BlogController::class, 'destroy'])->name('pages.case_destroy');

Route::put('/cases/update/{blog}', [BlogController::class, 'update'])->name('pages.case_update');

Route::post('/cases/', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/cases/', [BlogController::class, 'index'])->name('cases');

Route::get('/recent-blogs/', [BlogController::class, 'showRecentBlogs'])->name('blogs.recent');

Route::get('/cases/{slug}/', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/case/search', [BlogController::class, 'search'])->name('blogs.search');

Route::get('/login/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login/', [LoginController::class, 'login']);

Route::post('/logout/', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/contact/', [ContactController::class, 'contact'])->name('contact');

Route::post('/contact/', [ContactController::class, 'contactPost'])->name('contact.store');

Route::get('/over-mij/', [AboutController::class, 'index'])->name('over-mij');

Route::get('/skills/', [SkillsController::class, 'showSkills'])->name('skills');

Route::get('/skills/create/', [SkillsController::class, 'create'])->name('skill_create')->middleware('auth');

Route::get('/skills/success/', [SkillsController::class, 'success'])->name('skill_success');

Route::post('/skills/', [SkillsController::class, 'store'])->name('skills.store');

Route::get('/skills/{slug}', [SkillsController::class, 'show'])->name('skills.show');

Route::get('/diensten/', [ServicesController::class, 'showServices'])->name('diensten');

Route::get('/diensten/website-laten-maken/', [ServicesController::class, 'showWebsiteService'])->name('diensten.web');

Route::get('/diensten/applicatie-laten-maken/', [ServicesController::class, 'showAppService'])->name('diensten.app');

Route::get('/diensten/design/', [ServicesController::class, 'showDesignService'])->name('diensten.design');

Route::get('/diensten/seo/', [ServicesController::class, 'showSeoService'])->name('diensten.seo');

Route::get('/diensten/social/', [ServicesController::class, 'showSocialService'])->name('diensten.social');

Route::post('/newsletter-subscribe/', [NewsletterSubscriptionController::class, 'store'])->name('newsletter.subscribe');

Route::get('/privacyverklaring/', [App\Http\Controllers\PrivacyController::class, 'show'])->name('privacyverklaring');
