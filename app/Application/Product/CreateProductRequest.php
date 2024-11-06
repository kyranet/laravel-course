<?php

namespace App\Application\Product;

class CreateProductRequest
{
    private string $name;
    private ?string $description;
    private int $price;

    public function __construct(string $name, ?string $description, int $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
