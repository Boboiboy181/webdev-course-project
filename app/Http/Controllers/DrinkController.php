<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DrinkController extends Controller
{
    private Product $drink;

    public function __construct()
    {
        $this->drink = new Product();
    }

    public function index()
    {
        $drinks = Product::query()->where('category', 'drink')->get();

        return view('menu.drink', ['drinks' => $drinks]);
    }

    public function show(string $drink): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->drink::query()->find($drink)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Product::query()->create([
            'name' => request('name'),
            'price' => request('price'),
            'imgURL' => request('imgURL'),
        ]);

        return redirect()->route('drinks.index');
    }
}
