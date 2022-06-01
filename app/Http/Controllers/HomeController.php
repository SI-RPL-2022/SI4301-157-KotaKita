<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total = [
            'user' => User::role('user')->count(),
            'kota' => Kota::count()
        ];
        return view('pages.home',[
            'title' => 'Home',
            'total' => $total
        ]);
    }
}
