<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MenuController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('pages.home.home');
})->name('pizza.home');

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

Route::resource('/auth', AuthController::class);
