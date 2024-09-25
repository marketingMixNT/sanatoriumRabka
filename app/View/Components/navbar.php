<?php

namespace App\View\Components;

use Closure;
use App\Models\Room;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class navbar extends Component
{

    public $rooms;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->rooms = Room::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.navbar');
    }
}
