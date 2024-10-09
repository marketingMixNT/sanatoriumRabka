<?php

namespace App\Observers;

use App\Models\NfzPage;
use Illuminate\Support\Facades\Storage;

class NfzPageObserver
{
    /**
     * Handle the NfzPage "created" event.
     */
    public function created(NfzPage $nfzPage): void
    {
        //
    }

    /**
     * Handle the NfzPage "updated" event.
     */
    public function updated(NfzPage $nfzPage): void
    {
        //SINGLE
        // banner
        if ($nfzPage->isDirty(attributes: 'banner')) {
            Storage::disk('public')->delete($nfzPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the NfzPage "deleted" event.
     */
    public function deleted(NfzPage $nfzPage): void
    {
        //banner
        if (!is_null($nfzPage->banner)) {
            Storage::disk('public')->delete($nfzPage->getOriginal('banner'));
        }
    }

    /**
     * Handle the NfzPage "restored" event.
     */
    public function restored(NfzPage $nfzPage): void
    {
        //
    }

    /**
     * Handle the NfzPage "force deleted" event.
     */
    public function forceDeleted(NfzPage $nfzPage): void
    {
        //
    }
}
