<?php

namespace AppHttpControllers;

use IlluminateHttpRequest;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('home')->with('cart', $cart);
    }
}
