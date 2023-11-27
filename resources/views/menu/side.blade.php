@extends('menu.menu')

@section('menu-content')
    <div class="sides-container">
        @foreach($sides as $key => $value)
            <h2 class="side-category">{{$key}}</h2>
            <div class="side-list">
                @foreach($value as $index => $item)
                    <x-product-card
                        :category="'side'"
                        :name="$item['name']"
                        :imgURL="$item['imgURL']"
                        :price="$item['price']"
                    />
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
