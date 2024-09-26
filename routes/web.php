<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", HomeController::class)->name("home");
Route::get("/o-nas", AboutController::class)->name("about");
Route::get("/kontakt", ContactController::class)->name("contact");
