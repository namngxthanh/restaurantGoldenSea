<?php

use App\Http\Controllers\Clients\AccountController;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\ForgotPasswordController;
use App\Http\Controllers\Clients\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.pages.home');
})->name('home');

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

Route::middleware('guest')->group(function () {

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('post-register'); 
    
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('post-login');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetPasswordEmail'])->name('password.email');
    
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
});

Route::get('/activate/{activationToken}', [AuthController::class, 'activate'])->name('activate');

Route::middleware('auth.custom')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('account');
        
        // Profile management routes
        Route::put('/update-profile', [AccountController::class, 'update'])->name('account.update');
        Route::put('/update-contact', [AccountController::class, 'updateContact'])->name('account.update-contact');
        Route::put('/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');
        
        // Address management routes
        Route::post('/add-address', [AccountController::class, 'addAddress'])->name('account.add-address');
        Route::put('/update-address/{id}', [AccountController::class, 'updateAddress'])->name('account.update-address');
        Route::delete('/delete-address/{id}', [AccountController::class, 'deleteAddress'])->name('account.delete-address');
        Route::put('/set-default-address/{id}', [AccountController::class, 'setDefaultAddress'])->name('account.set-default-address');
    });
});
