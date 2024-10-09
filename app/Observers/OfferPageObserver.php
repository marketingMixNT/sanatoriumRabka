<?php

namespace App\Observers;

use App\Models\OfferPage;
use Illuminate\Support\Facades\Storage;

class OfferPageObserver
{
    /**
     * Handle the OfferPage "created" event.
     */
    public function created(OfferPage $offerPage): void
    {
        //
    }

    /**
     * Handle the OfferPage "updated" event.
     */
    public function updated(OfferPage $offerPage): void
    {
         //SINGLE
        // banner
        if ($offerPage->isDirty(attributes: 'banner')) {
            Storage::disk('public')->delete($offerPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the OfferPage "deleted" event.
     */
    public function deleted(OfferPage $offerPage): void
    {
        //banner
        if (!is_null($offerPage->banner)) {
            Storage::disk('public')->delete($offerPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the OfferPage "restored" event.
     */
    public function restored(OfferPage $offerPage): void
    {
        //
    }

    /**
     * Handle the OfferPage "force deleted" event.
     */
    public function forceDeleted(OfferPage $offerPage): void
    {
        //
    }
}
