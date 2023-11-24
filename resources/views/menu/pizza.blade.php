@extends('menu.menu')

@section('menu-content')
    <div class="pizzas-container">
        @foreach($pizzas as $key => $value)
            <x-product-card
                :category="'pizza'"
                :name="$value['name']"
                :imgURL="$value['imgURL']"
                :price="$value['price']"
                :size="$value['size']"
            />
        @endforeach
    </div>
@endsection
