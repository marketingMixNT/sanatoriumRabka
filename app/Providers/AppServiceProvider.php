<?php

namespace App\Providers;

use App\Models\Room;
use App\Models\Offer;
use App\Models\Slide;
use App\Models\Gallery;
use App\Models\NfzPage;
use App\Models\OfferPage;
use App\Models\RabkaPage;
use App\Models\Attraction;
use App\Observers\RoomObserver;
use App\Observers\OfferObserver;
use App\Observers\SlideObserver;
use App\Models\RehabilitationPage;
use App\Observers\GalleryObserver;
use App\Observers\NfzPageObserver;
use App\Observers\OfferPageObserver;
use App\Observers\RabkaPageObserver;
use App\Observers\AttractionObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\RehabilitationPageObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Attraction::observe(AttractionObserver::class);
        Gallery::observe(GalleryObserver::class);
        NfzPage::observe(NfzPageObserver::class);
        Offer::observe(OfferObserver::class);
        OfferPage::observe(OfferPageObserver::class);
        RabkaPage::observe(RabkaPageObserver::class);
        RehabilitationPage::observe(RehabilitationPageObserver::class);
        Room::observe(RoomObserver::class);
        Slide::observe(SlideObserver::class);
    }
}
