<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::view('/', 'welcome')
    ->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->roles === 'admin') {
        return view('dashboard.admin');
    } elseif ($user->roles === 'seller') {
        return view('dashboard.seller');
    } elseif ($user->roles === 'student') {
        return redirect()->route('home'); // ga boleh ke dashboard 😜
    }

    abort(403); // buat jaga-jaga kalo role aneh
})->middleware(['auth'])
->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
