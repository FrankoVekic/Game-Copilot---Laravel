<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Game;
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
        return view('welcome',[
            'equipment'=>Equipment::all()->random(8)
        ]);
    }
}
