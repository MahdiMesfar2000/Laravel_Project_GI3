<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/customers', function () {
    return view('customers');
})->name('customers');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');