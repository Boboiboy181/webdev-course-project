<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Product;

class SideController extends Controller
{
    private Product $side;

    public function __construct()
    {
        $this->side = new Product();
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $filterType = request('tag');

        if ($filterType) {
            $data = $this->side->query()->where('category', 'side')->where('toppingType', $filterType)->get();
            $sides = Helper::convertToCategory($data, 'sideCategory');
        } else {
            $sides = Helper::convertToCategory($this->side->query()->where('category', 'side')->get(), 'sideCategory');
        }

        return view('menu.side', ['sides' => $sides]);
    }

    public function show(string $side): \Illuminate\Http\JsonResponse
    {
        $content = view('menu.product-detail', ['item' => $this->side::query()->find($side)]);

        return response()->json(['content' => $content->render()]);
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        Product::query()->create([
            'name' => request('name'),
            'imgURL' => request('imgURL'),
            'price' => request('price'),
            'desc' => request('desc'),
            'category' => request('category'),
        ]);

        return redirect()->route('sides.index');
    }
}
