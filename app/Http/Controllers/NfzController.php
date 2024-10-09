<?php

namespace App\Http\Controllers;


use App\Models\NfzPage;
use Illuminate\Http\Request;

class NfzController extends Controller
{
    public function page($slug)
    {

        $page = NfzPage::where('slug->pl', $slug)->first();

        return view('pages.nfz.page', compact('page'));
    }
}
