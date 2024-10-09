<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferPage;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index($slug)
    {
        $page = OfferPage::where('slug->pl', $slug)->first();



        return view('pages.offer.page', compact('page'));
    }

    public function show($slug)
    {

        $offer = Offer::whereJsonContains('slug->pl', $slug)->first();


        $otherOffers = Offer::select('title', 'slug', 'thumbnail',)
            ->where('id', '!=', $offer->id)
            ->orderBy('sort')
            ->take(3)
            ->get();




        return view('pages.offer.show', compact('offer', 'otherOffers'));
    }
}
