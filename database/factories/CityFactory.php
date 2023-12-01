<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name'=>fake()->text(30),
        ];
        //    City::factory()->create([
        //     'name' => 'Test User',
        //  ]);
    }
}
