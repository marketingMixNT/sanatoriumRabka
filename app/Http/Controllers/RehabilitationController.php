<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\RehabilitationPage;

class RehabilitationController extends Controller
{
    public function page($slug): View
    {
        $page = RehabilitationPage::where('slug->pl', $slug)->first();



        return view('pages.rehabilitation.page', compact('page'));
    }

    public function treatments(): View
    {
        $treatments = Treatment::orderBy('sort', 'asc')->get();

        return view('pages.rehabilitation.treatments', compact('treatments'));
    }
}
