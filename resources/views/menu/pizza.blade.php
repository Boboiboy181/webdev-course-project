<?php
$pizzas = [
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Meat_Lovers.png',
        'price' => '195.000',
        'size' => 'Medium'
    ],
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Hawaiian.png',
        'price' => '195.000',
        'size' => 'Medium'
    ],
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Surf&Turf.png',
        'price' => '195.000',
        'size' => 'Medium'
    ],
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Teriyaki_Chicken.png',
        'price' => '195.000',
        'size' => 'Medium'
    ],
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Pizzamin_Sea.png',
        'price' => '195.000',
        'size' => 'Medium'
    ],
    [
        'name' => 'PIZZA NEW YORK BÒ BEEFSTEAK PHÔ MAI - NEW YORK CHEESESTEAK',
        'img' => '/assets/menu/pizza/Cheesy_Chicken_Bacon.png',
        'price' => '195.000',
        'size' => 'Medium'
    ]
];
?>

@extends('menu.menu')

@section('menu-content')
    <div class="pizzas-container">
        @foreach($pizzas as $key => $value)
            <x-product-card
                :category="'pizza'"
                :name="$value['name']"
                :img="$value['img']"
                :price="$value['price']"
                :size="$value['size']"
            />
        @endforeach
    </div>
@endsection