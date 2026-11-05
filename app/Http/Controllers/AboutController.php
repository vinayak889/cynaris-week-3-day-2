<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About Us";
        $description = "We are learning Laravel framework.";

        return view('about', compact('title', 'description'));
    }
}
