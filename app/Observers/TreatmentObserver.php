<?php

namespace App\Observers;

use App\Models\Treatment;
use Illuminate\Support\Facades\Storage;

class TreatmentObserver
{
    /**
     * Handle the Treatment "created" event.
     */
    public function created(Treatment $treatment): void
    {
        //
    }

    /**
     * Handle the Treatment "updated" event.
     */
    public function updated(Treatment $treatment): void
    {
        //SINGLE
        // thumbnail
        if ($treatment->isDirty(attributes: 'thumbnail')) {
            Storage::disk('public')->delete($treatment->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the Treatment "deleted" event.
     */
    public function deleted(Treatment $treatment): void
    {
          //thumbnail
          if (!is_null($treatment->thumbnail)) {
            Storage::disk('public')->delete($treatment->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the Treatment "restored" event.
     */
    public function restored(Treatment $treatment): void
    {
        //
    }

    /**
     * Handle the Treatment "force deleted" event.
     */
    public function forceDeleted(Treatment $treatment): void
    {
        //
    }
}
