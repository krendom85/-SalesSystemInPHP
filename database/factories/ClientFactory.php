<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        return [
            //
            'name' => $this->faker->name(),
            'email'=> $this->faker->safeEmail(),
            'password'=> $this->faker->password(6),
            'plan'=> 2,
            'status'=> $this->faker->boolean(),
            'init_at'=>$this->faker->dateTime(),
            'expires_at'=>$this->faker->dateTime(),
        ];
    }
}
