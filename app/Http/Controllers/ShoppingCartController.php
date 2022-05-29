<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function shoppingCart()
    {
        return view('products.shopping-cart');
    }
}
