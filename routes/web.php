<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.home');
})->name('pizza.home');

Route::get('/home', function () {
    return view('pages.home.home');
})->name('pizza.home')->middleware(['auth', 'verified']);

Route::prefix('/menu')->group(function () {
    Route::get('/pizzas', [MenuController::class, 'pizzasView'])->name('pizza.pizzas');
    Route::get('/sides', [MenuController::class, 'sidesView'])->name('pizza.sides');
    Route::get('/drinks', [MenuController::class, 'drinksView'])->name('pizza.drinks');
    Route::get('/desserts', [MenuController::class, 'dessertsView'])->name('pizza.desserts');
    Route::get('/combos', function () {
        return view('menu.combo');
    })->name('pizza.combos');
    Route::get('/{id}', [MenuController::class, 'productDetailView'])->name('pizza.detail');
});

Route::prefix('/cart')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('cart.index');
    Route::get('/payment', [CheckoutController::class, 'showPayment'])->name('cart.payment');
    Route::get('/thank-you', [CheckoutController::class, 'showThankYou'])->name('cart.thank-you');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('admin.product.detail');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::patch('/products/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');
});
