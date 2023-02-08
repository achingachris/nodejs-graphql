<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bsns_specialization = $this->faker->randomElement(['I', 'B']);

        return [

            'user_id' => User::factory(),
            'company_name' => $this->faker->company(),
            'tin_number' => $this->faker->randomNumber(5,15),
            'address' => $this->faker->address(),

        ];
    }
}
