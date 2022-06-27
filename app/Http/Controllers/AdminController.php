<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function equipment()
    {
        return view('admin-panel.show-equipment',[
            'equipmentAll'=>Product::where('slug','like','eq%')->filter(request(['search']))->paginate($perPage = 10)
        ]);
    }

    public function edit(Product $product)
    {
        return view('admin-panel.edit',[
            'product'=> $product
        ]);
    }

}
