<?php

namespace Database\Factories;

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
            'product_name' => $this->faker->word,
            'product_price' => $this->faker->randomFloat(2, 10, 100),
            'store_id' => function () {
                return \App\Models\Store::factory()->create()->store_id;
            },
            'product_category' => 1, // Contoh category_id untuk makanan
            'product_image' => $this->faker->imageUrl(),
        ];
    }
}
