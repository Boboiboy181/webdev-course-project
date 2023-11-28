@php
    $tags = ['All', 'Seafood', 'Beef', 'Chicken', 'Pork', 'Vegetarian'];
    $currentTag = request()->query('tag', '');
    $request = '';
    if (request()->is('menu/pizzas')) {
        $request = 'pizzas.index';
    } elseif (request()->is('menu/sides')) {
        $request = 'sides.index';
    } else {
        $request = 'pizzas.index';
    }
@endphp

<div class="sub-nav-container">
    <ul class="sub-nav-list">
        <li><a class="{{request()->is('menu/combos') ? 'active' : ''}}" href="{{route('pizza.combos')}}">Combo</a></li>
        <li><a class="{{(request()->is('menu/pizzas') ? 'active' : '')}}"
               href="{{route('pizzas.index')}}">Pizza</a></li>
        <li><a class="{{request()->is('menu/sides') ? 'active' : ''}}"
               href="{{route('sides.index')}}">Side dishes</a>
        </li>
        <li><a class="{{request()->is('menu/desserts') ? 'active' : ''}}"
               href="{{route('desserts.index')}}">Dessert</a>
        </li>
        <li><a class="{{request()->is('menu/drinks') ? 'active' : ''}}"
               href="{{route('drinks.index')}}">Drink</a>
        </li>
    </ul>
    <div class="sub-nav-option {{ request()->is('menu/pizzas', 'menu/sides', 'menu') ? '' : 'none' }}">
        <ul>
            @foreach ($tags as $tag)
                <li>
                    <a class="{{ $currentTag === 'All' || (empty($currentTag) && $tag === 'All') || $currentTag === $tag ? 'active' : '' }}"
                       href="{{ route($request, ['tag' => $tag === 'All' ? null : $tag]) }}">{{ $tag }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
