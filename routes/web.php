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

    $array = [1, 2, 3, 4, 5];

    $nome = "Guilherme";
    return view('welcome', ['nome' => $nome, 'array' => $array]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    $search = request('search');
    return view('products', ['search' => $search]);
});

Route::get('/products_test/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});

