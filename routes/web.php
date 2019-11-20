<?php


Route::post('/products', 'ProductsController@store');
Route::put('/products/{product}', 'ProductsController@update');


Route::get('/', function () {
    return view('welcome');
});

Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
/*
Route::view('/', 'main');
Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('/thankyou', 'thankyou');
*/
