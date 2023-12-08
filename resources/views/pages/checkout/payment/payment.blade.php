@extends('pages.checkout.checkout')

@section('checkout-content')
    <div class="row cart-container">
        <div class="col-6 payment-left">
            @include('pages.checkout.payment.payment-left')
            @include('pages.checkout.cart.cart-left', ['data' => $data])
            @include('pages.checkout.payment.payment-left-note')
        </div>
        <div class="col-6 payment-right">
            @include('pages.checkout.payment.payment-right')
            @include('pages.checkout.cart.cart-right', ['data' => $data])
        </div>
    </div>
@endsection