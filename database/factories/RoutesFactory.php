<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Routes>
 */
class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'destination_1' => $this->faker->city,
            'destination_2' => $this->faker->city,
            'distance' => $this->faker->numberBetween(100, 1000),
            //
        ];
    }
}
