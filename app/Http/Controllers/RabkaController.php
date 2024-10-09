<?php

namespace App\Http\Controllers;

use App\Models\RabkaPage;
use Illuminate\Http\Request;
use App\Models\RabkaAttraction;

class RabkaController extends Controller
{
    public function index()
    {
        return view('pages.rabka.index');
    }

    public function page($slug)
    {
        $page = RabkaPage::where('slug->pl', $slug)->first();



        return view('pages.rabka.page', compact('page'));
    }
   
}
