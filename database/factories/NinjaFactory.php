<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// call the Dojos
use App\Models\Dojos;

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
            'bio' => fake()->realText(500),
            // the problem with this is that when u fresh the tables, these ninjas cant be created as no dojo_id populated into them
            /* 1. Call for the Dojos
               2. Then use inRandomOrder() method to randomly order the data
               3. Grab the first or top data
               4. Just grab the id of dojo and deny any other attributes */
            'dojo_id' => Dojos::inRandomOrder()->first()->id,
        ];
    }
}
