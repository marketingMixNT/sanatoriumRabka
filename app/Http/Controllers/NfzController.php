<?php

namespace App\Http\Controllers;

use App\Models\Nfz;
use Illuminate\Http\Request;

class NfzController extends Controller
{
    public function show($slug)
    {

        $page = Nfz::where('slug->pl', $slug)->first();

        return view('pages.nfz.show', compact('page'));
    }
}
