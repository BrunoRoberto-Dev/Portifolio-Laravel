<?php

use App\Http\Controllers\System\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/system/home', [HomeController::class, 'view'])->name('system.home');