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
}
