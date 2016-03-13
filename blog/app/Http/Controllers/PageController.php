<?php

namespace App\Http\Controllers;

class PageController extends Controller {
    public function index()
    {
        return view('welcome');
    }
    public function impressum()
    {
        return view('impressum');
    }
    public function kontakt()
    {
        return view('kontakt');
    }
}
