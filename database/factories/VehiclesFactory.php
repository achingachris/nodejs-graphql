<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicles>
 */
class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vehicle_type' => $this->faker->randomElement(['long vehicle', 'extra heavy']),
            'plate_number' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'capacity' => $this->faker->randomElement(['1 ton', '2 ton', '3 ton', '4 ton', '5 ton', '6 ton', '7 ton', '8 ton', '9 ton', '10 ton']),
            'type_of_trailer' => $this->faker->randomElement(['flatbed', 'open', 'closed', 'refrigerated', 'tanker', 'container']),
            'trailer_plate_number' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'status' => $this->faker->randomElement(['available', 'maintenance']),
        ];
    }
}
