<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->words(2, true),
            'description' => $this->faker->unique()->sentences(5, true),
            'deadline' => $this->faker->dateTimeBetween('+2 weeks', '+3 years')
        ];
    }
}
