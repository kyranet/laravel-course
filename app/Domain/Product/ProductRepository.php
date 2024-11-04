<?php

namespace App\Domain\Product;

interface ProductRepository
{
    /**
     * Get all products
     */
    public function getAll(): array;

    /**
     * Create a product
     */
    public function create(Product $product): void;
}
