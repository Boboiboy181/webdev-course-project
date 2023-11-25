@props(['category', 'imgURL', 'name', 'price', 'size'])

<div class="{{ $category }}-item">
    <div class="{{ $category }}-img">
        <img src="{{ url($imgURL) }}" alt="">
    </div>
    <div class="{{ $category }}-detail">
        <a class="{{ $category }}-name">{{ $name }}</a>
        <p class="{{ $category }}-option">
            @if(isset($size) || $category == 'pizza')
                <span class="size">{{ $size ? $size : 'Medium' }}</span> - <br>
            @endif
            <span class="price">{{ $price }} VNĐ</span>
        </p>
    </div>
</div>
