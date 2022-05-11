<?php

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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/contact-us', function () {
    return view('frontend.contactUs');
})->name('contact');

Route::get('/about-us', function () {
    return view('frontend.aboutUs');
})->name('about');
Auth::routes();

Route::get('/cms', [App\Http\Controllers\HomeController::class, 'index'])->name('cms');

Route::resource('news', App\Http\Controllers\newsController::class);
Route::resource('events', App\Http\Controllers\eventsController::class);