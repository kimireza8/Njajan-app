<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Pilih secara acak antara role_id 1, 2, atau 3
        $roleId = $this->faker->randomElement([1, 2, 3]);

        return [
            'user_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Ganti 'password' dengan password default yang diinginkan
            'role_id' => $roleId,
        ];
    }
}
