<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Product;

class PizzaController extends Controller
{
    private Product $pizza;

    public function __construct()
    {
        $this->pizza = new Product();
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $filterType = request('tag');

        if ($filterType) {
            $data = $this->pizza->query()->where('category', 'pizza')->where('toppingType', $filterType)->get();
            $pizzas = Helper::convertToCategory($data, 'pizzaCategory');
        } else {
            $pizzas = Helper::convertToCategory($this->pizza->query()->where('category', 'pizza')->get(), 'pizzaCategory');
        }

        return view('menu.pizza', ['pizzas' => $pizzas]);
    }

    public function show(string $pizza): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->pizza::query()->find($pizza)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Product::query()->create([
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
