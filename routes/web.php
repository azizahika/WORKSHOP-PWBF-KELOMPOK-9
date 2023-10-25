<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/client', function () {
    return view('client');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [Home1Controller::class, 'index'])->name('home');

Route::get('/about', [ABoutController::class, 'about'])->name('about');

Route::get('/client', [ClientController::class, 'client'])->name('client');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('/services', [ServicesController::class, 'services'])->name('services');

// Route::get('/about', [App\Http\Controllers\AbputController::class,'index'])->name('about');

Route::post('/index', 'Auth\indexController@index')->name('index');

