<?php

use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\AdminAuthController;

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

// Маршруты для сайта
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'submitContactForm'])->name('contact.submit');

// Маршруты для админки
Route::prefix('admin')->group(function () {
    // Маршруты для входа
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);

    // Защита маршрутов админки
    Route::middleware('admin')->group(function () {
        Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
