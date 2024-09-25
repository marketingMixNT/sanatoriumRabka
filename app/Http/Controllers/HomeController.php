<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Room;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slides = Slide::orderBy('sort','asc')->get();
        $offers = Offer::orderBy('sort','asc')->get();

      

        return view('pages.home.index', compact('slides','offers'));
    }
}
