<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function equipment()
    {
        return view('products.equipment',[
            'products'=>Product::where('slug','like','eq%')->filter(request(['search']))->paginate($perPage = 12),
            'slug'=>'equipment',
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }

    public function games(Request $request)
    {
        return view('products.games',[
            'products'=>Product::where('slug','like','ga%')->filter(request(['search']))->paginate($perPage = 12),
            'slug'=>'games',
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }

    public function show(Product $product)
    {      
        
        if($product){
            if(request()->product->slug != 'equipment'){
                $related = Product::select("*")
                ->where("slug", "like", "ga%")
                ->where('id','!=', $product->id)
                ->take(3)->inRandomOrder()
                ->get();
    
                return view('products.product-detail',[
                    'product'=> $product,
                    'related'=> $related,
                    'slug'=>'games',
                    'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
                    'sideServices'=>Service::latest()->take(5)->get()
                ]);  
            }
            else {
                
                $related = Product::select("*")
                ->where("slug", "like", "eq%")
                ->where('id','!=', $product->id)
                ->take(3)->inRandomOrder()
                ->get();
    
                return view('products.product-detail',[
                    'product'=> $product,
                    'related'=> $related,
                    'slug'=>'equipment',
                    'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
                    'sideServices'=>Service::latest()->take(5)->get()
                ]);  
            }
        }
        else {
            abort('404');
        }
       

        return redirect('/');
                
    }
}
