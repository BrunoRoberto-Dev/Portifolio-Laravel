<?php

use App\Http\Controllers\Site\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/projeto-cultura', [ProjectsController::class, 'view'])->name('projects.view');