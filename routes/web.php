<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');

Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/obras', 'works')->name('works');

Route::view('/404', 'notfound')->name('notfound');

Route::post('/register/artist', [AuthController::class, 'registerArtist'])->name('register.artist');
Route::post('/register/collector', [AuthController::class, 'registerCollector'])->name('register.collector');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/', function () {
    return view('admin.dashboard');
});

Route::fallback(function () {
    return view('notfound');
});