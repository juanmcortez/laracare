<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\SettingsController;

Route::middleware('auth')->group(function () {
    // Landing now is protected with login
    Route::get('/', function () {
        return view('landing');
    })->name('main');

    // Logged in user files
    Route::get('/users/list/all', [UserController::class, 'index'])->name('users.list');
    Route::get('/users/profile/{username}/details', [UserController::class, 'show'])->name('users.profile');

    // Settings
    Route::get('/practice/settings', [SettingsController::class, 'index'])->name('settings');
});

