<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", HomeController::class)->name("home");
Route::get("/o-nas", AboutController::class)->name("about");
