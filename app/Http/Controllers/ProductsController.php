<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

/**
 * @author Tobias Maxham <git2019@maxham.de>
 */
class ProductsController
{
    public function store(ProductRequest $request)
    {
        $product = Product::create(request()->all());
        return response($product, 201);
    }

    public function update(Product $product)
    {
        $product->update(request()->all());
        return response($product);
    }
}
