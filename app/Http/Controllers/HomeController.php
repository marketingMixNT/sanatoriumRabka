<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Offer;
use App\Models\Slide;
use App\Models\Attraction;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slides = Slide::orderBy('sort','asc')->get();
        $offers = Offer::select('id','title','slug','thumbnail','short_desc')->orderBy('sort','asc')->get();
        $attractions = Attraction::orderBy('sort','asc')->get();
        $testimonials = Testimonial::orderBy('sort','asc')->get();

      

        return view('pages.home.index', compact('slides','offers','attractions','testimonials'));
    }
}
