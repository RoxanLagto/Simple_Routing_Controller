<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;
use Illuminate\Support\Facades\Route;

Route::get('/about', [AboutMeController::class, 'about'])->name('about');
Route::get('/skills', [SkillsController::class, 'skills'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'hobbies'])->name('hobbies');