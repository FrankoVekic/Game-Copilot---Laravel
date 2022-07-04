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


    public function create_equipment()
    {
        return view('admin-panel.create');
    }

    public function store_equipment(Request $request)
    {   
        $data = $request->validate([
            'title'=>['required','min:3','max:200'],
            'price'=>['required','numeric','gt:0'],
            'quantity'=>['required','min:1'],
            'description'=>'required'
        ]);

        return redirect(env('APP_URL').'admin-panel/equipment');
    }
}
