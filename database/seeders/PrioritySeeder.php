<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\PriorityFactory;
use App\Models\Priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Priority::factory()->create([
            'name' => 'Low'
        ]);
        Priority::factory()->create([
            'name' => 'Medium'
        ]);
        Priority::factory()->create([
            'name' => 'High'
        ]);
    }
}
