<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();



        return view('pages.offer.index', compact('offers'));
    }

    public function show($slug)
    {

        $offer = Offer::whereJsonContains('slug', $slug)->first();


        $otherOffers = Offer::select('title', 'slug', 'thumbnail',)
            ->where('id', '!=', $offer->id)
            ->orderBy('sort')
            ->take(3)
            ->get();




        return view('pages.offer.show', compact('offer', 'otherOffers'));
    }
}
