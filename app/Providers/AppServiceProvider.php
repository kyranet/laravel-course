<?php

namespace App\Providers;

use App\Application\Product\CreateProduct;
use App\Application\Product\CreateProductUseCase;
use App\Application\Product\CreateProductWithTelemetryUseCase;
use App\Domain\Product\ProductRepository;
use App\Repositories\EloquentProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
        $this->app->bind(CreateProduct::class, CreateProductWithTelemetryUseCase::class);
        $this->app->when(CreateProductWithTelemetryUseCase::class)
            ->needs(CreateProduct::class)
            ->give(CreateProductUseCase::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
