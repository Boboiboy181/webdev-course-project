<?php

namespace App\Http\Controllers;

use App\Models\Dessert;

class DessertController extends Controller
{
    private Dessert $dessert;

    public function __construct()
    {
        $this->dessert = new Dessert();
    }

    public function index()
    {
        $desserts = Dessert::all();

        return view('menu.dessert', ['desserts' => $desserts]);
    }

    public function show(string $dessert): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->dessert::query()->find($dessert)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Dessert::query()->create([
            'name' => request('name'),
            'imgURL' => request('imgURL'),
            'price' => request('price'),
            'desc' => request('desc'),
        ]);

        return redirect()->route('desserts.index');
    }
}
