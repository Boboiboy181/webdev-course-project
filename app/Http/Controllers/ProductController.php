<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.admin.product.product', ['products' => $products]);
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.admin.product.product-detail', ['product' => $product]);
    }

    public function create()
    {
        return view('pages.admin.product.product-create');
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.admin.product.product-edit', ['product' => $product]);
    }

    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->validated();

        $product->update($data);

        return redirect()->route('admin.product.detail', ['id' => $id])->with('success', 'Product updated successfully');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        //        $product->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
    }
}
