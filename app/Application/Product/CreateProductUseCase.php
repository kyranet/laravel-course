<?php

namespace App\Application\Product;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;

class CreateProductUseCase implements CreateProduct
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(CreateProductRequest $request): void
    {
        $this->repository->create(new Product($request->getName(), $request->getDescription(), $request->getPrice()));
    }
}
