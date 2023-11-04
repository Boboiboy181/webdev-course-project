<div class="sub-nav-container">
    <ul class="sub-nav-list">
        <li><a class="{{request()->is('menu/combos') ? 'active' : ''}}" href="{{route('pizza.combos')}}">Combo</a></li>
        <li><a class="{{request()->is('menu') ? 'active' : (request()->is('menu/pizzas') ? 'active' : '')}}" href="{{route('pizza.pizzas')}}">Pizza</a></li>
        <li><a class="{{request()->is('menu/sides') ? 'active' : ''}}" href="{{route('pizza.sides')}}">Món phụ</a></li>
        <li><a class="{{request()->is('menu/desserts') ? 'active' : ''}}" href="{{route('pizza.desserts')}}">Tráng miệng</a></li>
        <li><a class="{{request()->is('menu/drinks') ? 'active' : ''}}" href="{{route('pizza.drinks')}}">Thức uống</a></li>
    </ul>
</div>


