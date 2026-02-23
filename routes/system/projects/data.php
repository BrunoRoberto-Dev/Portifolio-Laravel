<?php

use App\Http\Controllers\System\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/system/projects', [ProjectsController::class, 'view'])->name('system.projects');