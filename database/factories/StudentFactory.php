<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name'=>fake()->text(5),
            'image'=>fake()->text(5),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone'=>fake()->text(5),
            'birthday'=>Carbon::now(),
            'address'=>fake()->text(10),
            'gender_id'=>random_int(0, 2) ? 1:0,
            'stage_id'=>random_int(0, 2) ? 1:0,
            'city_id'=>random_int(0, 2) ? 1:0,

            'created_at'=>Carbon::now()


            ];

    }
}
