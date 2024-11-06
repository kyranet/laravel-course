<?php

namespace App\Repositories;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;
use App\Models\Product as ModelProduct;

class EloquentProductRepository implements ProductRepository
{
    public function getAll(): array
    {
        $return = [];
        foreach (ModelProduct::all() as $product) {
            $return[] = new Product($product->getName(), $product->getDescription(), $product->getPrice());
        }

        return $return;
    }

    public function create(Product $product): void
    {
        ModelProduct::create([
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice()
        ]);
    }
}
