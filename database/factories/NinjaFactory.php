<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
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
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(0,100),
            'bio' => fake()->realText(500)
        ];
    }
}
