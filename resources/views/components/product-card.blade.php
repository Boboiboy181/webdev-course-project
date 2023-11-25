@props(['id', 'category', 'imgURL', 'name', 'price', 'size'])

<div class="{{ $category }}-item">
    <div class="{{ $category }}-img">
        <img src="{{ url($imgURL) }}" alt="">
    </div>
    <div class="{{ $category }}-detail">
        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="{{ $category }}-name"
           href="{{route('pizzas.show', ['pizza' => $id])}}">{{ $name }}</a>
        <p class="{{ $category }}-option">
            @if(isset($size) || $category == 'pizza')
                <span class="size">{{ $size ? $size : 'Medium' }}</span> - <br>
            @endif
            <span class="price">{{ $price }} VNĐ</span>
        </p>
    </div>
</div>
