@extends('checkout.checkout')

@section('checkout-content')
    <div class="row cart-container">
        <div class="col-6 cart-left">@include('checkout.cart.cart-left')</div>
        <div class="col-6 cart-right">@include('checkout.cart.cart-right')</div>
    </div>
@endsection
