<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NfzController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RabkaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OtherPageController;
use App\Http\Controllers\RoomController;

Route::get("/", HomeController::class)->name("home");
Route::get("/o-nas", AboutController::class)->name("about");
Route::get('/pokoje/{slug}',[RoomController::class,'show'])->name('room.show');
Route::get("/nfz/{slug}", [NfzController::class, 'show'])->name("nfz.show");
Route::get("/galeria", GalleryController::class)->name("gallery");

Route::get("/oferty/{slug}", [OfferController::class, 'index'])->name("offer.page");
Route::get('/oferta/{slug}', [OfferController::class, 'show'])->name('offer.show');


Route::get("/kontakt", ContactController::class)->name("contact");


Route::get('/rabka-zdroj', [RabkaController::class, 'info'])->name('rabka.info');
Route::get('/okoliczne-atrakcje', [RabkaController::class, 'attractions'])->name('rabka.attractions');




Route::get("/polityka-prywatnosci", [OtherPageController::class,'privacyPolicy'])->name("privacy-policy");
Route::get("/regulamin", [OtherPageController::class,'regulations'])->name("regulations");
