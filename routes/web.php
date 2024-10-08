<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RabkaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NfzController;

Route::get("/", HomeController::class)->name("home");

Route::get("/nfz/{slug}", [NfzController::class, 'show'])->name("nfz.show");



Route::get("/o-nas", AboutController::class)->name("about");
Route::get("/galeria", GalleryController::class)->name("gallery");
Route::get("/kontakt", ContactController::class)->name("contact");
Route::get("/oferty", [OfferController::class, 'index'])->name("offer.index");
Route::get('/oferta/{slug}', [OfferController::class, 'show'])->name('offer.show');

Route::get('/rabka-zdroj', [RabkaController::class, 'info'])->name('rabka.info');
Route::get('/okoliczne-atrakcje', [RabkaController::class, 'attractions'])->name('rabka.attractions');
