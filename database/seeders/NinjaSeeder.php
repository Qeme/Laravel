<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Ninja will gives error, which u need to use the Ninja
use App\Models\Ninja;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if any changes made inside the model, we dont need to drop and create back the data
        Ninja::factory()->count(50)->create();
    }
}
