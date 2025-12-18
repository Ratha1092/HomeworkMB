<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'degree' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'tel' => '0 ' . $this->faker->numberBetween(100, 999) . ' ' . $this->faker->numberBetween(100, 999) . ' ' . $this->faker->numberBetween(100, 999),
        ];
    }
}
