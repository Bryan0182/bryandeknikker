<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $geboorteDatum = '2004-06-27';
        $leeftijd = berekenLeeftijd($geboorteDatum);

        return view('/pages/about_me', compact('leeftijd'));
    }
}
