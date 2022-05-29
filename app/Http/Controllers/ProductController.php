<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'equipment'=>Equipment::all()
        ]);
    }
}
