<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory()->create([
            'name' => 'Brand Ambassadors',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Korean',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'JKT 48',
        ]);
    }
}
