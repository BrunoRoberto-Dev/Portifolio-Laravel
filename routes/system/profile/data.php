<?php

use App\Http\Controllers\System\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/system/profile', [ProfileController::class, 'view'])->name('system.profile');