<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cafe>
 */
class CafeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(1, 2)),
            'address' => $this->faker->sentence(mt_rand(2, 8)),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(25000, 100000),
            'openday' => $this->faker->randomElement(['every day', 'mon - fri','tue - sun']),
            'openhour' => $this->faker->randomElement(['09.00 - 21.00', '10.00 - 22.00', '09.00 - 00.00']),
            'image1' => $this->faker->imageUrl(640, 480, 'cafe', true),
            'image2' => $this->faker->imageUrl(360, 360, 'cafe', true),
            'image3' => $this->faker->imageUrl(360, 360, 'cafe', true),
            'image4' => $this->faker->imageUrl(360, 360, 'cafe', true),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
