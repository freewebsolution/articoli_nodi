<?php

use App\Http\Controllers\ArticoliController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ArticoliController::class,'index']);
