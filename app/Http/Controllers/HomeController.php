<?php

namespace App\Http\Controllers;

use App\Languages;
use App\Libraries;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Languages::all();

        $libraries = Libraries::all();

        return view('home', compact('languages', 'libraries'));
    }
}
