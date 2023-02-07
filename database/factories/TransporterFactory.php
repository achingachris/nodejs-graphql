<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transporter>
 */
class TransporterFactory extends Factory
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

            'company_name' => $this->faker->company(),
            'email' => $this->faker->safeEmail,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'route' => $this->faker->randomNumber(2),
            'num_of_trucks' => $this->faker->randomNumber(10),
            'bsns_specialization' => $bsns_specialization,
            'relevant_docs' => $this->faker->randomNumber(10),
            'company_reg_certificate' => $this->faker->name(),
            'company_tin_number' => $this->faker->randomNumber(10)

        ];
    }
}
