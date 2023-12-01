<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        // UserSeeder::class,
        StudentSeeder::class,
        GenderSeeder::class,
        CitySeeder::class,
        MasterSeeder::class,
        ResultSeeder::class,
        SubjectSeeder::class,
        StageSeeder::class,
        TestsTypeSeeder::class,
    ]


            );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
