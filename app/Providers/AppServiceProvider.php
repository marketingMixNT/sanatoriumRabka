<?php

namespace App\Providers;

use App\Models\Offer;
use App\Models\Slide;
use App\Observers\OfferObserver;
use App\Observers\SlideObserver;
use Illuminate\Support\ServiceProvider;

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
        Slide::observe(SlideObserver::class);
        Offer::observe(OfferObserver::class);
    }
}
