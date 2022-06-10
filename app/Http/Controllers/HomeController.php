<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
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
            'equipment'=>Product::select("*")
            ->where("slug", "like", "eq%")->take(4)->inRandomOrder()
            ->get(),
            'news'=>News::orderBy('id','desc')->take(3)->get()
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
