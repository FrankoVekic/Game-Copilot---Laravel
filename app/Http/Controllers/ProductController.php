<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'equipment'=>Product::latest()->paginate(12)
        ]);
    }

    public function show(Product $equipment)
    {
        return view('products.product-detail',[
            'equipment'=> $equipment
        ]);   
    }
}
