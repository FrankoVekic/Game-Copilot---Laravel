<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'products'=>Product::where('slug','like','eq%')->filter(request(['search']))->paginate($perPage = 12),
            'slug'=>'equipment'
        ]);
    }

    public function games(Request $request)
    {
        return view('products.games',[
            'products'=>Product::where('slug','like','ga%')->filter(request(['search']))->paginate($perPage = 12),
            'slug'=>'games'
        ]);
    }

    public function show(Product $product)
    {      
        
        if($product){
            if(request()->product->slug != 'equipment'){
                $related = Product::select("*")
                ->where("slug", "like", "ga%")->take(3)->inRandomOrder()
                ->get();
    
                return view('products.product-detail',[
                    'product'=> $product,
                    'related'=> $related,
                    'slug'=>'games'
                ]);  
            }
            else {
                
                $related = Product::select("*")
                ->where("slug", "like", "eq%")->take(3)->inRandomOrder()
                ->get();
    
                return view('products.product-detail',[
                    'product'=> $product,
                    'related'=> $related,
                    'slug'=>'equipment'
                ]);  
            }
        }
        else {
            abort('404');
        }
       

        return redirect('/');
                
    }
}
