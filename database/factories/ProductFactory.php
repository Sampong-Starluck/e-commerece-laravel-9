<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as facker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this ->faker->word,
            'detail' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(10,10000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(2,30),


        ];
    }
}
