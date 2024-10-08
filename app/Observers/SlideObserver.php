<?php

namespace App\Observers;

use App\Models\Slide;
use Illuminate\Support\Facades\Storage;

class SlideObserver
{
    /**
     * Handle the Slide "created" event.
     */
    public function created(Slide $slide): void
    {
        //
    }

    /**
     * Handle the Slide "updated" event.
     */
    public function updated(Slide $slide): void
    {
        // image
        if ($slide->isDirty('image')) {
            Storage::disk('public')->delete($slide->getOriginal('image'));
        }
    }

    /**
     * Handle the Slide "deleted" event.
     */
    public function deleted(Slide $slide): void
    {
        //image
        if (!is_null($slide->image)) {
            Storage::disk('public')->delete($slide->getOriginal('image'));
        }
    }

    /**
     * Handle the Slide "restored" event.
     */
    public function restored(Slide $slide): void
    {
        //
    }

    /**
     * Handle the Slide "force deleted" event.
     */
    public function forceDeleted(Slide $slide): void
    {
        //
    }
}
