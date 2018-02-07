<?php

namespace App\Http\Controllers;

use App\Languages;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Languages::all();
        // $languages = Languages::all()->pluck('name');

        return response()->json($languages, 200);
    }

    public function show(Languages $programminglanguage)
    {
        return $programminglanguage;
    }
}
