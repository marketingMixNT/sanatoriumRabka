<?php

namespace App\Observers;

use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class OfferObserver
{
    /**
     * Handle the Offer "created" event.
     */
    public function created(Offer $offer): void
    {
        //
    }

    /**
     * Handle the Offer "updated" event.
     */
    public function updated(Offer $offer): void
    {
        // thumbnail
        if ($offer->isDirty('thumbnail')) {
            Storage::disk('public')->delete($offer->getOriginal('thumbnail'));
        }
        // banner
        if ($offer->isDirty('banner_img')) {
            Storage::disk('public')->delete($offer->getOriginal('banner_img'));
        }
    }

    /**
     * Handle the Offer "deleted" event.
     */
    public function deleted(Offer $offer): void
    {
        //thumbnail
        if (!is_null($offer->thumbnail)) {
            Storage::disk('public')->delete($offer->getOriginal('thumbnail'));
        }
        //banner
        if (!is_null($offer->banner_img)) {
            Storage::disk('public')->delete($offer->getOriginal('banner_img'));
        }
    }

    /**
     * Handle the Offer "restored" event.
     */
    public function restored(Offer $offer): void
    {
        //
    }

    /**
     * Handle the Offer "force deleted" event.
     */
    public function forceDeleted(Offer $offer): void
    {
        //
    }
}
