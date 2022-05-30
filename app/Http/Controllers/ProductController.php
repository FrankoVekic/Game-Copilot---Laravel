<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'equipment'=>Equipment::latest()->paginate(6)
        ]);
    }

    public function show(Equipment $equipment)
    {
        return view('products.product-detail',[
            'equipment'=> $equipment
        ]);   
    }
}
