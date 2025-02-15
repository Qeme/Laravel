<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // this one is automatically been executed

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // now we add the other seeders here (manageable)
        $this->call([
            //the reason why DojosSeeder should be on the top as we want to 
            //randomly generate data for them and pass it to ninjas for foreign keys to work
            DojosSeeder::class, 
            NinjaSeeder::class,
        ]);
    }
}
