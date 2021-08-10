<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'brand_id' => Brand::factory()->create(),
            'name' => $this->faker->word(),
            'sku' => $this->faker->randomNumber(5),
            'price' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean(80),
        ];
    }
}
