<?php
// $drinks = [
//     [
//         'name' => 'CHAI COCA-COLA 390ML',
//         'imgURL' => 'assets/menu/drink/Coca-Cola_390ml.png',
//         'price' => '24.500',
//         'description' => 'Nước ngọt Coca-Cola 390ml Bottle có ga mát lạnh sảng khoái với vị Cola đặc trưng, giúp bữa tiệc pizza thêm phần hứng khởi.',
//     ],
//     [
//         'name' => 'CHAI FANTA 390ML',
//         'imgURL' => 'assets/menu/drink/Fanta_390ml.png',
//         'price' => '24.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHAI SPRITE 390ML',
//         'imgURL' => 'assets/menu/drink/Sprite_390ml.png',
//         'price' => '24.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'LON COCA-COLA ZERO 320ML',
//         'imgURL' => 'assets/menu/drink/Coca-Cola_zero_320ml.png',
//         'price' => '24.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHAI COCA-COLA 1.5L',
//         'imgURL' => 'assets/menu/drink/Coca-Cola_1.5L.png',
//         'price' => '38.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHAI COCA-COLA ZERO SUGAR 1.5L',
//         'imgURL' => 'assets/menu/drink/Coca-Cola_Zero_Sugar_1.5L.png',
//         'price' => '38.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHAI SPRITE 1.85L',
//         'imgURL' => 'assets/menu/drink/SPRITE_1.85L.png',
//         'price' => '38.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHAI FANTA 1.5L',
//         'imgURL' => 'assets/menu/drink/Fanta_1.5L.png',
//         'price' => '38.500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'TRÀ ĐÀO HẠT CHIA 350ML',
//         'imgURL' => 'assets/menu/drink/Peach_chia_350ml.png',
//         'price' => '24,500₫',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'CHANH DÂY HẠT CHIA 350ML',
//         'imgURL' => 'assets/menu/drink/passionfruit_CHIA_350ML.png',
//         'price' => '24,500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'NƯỚC SUỐI DASANI 510ML',
//         'imgURL' => 'assets/menu/drink/Dasani_510ml.png',
//         'price' => '24,500',
//         'description' => 'none',
//     ],
//     [
//         'name' => 'NƯỚC SUỐI DASANI 1.5L',
//         'imgURL' => 'assets/menu/drink/Dasani_1.5L.png',
//         'price' => '38.500',
//         'description' => 'none',
//     ],
// ];
?>

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
