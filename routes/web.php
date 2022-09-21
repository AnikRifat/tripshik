<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BenifitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Admin::routes
Route::get('/', [FrontController::class, 'index'])->name('index');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    //content -routes
    Route::get('/content', [DashboardController::class, 'content'])->name('content');
    Route::put('/content/update/{content}', [ContentController::class, 'update'])->name('update.content');

    //service -routes
    Route::get('/service', [DashboardController::class, 'service'])->name('service');
    Route::get('/service/create', [ServiceController::class, 'index'])->name('create.service');
    Route::post('/service/add', [ServiceController::class, 'store'])->name('store.service');
    Route::get('/service/edit/{service}', [ServiceController::class, 'edit'])->name('edit.service');
    Route::put('/service/update/{service}', [ServiceController::class, 'update'])->name('update.service');
    Route::delete('/service/destroy/{service}', [ServiceController::class, 'destroy'])->name('destroy.service');

    //service -routes
    Route::get('/testimonial', [DashboardController::class, 'testimonial'])->name('testimonial');
    Route::get('/testimonial/create', [TestimonialController::class, 'index'])->name('create.testimonial');
    Route::post('/testimonial/add', [TestimonialController::class, 'store'])->name('store.testimonial');
    Route::get('/testimonial/edit/{testimonial}', [TestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::put('/testimonial/update/{testimonial}', [TestimonialController::class, 'update'])->name('update.testimonial');
    Route::delete('/testimonial/destroy/{testimonial}', [TestimonialController::class, 'destroy'])->name('destroy.testimonial');


    //faq -routes
    Route::get('/faq', [DashboardController::class, 'faq'])->name('faq');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('create.faq');
    Route::post('/faq/add', [FaqController::class, 'store'])->name('store.faq');
    Route::get('/faq/edit/{faq}', [FaqController::class, 'edit'])->name('edit.faq');
    Route::put('/faq/update/{faq}', [FaqController::class, 'update'])->name('update.faq');
    Route::delete('/faq/destroy/{faq}', [FaqController::class, 'destroy'])->name('destroy.faq');

    //announcement -routes
    Route::get('/announcement', [DashboardController::class, 'announcement'])->name('announcement');
    Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('create.announcement');
    Route::post('/announcement/add', [AnnouncementController::class, 'store'])->name('store.announcement');
    Route::get('/announcement/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('edit.announcement');
    Route::put('/announcement/update/{announcement}', [AnnouncementController::class, 'update'])->name('update.announcement');
    Route::delete('/announcement/destroy/{announcement}', [AnnouncementController::class, 'destroy'])->name('destroy.announcement');

    //benifit -routes
    Route::get('/benifit', [DashboardController::class, 'benifit'])->name('benifit');
    Route::get('/benifit/create', [BenifitController::class, 'create'])->name('create.benifit');
    Route::post('/benifit/add', [BenifitController::class, 'store'])->name('store.benifit');
    Route::get('/benifit/edit/{benifit}', [BenifitController::class, 'edit'])->name('edit.benifit');
    Route::put('/benifit/update/{benifit}', [BenifitController::class, 'update'])->name('update.benifit');
    Route::delete('/benifit/destroy/{benifit}', [BenifitController::class, 'destroy'])->name('destroy.benifit');


    //slider -routes
    Route::get('/slider', [DashboardController::class, 'slider'])->name('slider');
    Route::post('/slider/create', [SliderController::class, 'store'])->name('create.slider');
    // Route::post('/slider/add', [sliderController::class, 'store'])->name('store.slider');
    Route::delete('/slider/destroy/{slider}', [SliderController::class, 'destroy'])->name('destroy.slider');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
