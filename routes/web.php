<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NfzController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RabkaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OtherPageController;
use App\Http\Controllers\RehabilitationController;

Route::get("/", HomeController::class)->name("home");

Route::get("/o-nas", AboutController::class)->name("about");

Route::get('/pokoje/{slug}',[RoomController::class,'show'])->name('room.show');

Route::get("/nfz/{slug}", [NfzController::class, 'page'])->name("nfz.page");

Route::get("/rehabilitacja/zabiegi", [RehabilitationController::class, 'treatments'])->name("rehabilitation.treatments");
Route::get("/rehabilitacja/{slug}", [RehabilitationController::class, 'page'])->name("rehabilitation.page");

Route::get("/galeria", GalleryController::class)->name("gallery");

Route::get('/rabka-zdroj', [RabkaController::class, 'index'])->name('rabka');
Route::get('/rabka-zdroj/{slug}', [RabkaController::class, 'page'])->name('rabka.page');


Route::get("/oferty/{slug}", [OfferController::class, 'page'])->name("offer.page");
Route::get('/oferta/{slug}', [OfferController::class, 'show'])->name('offer.show');

Route::get("/kontakt", ContactController::class)->name("contact");

Route::get("/polityka-prywatnosci", [OtherPageController::class,'privacyPolicy'])->name("privacy-policy");

Route::get("/regulamin", [OtherPageController::class,'regulations'])->name("regulations");
