<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ServiceController;
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
    // Route::put('/service/update/{service}', [ServiceController::class, 'update'])->name('update.service');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
