<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\PartnerController;

// Home page (public)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Public pages
Route::get('/tentang', [\App\Http\Controllers\AboutPageController::class, 'index'])->name('about');
Route::get('/bisnis', [\App\Http\Controllers\BusinessController::class, 'index'])->name('business');
Route::get('/karir', [\App\Http\Controllers\CareerPageController::class, 'index'])->name('career');
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/hubungi', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/hubungi', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Authentication routes with backward compatibility
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Admin routes (protected)
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Banner routes
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
    Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::get('/banner/{banner}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');
    Route::put('/banner/{banner}', [BannerController::class, 'update'])->name('admin.banner.update');
    Route::delete('/banner/{banner}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');

    // Activity routes
    Route::get('/activity', [ActivityController::class, 'index'])->name('admin.activity');
    Route::get('/activity/create', [ActivityController::class, 'create'])->name('admin.activity.create');
    Route::post('/activity', [ActivityController::class, 'store'])->name('admin.activity.store');
    Route::get('/activity/{activity}/edit', [ActivityController::class, 'edit'])->name('admin.activity.edit');
    Route::put('/activity/{activity}', [ActivityController::class, 'update'])->name('admin.activity.update');
    Route::delete('/activity/{activity}', [ActivityController::class, 'destroy'])->name('admin.activity.destroy');

    // About routes
    Route::get('/about', [AboutController::class, 'index'])->name('admin.about');
    Route::get('/about/create', [AboutController::class, 'create'])->name('admin.about.create');
    Route::post('/about', [AboutController::class, 'store'])->name('admin.about.store');
    Route::get('/about/{aboutSection}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('/about/{aboutSection}', [AboutController::class, 'update'])->name('admin.about.update');
    Route::delete('/about/{aboutSection}', [AboutController::class, 'destroy'])->name('admin.about.destroy');

    // Company routes
    Route::get('/company', [CompanyController::class, 'index'])->name('admin.company');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('admin.company.create');
    Route::post('/company', [CompanyController::class, 'store'])->name('admin.company.store');
    Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('admin.company.edit');
    Route::put('/company/{company}', [CompanyController::class, 'update'])->name('admin.company.update');
    Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('admin.company.destroy');

    // Career routes
    Route::get('/career', [CareerController::class, 'index'])->name('admin.career');
    Route::get('/career/create', [CareerController::class, 'create'])->name('admin.career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('admin.career.store');
    Route::get('/career/{career}/edit', [CareerController::class, 'edit'])->name('admin.career.edit');
    Route::put('/career/{career}', [CareerController::class, 'update'])->name('admin.career.update');
    Route::delete('/career/{career}', [CareerController::class, 'destroy'])->name('admin.career.destroy');

    // Partner routes
    Route::get('/partner', [PartnerController::class, 'index'])->name('admin.partner');
    Route::get('/partner/create', [PartnerController::class, 'create'])->name('admin.partner.create');
    Route::post('/partner', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/partner/{partner}/edit', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::put('/partner/{partner}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::delete('/partner/{partner}', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');
});
