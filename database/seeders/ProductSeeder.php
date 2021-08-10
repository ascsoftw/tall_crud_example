<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands = Brand::inRandomOrder()->limit(10)->get();
        foreach ($brands as $brand) {
            Product::factory()
                ->count(5)
                ->for($brand)
                ->create();
        }
        
        $categories = Category::get();
        $tags = Tag::get();
        Product::get()->each(function ($product) use ($categories, $tags) { 
            $product->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            ); 
            $product->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
