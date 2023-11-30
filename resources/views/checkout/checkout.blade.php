@extends('layouts.app')

@section('content')
    @include('checkout.progress')
    <div class="container">
        @yield('checkout-content')
    </div>
@endsection
