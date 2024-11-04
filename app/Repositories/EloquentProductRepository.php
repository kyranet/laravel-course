<?php

namespace App\Repositories;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;
use App\Models;

class EloquentProductRepository implements ProductRepository
{
    public function getAll(): array
    {
        $return = [];
        foreach (Models\Product::all() as $product) {
            $return[] = new Product($product->name, $product->price);
        }

        return $return;
    }

    public function create(Product $product): void {
        Models\Product::create([
            'name' => $product->getName(),
            'price' => $product->getPrice()
        ]);
    }
}