<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

 use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    } 

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
