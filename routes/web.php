<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/menu/pizzas', \App\Http\Controllers\PizzaController::class);
Route::resource('/menu/sides', \App\Http\Controllers\SideController::class);

Route::get('/', function () {
    return view('home.home');
})->name('pizza.home');

Route::get('/menu/combos', function () {
    return view('menu.combo');
})->name('pizza.combos');

Route::get('/menu/desserts', function () {
    return view('menu.dessert');
})->name('pizza.desserts');

Route::get('/menu/drinks', function () {
    return view('menu.drink');
})->name('pizza.drinks');
