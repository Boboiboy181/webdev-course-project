@extends('checkout.checkout')

@section('checkout-content')
    <div class="row cart-container">
        <div class="col-6 payment-left">
            @include('checkout.payment.payment-left')
            @include('checkout.cart.cart-left', ['data' => $data])
        </div>
        <div class="col-6 payment-right">
            @include('checkout.payment.payment-right')
            @include('checkout.cart.cart-right', ['data' => $data])
        </div>
    </div>
@endsection
