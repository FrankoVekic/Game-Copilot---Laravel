<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function equipment()
    {
        return view('admin-panel.show-equipment',[
            'equipmentAll'=>Product::where('slug','like','eq%')
            ->filter(request(['search']))
            ->paginate($perPage = 10)
            ->appends(request()->query())
        ]);
    }

    public function edit(Product $product)
    {
        return view('admin-panel.edit',[
            'product'=> $product
        ]);
    }

    public function create_game()
    {
        return view('admin-panel.create');
    }

    public function create_equipment()
    {
        return view('admin-panel.create');
    }

    public function store_equipment(Request $request)
    {   
        $request->validate([
            'title'=>['required','min:3','max:200'],
            'price'=>['required','numeric','gt:0'],
            'quantity'=>['required','min:1'],
            'description'=>'required'
        ]);

        $equipment = new Product();
        $equipment->title = $request->title;
        $equipment->price = $request->price;
        $equipment->quantity = $request->quantity;
        $equipment->slug = 'equipment';
        $equipment->description = $request->description;
        $equipment->save();

        return redirect(env('APP_URL').'admin-panel/equipment');
    }

    public function store_game(Request $request)
    {   
        $request->validate([
            'title'=>['required','min:3','max:200'],
            'price'=>['required','numeric','gt:0'],
            'quantity'=>['required','min:1'],
            'description'=>'required'
        ]);

        $game = new Product();
        $game->title = $request->title;
        $game->price = $request->price;
        $game->quantity = $request->quantity;
        $game->slug = 'game';
        $game->description = $request->description;
        $game->save();

        return redirect(env('APP_URL').'admin-panel/games');
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title'=>['required','min:3','max:200'],
            'price'=>['required','numeric','gt:0'],
            'quantity'=>['required','min:1'],
            'description'=>'required'
        ]);

        $product->update($data);

        if($product->slug == 'game')
        {
            return redirect(env('APP_URL').'admin-panel/games');

        }else {

            return redirect(env('APP_URL').'admin-panel/equipment');
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }

    public function games()
    {
        return view('admin-panel.show-games',[
            'games'=>Product::where('slug','like','ga%')
            ->filter(request(['search']))
            ->paginate($perPage = 9)
            ->appends(request()->query())
        ]);
    }
}
