<div class="sub-nav-container">
    <ul class="sub-nav-list">
        <li><a class="{{request()->is('menu/combos') ? 'active' : ''}}" href="{{route('pizza.combos')}}">Combo</a></li>
        <li><a class="{{(request()->is('menu/pizzas') ? 'active' : '')}}"
               href="{{route('pizzas.index')}}">Pizza</a></li>
        <li><a class="{{request()->is('menu/sides') ? 'active' : ''}}" href="{{route('pizza.sides')}}">Món phụ</a></li>
        <li><a class="{{request()->is('menu/desserts') ? 'active' : ''}}" href="{{route('pizza.desserts')}}">Tráng
                miệng</a></li>
        <li><a class="{{request()->is('menu/drinks') ? 'active' : ''}}" href="{{route('pizza.drinks')}}">Thức uống</a>
        </li>
    </ul>
    <div class="sub-nav-option {{ request()->is('menu/pizzas', 'menu/sides', 'menu') ? '' : 'none' }}">
        <ul>
            <li><a>Tất cả</a></li>
            <li><a>Hải sản</a></li>
            <li><a>Bò</a></li>
            <li><a>Gà</a></li>
            <li><a>Heo</a></li>
            <li><a>Món chay</a></li>
        </ul>
    </div>
</div>


