<?php

namespace App\View\Components;

use Closure;

use App\Models\Room;
use App\Models\Offer;
use App\Models\NfzPage;
use App\Models\OfferPage;
use App\Models\RabkaPage;
use App\Models\Rehabilitation;
use Illuminate\View\Component;
use App\Models\RehabilitationPage;
use Illuminate\Contracts\View\View;

class ListLinks extends Component
{
    /**
     * Create a new component instance.
     */

    public $rooms;
    public $offers;

    public $offersPages;

    public $rehabilitationPages;

    public $nfzPages;
    public $rabkaPages;
    public function __construct()
    {
        $this->rooms = Room::select('title', 'slug')->orderBy('sort', 'asc')->get();

        $this->nfzPages = NfzPage::select('page_title', 'slug')->orderBy('sort', 'asc')->get();

        $this->rehabilitationPages = RehabilitationPage::select('page_title', 'slug')->orderBy('sort', 'asc')->get();

        $this->rabkaPages = RabkaPage::select('page_title', 'slug')->orderBy('sort', 'asc')->get();

        $this->offers = Offer::select('title', 'slug')->orderBy('sort', 'asc')->get();
        $this->offersPages = OfferPage::select('page_title', 'slug')->orderBy('sort', 'asc')->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.list-links', [
            "rooms" => $this->rooms,
            "nfz" => $this->nfzPages,
            'offers' => $this->offers,
            "offerPages" => $this->offersPages,
            "rehabilitationPages" => $this->rehabilitationPages,

        ]);
    }
}
