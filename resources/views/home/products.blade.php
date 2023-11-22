<?php
$todayHighlight = [
    [
        'img' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'img' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'img' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'img' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        'size' => 'Medium',
        'price' => '235,000',
    ],
];
?>

<div class="products-container">
    <h1>Today Highlight !</h1>
    <div class="red-line"></div>
    <div class="products-list">
        {{--        <div class="product-card col-4">--}}
        {{--            <img src="{{ url('/assets/FoodImg.png') }}" alt="">--}}
        {{--            <p class="product-name">PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA</p>--}}
        {{--            <p class="product-size">Medium</p>--}}
        {{--            <div class="price-container">--}}
        {{--                <p class="product-price">235,000 <u>đ</u></p>--}}
        {{--                <div class="add-icon-container">--}}
        {{--                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"--}}
        {{--                         xmlns="http://www.w3.org/2000/svg">--}}
        {{--                        <path d="M13.2934 4.19995L13.2934 21.8" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                        <path d="M21.8 13.2932L4.19999 13.2932" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                    </svg>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="product-card col-4">--}}
        {{--            <img src="{{ url('/assets/FoodImg.png') }}" alt="">--}}
        {{--            <p class="product-title">PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA</p>--}}
        {{--            <p class="product-size">Medium</p>--}}
        {{--            <div class="price-container">--}}
        {{--                <p class="product-price">235,000 <u>đ</u></p>--}}
        {{--                <div class="add-icon-container">--}}
        {{--                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"--}}
        {{--                         xmlns="http://www.w3.org/2000/svg">--}}
        {{--                        <path d="M13.2934 4.19995L13.2934 21.8" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                        <path d="M21.8 13.2932L4.19999 13.2932" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                    </svg>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="product-card col-4">--}}
        {{--            <img src="{{ url('/assets/FoodImg.png') }}" alt="">--}}
        {{--            <p class="product-title">PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA</p>--}}
        {{--            <p class="product-size">Medium</p>--}}
        {{--            <div class="price-container">--}}
        {{--                <p class="product-price">235,000 <u>đ</u></p>--}}
        {{--                <div class="add-icon-container">--}}
        {{--                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"--}}
        {{--                         xmlns="http://www.w3.org/2000/svg">--}}
        {{--                        <path d="M13.2934 4.19995L13.2934 21.8" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                        <path d="M21.8 13.2932L4.19999 13.2932" stroke="white" stroke-width="7"--}}
        {{--                              stroke-linecap="round"/>--}}
        {{--                    </svg>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        @foreach($todayHighlight as $key => $value)
            <x-product-card
                :category="'todayHighlight'"
                :name="$value['name']"
                :img="$value['img']"
                :price="$value['price']"
                :size="$value['size']"
            />
        @endforeach
    </div>
    <a href="" class="see-more">Xem thêm</a>
</div>
