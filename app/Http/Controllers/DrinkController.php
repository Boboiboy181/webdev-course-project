<?php

namespace App\Http\Controllers;

use App\Models\Drink;

class DrinkController extends Controller
{
    private Drink $drink;

    public function __construct()
    {
        $this->drink = new Drink();
    }

    public function index()
    {
        $drinks = Drink::all();

        return view('menu.drink', ['drinks' => $drinks]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Drink::query()->create([
            'name' => request('name'),
            'price' => request('price'),
            'imgURL' => request('imgURL'),
        ]);

        return redirect()->route('drinks.index');
    }
}