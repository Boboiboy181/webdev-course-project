<?php
$todayHighlight = [
    [
        'imgURL' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        '_id' => 1,
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'imgURL' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        '_id' => 1,
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'imgURL' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        '_id' => 1,
        'size' => 'Medium',
        'price' => '235,000',
    ],
    [
        'imgURL' => '/assets/Pizza_Extra_Topping.jpg',
        'name' => 'PIZZA SIÊU TOPPING HẢI SẢN XỐT MAYONNAISE - SUPER TOPPING OCEAN MANIA',
        '_id' => 1,
        'size' => 'Medium',
        'price' => '235,000',
    ],
];
?>

<div class="products-container">
    <h1>Today Highlight !</h1>
    <div class="red-line"></div>
    <div class="products-list">
        @foreach($todayHighlight as $key => $value)
            <x-product-card
                :category="'todayHighlight'"
                :id="$value['_id']"
                :name="$value['name']"
                :imgURL="$value['imgURL']"
                :price="$value['price']"
                :size="$value['size']"
            />
        @endforeach
    </div>
    <a href="" class="see-more">Xem thêm</a>
</div>
