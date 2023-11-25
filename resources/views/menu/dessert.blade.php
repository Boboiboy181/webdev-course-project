<?php
$desserts = [
    [
        'name' => 'Bánh Cuộn Quế Xốt Sô-Cô-La',
        'imgURL' => '/assets/menu/dessert/MENU-PC-Chocolate-Roll-nen-xam_360X240px.jpg',
        'price' => '48.500',
        'description' => 'Bánh Cuộn Mềm Xốp, Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen',
    ],
    [
        'name' => 'Bánh Cuộn Quế Xốt Kem Sữa',
        'imgURL' => '/assets/menu/dessert/MENU-PC-Cinnamon-Roll-nen-xam_360X240px.jpg',
        'price' => '48.500',
        'description' => 'Bánh Cuộn Mềm Xốp, Bột Đường Quế, Bơ, Xốt Kem Sữa',
    ],
    [
        'name' => 'Chocochips (Đế mỏng giòn)',
        'imgURL' => '/assets/menu/dessert/MENU-PC_choco-pizza.jpg',
        'price' => '38.500',
        'description' => 'Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen, Phô Mai Mozarella, Xốt Kem Chua, Đế Mỏng Giòn',
    ],
    [
        'name' => 'Chocochips (Đế dày xốp)',
        'imgURL' => '/assets/menu/dessert/MENU-PC_choco-pizza.jpg',
        'price' => '38.500',
        'description' => 'Sô-cô-la chip Đen Và Trắng, Xốt Sô-cô-la Đen, Phô Mai Mozarella, Xốt Kem Chua, Đế Dày Xốp',
    ],
];
?>

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
