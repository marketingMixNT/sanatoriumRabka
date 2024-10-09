<?php

namespace App\Observers;

use App\Models\RabkaPage;
use Illuminate\Support\Facades\Storage;

class RabkaPageObserver
{
    /**
     * Handle the RabkaPage "created" event.
     */
    public function created(RabkaPage $rabkaPage): void
    {
        //
    }

    /**
     * Handle the RabkaPage "updated" event.
     */
    public function updated(RabkaPage $rabkaPage): void
    {
       //SINGLE
        // banner
        if ($rabkaPage->isDirty(attributes: 'banner')) {
            Storage::disk('public')->delete($rabkaPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the RabkaPage "deleted" event.
     */
    public function deleted(RabkaPage $rabkaPage): void
    {
        //banner
        if (!is_null($rabkaPage->banner)) {
            Storage::disk('public')->delete($rabkaPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the RabkaPage "restored" event.
     */
    public function restored(RabkaPage $rabkaPage): void
    {
        //
    }

    /**
     * Handle the RabkaPage "force deleted" event.
     */
    public function forceDeleted(RabkaPage $rabkaPage): void
    {
        //
    }
}
