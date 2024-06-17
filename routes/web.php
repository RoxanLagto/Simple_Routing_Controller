<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;
use Illuminate\Support\Facades\Route;

Route::get('/AboutMe', [AboutMeController:: class, 'about']);
Route::get('/Skills', [SkillsController:: class, 'skills']);
Route::get('/Hobbies', [HobbiesController:: class, 'hobbies']);


