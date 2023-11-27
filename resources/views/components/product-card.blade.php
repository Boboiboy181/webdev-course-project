@props(['id', 'category', 'imgURL', 'name', 'price', 'size'])

<div class="{{ $category }}-item">
    <div class="{{ $category }}-img">
        <img
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            data-bs-details="{{ json_encode(['id' => $id, 'category' => $category]) }}"
            src="{{ url($imgURL) }}" alt="{{$name}}"
        >
    </div>
    <div class="{{ $category }}-detail">
        <a
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            data-bs-details="{{ json_encode(['id' => $id, 'category' => $category]) }}"
            class="{{ $category }}-name"
        >
            {{ $name }}
        </a>
        <p class="{{ $category }}-option">
            @if(isset($size) || $category == 'pizza')
                <span class="size">{{ $size ? $size : 'Medium' }}</span> - <br>
            @endif
            <span class="price">{{ $price }} VNĐ</span>
        </p>
    </div>
</div>