@extends('menu.menu')

@section('menu-content')
    <div class="drinks-container">
        @foreach($drinks as $key => $value)
            <x-product-card
                :category="'drink'"
                :name="$value['name']"
                :imgURL="$value['imgURL']"
                :price="$value['price']"
            />
        @endforeach
    </div>
@endsection
