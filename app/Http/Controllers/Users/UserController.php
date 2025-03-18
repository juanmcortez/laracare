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
use App\Models\Users\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = User::all();
        return view('pages.users.list', compact('users'));
    }


    /**
     * @param  User  $username
     * @return View
     */
    public function show(User $username): View
    {
        $users = User::where('username', '!=', $username)->get();
        $user = $username;
        return view('pages.users.profile', compact(['user', 'users']));
    }
}
