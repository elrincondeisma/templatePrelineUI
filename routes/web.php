<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/logout', function () {
    Auth::guard('web')->logout();

    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';
