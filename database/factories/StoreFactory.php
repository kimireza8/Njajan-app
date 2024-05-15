<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\User; // Import class User
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Mengambil satu user dengan role_id 2 (seller) secara acak
        $seller = User::where('role_id', 2)->inRandomOrder()->first();

        // Jika tidak ada seller, kembalikan null atau kosong
        if (!$seller) {
            return [];
        }

        return [
            'store_name' => $this->faker->company,
            'store_image' => $this->faker->imageUrl(),
            'user_id' => $seller->user_id,
        ];
    }
}
