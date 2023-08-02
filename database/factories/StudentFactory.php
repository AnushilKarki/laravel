<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'contact' => fake()->name(),
            'address' => fake()->name(),
            'highest_acheived' => fake()->name(),
            'cgpa' => fake()->name(),
            'test_preparation' => fake()->name(),
            'test_score' => fake()->name(),
            'interest_country' => fake()->name(),
            'interest_course' => fake()->name(),
            'work_experience' => fake()->name(),
            'visa_rejection' => fake()->name(),
        ];
    }
}
