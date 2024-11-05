<?php

namespace App\Application\Product;

interface CreateProduct
{
    public function execute(CreateProductRequest $request): void;
}
