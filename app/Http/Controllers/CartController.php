<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartProducts = Cart::instance('default')->content();
        $cartSubtotal = Cart::instance('default')->subtotal();
        $shipping = config('cart.shipping');
        $newTotal = $cartSubtotal+ $shipping;

        return view('products.shopping-cart',[
            'cartProducts'=>$cartProducts,
            'cartSubtotal' => $cartSubtotal,
            'shipping'=> $shipping,
            'newTotal'=> $newTotal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
            $cart = Product::where('id', '=', "$request->product_id")->first();
            Cart::instance('default')->add(
                $cart->id,
                $cart->title,
                $request->quantity,
                $cart->price,
                0,
                ['description' => $cart->description,
                 'slug' => $cart->slug,
                 'image'=> $cart->image,
                 'totalQty' => $cart->quantity])
                 ->associate('\App\Models\Product');
            return redirect('/products/shopping_cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
