<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 15),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(mt_rand(2, 8)),
            'cafe_id' => mt_rand(1, 30),
            'like' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
