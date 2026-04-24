<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CompanyhighlightController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BusinessunitController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\JobVacancyController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\JobApplicationController as AdminJobApplicationController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\AboutguestController;



// Home page (public)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Public pages
Route::get('/tentang', [\App\Http\Controllers\AboutguestController::class, 'index'])->name('about');
// Rute untuk halaman daftar bisnis (yang kamu kasih tadi)
Route::get('/bisnis', [\App\Http\Controllers\BusinessController::class, 'index'])->name('business');

// Rute untuk halaman detail (WAJIB ADA karena dipanggil di href pertama)
Route::get('/bisnis/{slug}', [\App\Http\Controllers\BusinessController::class, 'show'])->name('business.show');
Route::get('/karir', [CareerController::class, 'index'])->name('career');
Route::post('/apply', [JobApplicationController::class, 'store'])->name('apply');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/hubungi', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/hubungi', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Authentication routes with backward compatibility
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Admin routes (protected)
Route::prefix('admin')->middleware('auth')->group(function () {
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

    // Career routes (Resource)
    Route::resource('job_categories', JobCategoryController::class, ['as' => 'admin']);
    Route::resource('job_vacancies', JobVacancyController::class, ['as' => 'admin']);
    Route::resource('benefits', BenefitController::class, ['as' => 'admin']);
    
    // Job Applications routes
    Route::get('/job_applications', [AdminJobApplicationController::class, 'index'])->name('admin.applications.index');
    Route::get('/job_applications/{id}', [AdminJobApplicationController::class, 'show'])->name('admin.applications.show');
    Route::delete('/job_applications/{id}', [AdminJobApplicationController::class, 'destroy'])->name('admin.applications.destroy');

    // Partner routes
    Route::get('/partner', [PartnerController::class, 'index'])->name('admin.partner');
    Route::get('/partner/create', [PartnerController::class, 'create'])->name('admin.partner.create');
    Route::post('/partner', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/partner/{partner}/edit', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::put('/partner/{partner}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::delete('/partner/{partner}', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');

    // company highlight routes
    Route::get('/highlights', [CompanyhighlightController::class, 'index'])->name('admin.highlights.index');
    Route::get('/highlights/create', [CompanyhighlightController::class, 'create'])->name('admin.highlights.create');
    Route::post('/highlights', [CompanyhighlightController::class, 'store'])->name('admin.highlights.store');
    Route::get('/highlights/{id}/edit', [CompanyhighlightController::class, 'edit'])->name('admin.highlights.edit');
    Route::put('/highlights/{id}', [CompanyhighlightController::class, 'update'])->name('admin.highlights.update');
    Route::delete('/highlights/{id}', [CompanyhighlightController::class, 'destroy'])->name('admin.highlights.destroy');

    // Testimonial routes
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

    // Business routes
    Route::get('/business', [BusinessunitController::class, 'index'])->name('admin.business.index');
    Route::get('/business/create', [BusinessunitController::class, 'create'])->name('admin.business.create');
    Route::post('/business', [BusinessunitController::class, 'store'])->name('admin.business.store');
    Route::get('/business/{id}/edit', [BusinessunitController::class, 'edit'])->name('admin.business.edit');
    Route::put('/business/{id}', [BusinessunitController::class, 'update'])->name('admin.business.update');
    Route::delete('/business/{id}', [BusinessunitController::class, 'destroy'])->name('admin.business.destroy');    

    //News routes
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{news}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{news}', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{news}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/timelines', [TimelineController::class, 'index'])->name('timelines.index');
        Route::get('/timelines/create', [TimelineController::class, 'create'])->name('timelines.create');
        Route::post('/timelines', [TimelineController::class, 'store'])->name('timelines.store');
        Route::get('/timelines/{timeline}/edit', [TimelineController::class, 'edit'])->name('timelines.edit');
        Route::put('/timelines/{timeline}', [TimelineController::class, 'update'])->name('timelines.update');
        Route::delete('/timelines/{timeline}', [TimelineController::class, 'destroy'])->name('timelines.destroy');

        // Contact Messages
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

           // About Company Routes
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/about', [AboutController::class, 'store'])->name('about.store');
        Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');

    });
});
