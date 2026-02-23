<?php

use App\Http\Controllers\System\SkillsController;
use Illuminate\Support\Facades\Route;

Route::get('/system/skills', [SkillsController::class, 'view'])->name('system.skills');