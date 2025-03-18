<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Controllers\Users;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(): View
    {
        return view('pages.settings.index');
    }
}
