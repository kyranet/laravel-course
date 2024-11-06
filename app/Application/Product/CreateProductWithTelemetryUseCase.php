<?php

namespace App\Application\Product;

class CreateProductWithTelemetryUseCase implements CreateProduct
{
    private CreateProductUseCase $useCase;

    public function __construct(CreateProductUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function execute(CreateProductRequest $request): void
    {
        // Start telemetry
        $this->useCase->execute($request);
        // End telemetry
    }
}
