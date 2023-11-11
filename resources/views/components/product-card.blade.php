@props(['category','img', 'name', 'price', 'size'])

<div class="{{$category}}-item">
    <div class="{{$category}}-img">
        <img src="{{url($img)}}" alt="">
    </div>
    <div class="{{$category}}-detail">
        <p class="{{$category}}-name">{{$name}}</p>
        <p class="{{$category}}-option">
            <span class="size">{{$size}}</span> - <span class="price">{{$price}} VNĐ</span>
        </p>
    </div>
</div>