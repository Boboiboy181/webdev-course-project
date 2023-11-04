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

Route::get('/', function () {
    return view('home.home');
})->name('pizza.home');

Route::get('/menu', function () {
    return view('menu.pizza');
})->name('pizza.menu');

Route::get('/menu/combos', function () {
    return view('menu.combo');
})->name('pizza.combos');

Route::get('/menu/pizzas', function () {
    return view('menu.pizza');
})->name('pizza.pizzas');

Route::get('/menu/sides', function () {
    return view('menu.side');
})->name('pizza.sides');

Route::get('/menu/desserts', function () {
    return view('menu.dessert');
})->name('pizza.desserts');

Route::get('/menu/drinks', function () {
    return view('menu.drink');
})->name('pizza.drinks');
