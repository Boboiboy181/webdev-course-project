<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        $data = $request->validated();
        $data['status'] = 'pending';
        $data['payment_status'] = 'not paid';
        $data['order_code'] = AutoCodeController::generateOrderCode();

        $order = Order::query()->create($data);

        if ($order) {
            return view('pages.checkout.thank-you.thank-you');
        } else {
            return response()->json(['message' => 'Something went wrong'], 500);
        }
    }
}
