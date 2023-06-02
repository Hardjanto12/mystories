<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Clear existing records from the stories table (optional)
        Story::truncate();

        // Create sample stories
        for ($i = 0; $i < 10; $i++) {
            Story::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'user_id' => $faker->numberBetween(1, 3),
                'category_id' => $faker->numberBetween(1, 3),
            ]);
        }
    }
}
