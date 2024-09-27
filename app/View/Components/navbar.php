<?php

namespace App\View\Components;

use Closure;
use App\Models\Room;
use App\Models\Offer;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navbar extends Component
{

    public $rooms;
    public $offers;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->rooms = Room::all();
        $this->offers = Offer::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        // dd($this->offers);
        return view('components.nav.navbar',[
            'offers' => $this->offers, // Upewnij się, że przekazujesz $offers
        ]);
    }
}
