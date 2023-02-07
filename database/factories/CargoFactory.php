<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory

{
    // public $table = 'cargo';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cargo_weight' => $this->faker->randomElement(['1 ton', '2 ton', '3 ton', '4 ton', '5 ton', '6 ton', '7 ton', '8 ton', '9 ton', '10 ton']),
            'cargo_size' => $this->faker->randomElement(['small', 'medium', 'large']),
            'pickup_location' => $this->faker->city,
            'pickup_date' => $this->faker->date(),
            'dropoff_location' => $this->faker->city,
            'status' => $this->faker->randomElement(['pending approval', 'approved', 'rejected', 'allocated', 'loaded', 'in transit', 'delivered', 'withdrawn']),
            'special_instructions' => $this->faker->text(100),
            'vessel_berth_number' => $this->faker->randomNumber(5),
            'bill_of_landing' => $this->faker->randomNumber(5),
            'container_number' => $this->faker->randomNumber(5),
            'client_reference_number' => $this->faker->randomNumber(5),
            
        ];
    }
}
