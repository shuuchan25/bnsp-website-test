<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroImageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'index']);
Route::get('/products', [ProductPageController::class, 'index']);
Route::get('/products/{product}', [ProductPageController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [AdminLoginController::class, 'authenticate']);

Route::post('/admin/logout', [AdminLoginController::class, 'logout']);

Route::get('/admin/overviews', [OverviewController::class, 'index'])->middleware('auth');

Route::get('/admin/articles/checkSlug', [ArticleController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/articles', ArticleController::class)->middleware('auth');

Route::get('/admin/products/checkSlug', [ProductController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/products', ProductController::class)->middleware('auth');

Route::get('/admin/galleries/checkSlug', [GalleryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/galleries', GalleryController::class)->middleware('auth');

Route::get('/admin/about', [AboutController::class, 'index'])->middleware('auth')->name('admin.about');
Route::post('/admin/about', [AboutController::class, 'update'])->middleware('auth')->name('admin.about.update');

Route::resource('/admin/users', UserController::class)->middleware('auth');

Route::get('/admin/hero-images', [HeroImageController::class, 'index'])->middleware('auth')->name('admin.hero-images');
Route::post('/admin/hero-images', [HeroImageController::class, 'store'])->middleware('auth');
Route::delete('/admin/hero-images/{id}', [HeroImageController::class, 'destroy'])->middleware('auth')->name('admin.hero-images.destroy');