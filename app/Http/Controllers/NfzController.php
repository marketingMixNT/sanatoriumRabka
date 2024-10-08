<?php

namespace App\Http\Controllers;

use App\Models\Nfz;
use Illuminate\Http\Request;

class NfzController extends Controller
{
    public function show($slug)
    {




        // $all = Nfz::all();

        // dd($all);


        $page = Nfz::where('slug->pl', $slug)->first();


        // dd($page);


        return view('pages.nfz.show', compact('page'));
    }
}
