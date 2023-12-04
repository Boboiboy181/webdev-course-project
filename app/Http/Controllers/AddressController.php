<?php

namespace App\Http\Controllers;

class AddressController extends Controller
{
    public function index()
    {
        $content = view('checkout.cart.address');

        return response()->json(['content' => $content->render()]);
    }
}
