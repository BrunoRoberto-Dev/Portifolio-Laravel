<?php

use App\Http\Controllers\System\SystemController;
use Illuminate\Support\Facades\Route;

Route::get('/system/home', [SystemController::class, 'view'])->name('system.home');