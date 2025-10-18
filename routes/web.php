<?php

use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.pages.home');
});

Route::get('/about-us', function () {
    return view('clients.pages.about');
});

Route::get('/contact', function () {
    return view('clients.pages.contact');
});

Route::get('/service', function () {
    return view('clients.pages.service');
});

Route::get('/team', function () {
    return view('clients.pages.team');
});

Route::get('/faqs', function () {
    return view('clients.pages.faq');
});
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
