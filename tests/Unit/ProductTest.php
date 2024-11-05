<?php

namespace Tests\Unit;

use App\Application\Product\CreateProductRequest;
use App\Application\Product\CreateProductUseCase;
use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     */
    #[Test]
    public function given_a_use_case__calls_the_create_method_from_repository_with_domain_product_object(): void
    {
        $repositoryMock = $this->createMock(ProductRepository::class);
        /** @var ProductRepository $repository */
        $repository = $repositoryMock;
        $usecase = new CreateProductUseCase($repository);
        $request = new CreateProductRequest('iPhone', 1000);

        $repositoryMock
            ->expects($this->exactly(1))
            ->method('create')
            ->with(
                $this->equalTo(new Product('iPhone', 1000))
            );

        $usecase->execute($request);
    }
}
