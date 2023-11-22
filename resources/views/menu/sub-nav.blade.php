<div class="sub-nav-container">
    <ul class="sub-nav-list">
        <li><a class="{{request()->is('menu/combos') ? 'active' : ''}}" href="{{route('pizza.combos')}}">Combo</a></li>
        <li><a class="{{request()->is('menu') ? 'active' : (request()->is('menu/pizzas') ? 'active' : '')}}"
               href="{{route('pizza.pizzas')}}">Pizza</a></li>
        <li><a class="{{request()->is('menu/sides') ? 'active' : ''}}" href="{{route('pizza.sides')}}">Side dishes</a>
        </li>
        <li><a class="{{request()->is('menu/desserts') ? 'active' : ''}}" href="{{route('pizza.desserts')}}">Dessert</a>
        </li>
        <li><a class="{{request()->is('menu/drinks') ? 'active' : ''}}" href="{{route('pizza.drinks')}}">Drink</a>
        </li>
    </ul>
    <div class="sub-nav-option {{ request()->is('menu/pizzas', 'menu/sides', 'menu') ? '' : 'none' }}">
        <ul>
            <li><a>All</a></li>
            <li><a>Seafood</a></li>
            <li><a>Beef</a></li>
            <li><a>Chicken</a></li>
            <li><a>Pork</a></li>
            <li><a>Vegetarian</a></li>
        </ul>
    </div>
</div>


