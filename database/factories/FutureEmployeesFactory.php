<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FutureEmployees>
 */
class FutureEmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'job' => $this->faker->jobTitle(),
            'cellphone' => $this->faker->phoneNumber(),
            'description' => $this->faker->sentence(),
        ];
    }
}
