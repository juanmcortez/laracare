<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Landing now is protected with login
    Route::get('/', function () {
        return view('landing');
    })->name('main');

    // Logged in user files
    Route::get('/user/profile', function () {
        return view('pages.users.profile', ['user' => Auth::user()]);
    })->name('user.profile');
});

