<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();

        foreach ($categories as $category) {
            $products = Product::factory(10)->make();
            $category->products()->saveMany($products);
        }
    }
}
