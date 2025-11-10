<?php

use App\Http\Controllers\System\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'viewLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('auth.login.store');

Route::get('/signup', [AuthController::class, 'viewSignup'])->name('auth.signup');
Route::post('/signup', [AuthController::class, 'storeSignup'])->name('auth.signup.store');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/forgot-password', [AuthController::class, 'viewForgotPassword'])->name('auth.forgot-password');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password.post');

Route::get('/reset-password', [AuthController::class, 'viewResetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('auth.reset-password.post');

Route::get('/email/verify', [AuthController::class, 'viewVerifyEmail'])->name('auth.verify-email');
Route::post('/email/verify', [AuthController::class, 'verifyEmail'])->name('auth.verify-email.post');