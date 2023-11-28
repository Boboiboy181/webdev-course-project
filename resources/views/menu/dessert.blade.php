@extends('menu.menu')

@section('menu-content')
    <div class="desserts-container">
        @foreach($desserts as $key => $value)
            <x-product-card
                :category="'dessert'"
                :name="$value['name']"
                :imgURL="$value['imgURL']"
                :price="$value['price']"
            />
        @endforeach
    </div>
@endsection
