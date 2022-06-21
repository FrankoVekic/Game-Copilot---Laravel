<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index',[
            'services'=> Service::orderBy('id','asc')->filter
            (request(['search']))->paginate(6)
        ]);
    }

    public function show(Service $service)
    {
        return view('services.service-detail',[
            'service'=> $service,
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }
}
