<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RabkaAttraction;

class RabkaController extends Controller
{
    public function info()
    {
        return view('pages.rabka.info');
    }
    public function attractions()
    {

        $attractions = RabkaAttraction::all();

       
        return view('pages.rabka.attractions',compact('attractions'));
    }
}
