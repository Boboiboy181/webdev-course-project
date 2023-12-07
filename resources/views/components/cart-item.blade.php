@props(['item'])

<div class="cart-item-container">
    <div>
        <div class="cart-item-img">
            <img src="{{$item->imgURL}}" alt="{{$item->name}}">
        </div>
        <div class="cart-item-info">
            <p>{{$item->name}}</p>
            <div>
                <button onclick="">-</button>
                <label>
                    <input type="number">
                </label>
                <button onclick="">+</button>
            </div>
            @isset($item->size)
                <p>Size: {{$item->size}}</p>
                <p>Crust: {{$item->crust}}</p>
                <p>Bonus: {{$item->cheese}}</p>
            @endisset
            <p>Điều chỉnh
                <span class="btn-delete"
                      data-id="{{ $item->_id }}"><i
                        class="fa-regular fa-trash"></i>
                </span>
            </p>
        </div>
    </div>
    <div class="cart-item-price">
        <p>Total</p>
        <p><span>{{number_format($item->price, 0, ',', ',')}}</span>đ</p>
    </div>
</div>
