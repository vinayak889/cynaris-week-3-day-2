<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

// Route 1
Route::get('/', [HomeController::class, 'index']);

// Route 2
Route::get('/about', [AboutController::class, 'index']);

// Route 3
Route::get('/contact', function () {
    return view('contact');
});

// Route 4
Route::post('/contact', function () {
    return redirect('/contact')
        ->with('success', 'Message submitted successfully!');
});

// Route 5
Route::get('/services', function () {
    return view('about', ['title' => 'Our Services']);
});
