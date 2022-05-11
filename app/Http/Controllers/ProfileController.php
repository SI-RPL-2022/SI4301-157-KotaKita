<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index',[
            'title' => 'Profile Saya'
        ]);
    }

    public function edit()
    {
        return view('pages.profile.edit',[
            'title' => 'Edit Profile'
        ]);
    }
}
