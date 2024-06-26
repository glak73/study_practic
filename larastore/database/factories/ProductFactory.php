<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            "created_at" => $this->faker->dateTimeBetween('-2 months', 'now'),
            "name" => $this->faker->words(3, true),
            "file_name" => $this->faker->sentence(2),
            "category_id" => $this->faker->numberBetween(1,4),
            "user_id" => $this->faker->numberBetween(1,4),
            'product_avatar' => 'fake path',
        ];
    }
}
