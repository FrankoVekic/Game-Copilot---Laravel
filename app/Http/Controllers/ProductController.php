<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'products'=>Product::where('slug','like','eq%')->paginate($perPage = 12)
        ]);
    }

    public function games()
    {
        return view('products.games',[
            'products'=>Product::where('slug','like','ga%')->paginate($perPage = 12)
        ]);
    }

    public function show(Product $product)
    {      

        $related = Product::inRandomOrder()->limit(3)->get();

        return view('products.product-detail',[
            'product'=> $product,
            'related'=> $related
        ]);          
    }
}
