<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

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

<<<<<<< Updated upstream
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
=======
Route::get('/home', function () {
    return view('index');
>>>>>>> Stashed changes
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< Updated upstream


// Route::get('/about', [App\Http\Controllers\AbputController::class,'index'])->name('about');
=======
Route::post('/index', 'Auth\indexController@index')->name('index');
>>>>>>> Stashed changes
