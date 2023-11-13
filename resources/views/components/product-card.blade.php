@props(['category', 'img', 'name', 'price', 'size'])

<div class="{{ $category }}-item">
    <div class="{{ $category }}-img">
        <img src="{{ url($img) }}" alt="">
    </div>
    <div class="{{ $category }}-detail">
        <a class="{{ $category }}-name">{{ $name }}</a>
        <p class="{{ $category }}-option">
            @if(isset($size))
                <span class="size">{{ $size }}</span> -
            @endif
            <span class="price">{{ $price }} VNĐ</span>
        </p>
    </div>
</div>
