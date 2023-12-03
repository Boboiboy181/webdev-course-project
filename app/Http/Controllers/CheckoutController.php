<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->cookie('cartItems');

        return view('checkout.cart.cart', ['data' => json_decode($data)]);
    }
}
