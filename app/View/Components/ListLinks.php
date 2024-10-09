<?php

namespace App\View\Components;

use Closure;
use App\Models\Nfz;
use App\Models\Room;
use App\Models\Offer;
use App\Models\Rehabilitation;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ListLinks extends Component
{
    /**
     * Create a new component instance.
     */

    public $rooms;
    public $offers;

    public $rehabilitations;

    public $nfz;
    public function __construct()
    {
        $this->rooms = Room::select('title','slug')->get();
        $this->nfz = Nfz::select('title','slug')->get();


        // $this->offers = Offer::select('title','slug')->get();
        // $this->rehabilitations::select('title','slug')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.list-links', [
            "rooms" => $this->rooms,
            "nfz" => $this->nfz,
            
            // 'offers' => $this->offers,
            // "rehabilitations" => $this->rehabilitations,

        ]);
    }
}
