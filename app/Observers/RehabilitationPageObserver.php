<?php

namespace App\Observers;

use App\Models\RehabilitationPage;
use Illuminate\Support\Facades\Storage;

class RehabilitationPageObserver
{
    /**
     * Handle the RehabilitationPage "created" event.
     */
    public function created(RehabilitationPage $rehabilitationPage): void
    {
        //
    }

    /**
     * Handle the RehabilitationPage "updated" event.
     */
    public function updated(RehabilitationPage $rehabilitationPage): void
    {
        //SINGLE
        // banner
        if ($rehabilitationPage->isDirty(attributes: 'banner')) {
            Storage::disk('public')->delete($rehabilitationPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the RehabilitationPage "deleted" event.
     */
    public function deleted(RehabilitationPage $rehabilitationPage): void
    {
        //banner
        if (!is_null($rehabilitationPage->banner)) {
            Storage::disk('public')->delete($rehabilitationPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the RehabilitationPage "restored" event.
     */
    public function restored(RehabilitationPage $rehabilitationPage): void
    {
        //
    }

    /**
     * Handle the RehabilitationPage "force deleted" event.
     */
    public function forceDeleted(RehabilitationPage $rehabilitationPage): void
    {
        //
    }
}
