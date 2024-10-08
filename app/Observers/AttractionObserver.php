<?php

namespace App\Observers;

use App\Models\Attraction;
use Illuminate\Support\Facades\Storage;

class AttractionObserver
{
    /**
     * Handle the Attraction "created" event.
     */
    public function created(Attraction $attraction): void
    {
        
    }

    /**
     * Handle the Attraction "updated" event.
     */
    public function updated(Attraction $attraction): void
    {
        // image
        if ($attraction->isDirty('image')) {
            Storage::disk('public')->delete($attraction->getOriginal('image'));
        }
    }

    /**
     * Handle the Attraction "deleted" event.
     */
    public function deleted(Attraction $attraction): void
    {
         //image
         if (!is_null($attraction->image)) {
            Storage::disk('public')->delete($attraction->getOriginal('image'));
        }
    }

    /**
     * Handle the Attraction "restored" event.
     */
    public function restored(Attraction $attraction): void
    {
        //
    }

    /**
     * Handle the Attraction "force deleted" event.
     */
    public function forceDeleted(Attraction $attraction): void
    {
        //
    }
}
