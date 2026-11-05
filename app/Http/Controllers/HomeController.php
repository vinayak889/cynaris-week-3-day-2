<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Vinayak";
        $course = "Laravel Basics";

        return view('home', compact('name', 'course'));
    }
}
