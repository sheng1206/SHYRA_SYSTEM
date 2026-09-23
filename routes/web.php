<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ReservationController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/catalog', [CatalogController::class, 'index']);
Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/create', [ReservationController::class, 'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email',
        'message' => 'required|string|max:100',
    ]);

    return back()->with('success', 'Thank you! We received your message and will get back to you soon.');
});