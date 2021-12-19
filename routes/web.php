<?php

use App\Http\Controllers\ArticoliController;
use App\Http\Controllers\ArticoliNodiController;
use App\Http\Controllers\NodiController;
use Illuminate\Support\Facades\Route;

Route::get('/',[NodiController::class,'index']);
Route::get('/articoli',[ArticoliController::class,'index']);
