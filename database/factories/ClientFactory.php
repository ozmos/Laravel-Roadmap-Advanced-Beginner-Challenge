<?php

namespace Database\Factories;

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
        return [
            'company' => $this->faker->company,
            'address' => $this->faker->address,
            'abn' => $this
                        ->faker
                        ->unique()
                        ->numberBetween(1000000000, 9999999999),
            'phone' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->email()
        ];
    }
}
