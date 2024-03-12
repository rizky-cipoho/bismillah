<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek' => fake()->name(),
            'model' => fake()->randomElement(['suzuki', 'daihatsu', 'toyota', 'honda']),
            'platno' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'user_id' => 1,
            'image' => '/images/avanza-13-e-mt-astrajpg-20211130095920.jpg',
            'price' => fake()->numberBetween(100000, 300000),
        ];
    }
}
