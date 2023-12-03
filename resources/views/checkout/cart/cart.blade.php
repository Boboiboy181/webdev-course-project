@extends('checkout.checkout')

@section('checkout-content')
    <div class="row cart-container">
        <div class="col-6 cart-left">@include('checkout.cart.cart-left', ['data' => $data])</div>
        <div class="col-6 cart-right">@include('checkout.cart.cart-right', ['data' => $data])</div>
    </div>
@endsection
