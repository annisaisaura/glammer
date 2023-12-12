<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function cart_cart()
    {
        return view('cart-cart');
    }
}
