<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(10)->create();

        foreach(Product::all() as $product){
            $randomIdTags = $tags->random(rand(2, 5))->pluck('id');
            $product->tags()->attach($randomIdTags);
        }
    }
}
