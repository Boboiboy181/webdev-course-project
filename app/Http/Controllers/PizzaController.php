<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

class PizzaController extends Controller
{
    private Pizza $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $filterType = request('tag');

        return view('menu.pizza', ['pizzas' => $this->pizza->getPizzas($filterType)]);
    }

    public function show(string $pizza): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->pizza::query()->find($pizza)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Pizza::query()->create([
            'name' => request('name'),
            'desc' => request('desc'),
            'price' => request('price'),
            'imgURL' => request('imgURL'),
            'toppingType' => request('toppingType'),
            'category' => request('category'),
        ]);

        return redirect()->route('pizzas.index');
    }
}
