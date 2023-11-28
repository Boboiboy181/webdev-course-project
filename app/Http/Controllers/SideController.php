<?php

namespace App\Http\Controllers;

use App\Models\Side;

class SideController extends Controller
{
    private Side $side;

    public function __construct()
    {
        $this->side = new Side();
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $filterType = request('tag');

        return view('menu.side', ['sides' => $this->side->getSides($filterType)]);
    }

    public function show(string $side): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->side::query()->find($side)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Side::query()->create([
            'name' => request('name'),
            'imgURL' => request('imgURL'),
            'price' => request('price'),
            'desc' => request('desc'),
            'category' => request('category'),
        ]);

        return redirect()->route('sides.index');
    }
}
