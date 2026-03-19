<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/404', 'notfound')->name('notfound');

Route::fallback(function () {
    return view('notfound');
});
