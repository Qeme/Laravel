<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dojos>
 */
class DojosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             //we can pass the dummy values for testing here instead of type it one by one in artisan tinker
             'name' => fake()->company(), //use company() instead of name()
             'location' => fake()->city(),
             'description' => fake()->paragraph(10)
        ];
    }
}
