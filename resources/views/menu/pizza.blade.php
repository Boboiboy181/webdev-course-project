@extends('menu.menu')

@section('menu-content')
    <div class="pizzas-container">
        @foreach($pizzas as $key => $value)
            <p class="pizza-category">{{$key}}</p>
            <div class="pizza-list">
                @foreach($value as $pizza)
                    <x-product-card
                        :category="'pizza'"
                        :id="$pizza['_id']"
                        :name="$pizza['name']"
                        :imgURL="$pizza['imgURL']"
                        :price="$pizza['price']"
                        :size="$pizza['size']"
                    />
                @endforeach
            </div>
        @endforeach
        <x-modal/>
    </div>
@endsection
