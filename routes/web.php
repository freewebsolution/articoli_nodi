<?php

use App\Http\Controllers\ArticoliController;
use App\Http\Controllers\NodiController;
use Illuminate\Support\Facades\Route;


//Route::get('/',[ArticoliController::class,'index']);
Route::get('/',[NodiController::class,'index']);
