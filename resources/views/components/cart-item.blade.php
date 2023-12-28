@props(['item'])

<div class="cart-item-container">
    <div>
        <div class="cart-item-img">
            <img src="{{ $item->imgURL }}" alt="{{ $item->name }}">
        </div>
        <div class="cart-item-info">
            <p>{{ $item->name }}</p>
            <div>
                <button data-id="{{ $item->_id }}" class="decrement-btn">-</button>
                <label>
                    <input class="cart-quantity" type="text" value="{{ $item->quantity }}">
                </label>
                <button data-id="{{ $item->_id }}" class="increment-btn">+</button>
            </div>
            @isset($item->size)
                <p>Size: {{ $item->size }}</p>
                <p>Crust: {{ $item->crust }}</p>
                <p>Bonus: {{ $item->cheese }}</p>
            @endisset
            <p>Action:
                <span class="btn-delete" data-id="{{ $item->_id }}" data-url="{{ url()->current() }}">
                    <i class="fa-regular fa-trash">
                    </i>
                </span>
            </p>
        </div>
    </div>
    <div class="cart-item-price">
        <p>Total</p>
        <p><span>{{ number_format($item->price, 0, ',', ',') }}</span>đ</p>
    </div>
</div>
