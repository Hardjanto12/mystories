<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Cheeze Nutzzz',
            'email' => 'chezenutzzz@gmail.com',
            'password' => '12345678',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Rocks Brocks',
            'email' => 'rocksbrocks@gmail.com',
            'password' => '12345678',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Big Black Clock',
            'email' => 'bigblackclock@gmail.com',
            'password' => '12345678',
        ]);

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);


    }
}
