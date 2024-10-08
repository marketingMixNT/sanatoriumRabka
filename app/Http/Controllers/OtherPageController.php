<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use App\Models\Regulations;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function privacyPolicy()
    {
        $privacyPolicy = PrivacyPolicy::firstOrFail();

        return view('pages.other.privacy-policy', compact('privacyPolicy'));
    }
    public function regulations()
    {
        $regulations = Regulations::firstOrFail();

        return view('pages.other.regulations', compact('regulations'));
    }
}
