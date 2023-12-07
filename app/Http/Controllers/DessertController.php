<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DessertController extends Controller
{
    private Product $dessert;

    public function __construct()
    {
        $this->dessert = new Product();
    }

    public function index()
    {
        $desserts = Product::query()->where('category', 'dessert')->get();

        return view('menu.dessert', ['desserts' => $desserts]);
    }

    public function show(string $dessert): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->dessert::query()->find($dessert)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Product::query()->create([
            'name' => request('name'),
            'imgURL' => request('imgURL'),
            'price' => request('price'),
            'desc' => request('desc'),
        ]);

        return redirect()->route('desserts.index');
    }
}
