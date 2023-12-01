<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

          
            'degree'=>fake()->numberBetween(50,100),
            'subject_id'=>random_int(0, 2) ? 1:0,
            'stage_id'=>random_int(0, 2) ? 1:0,
            'student_id'=>random_int(0, 2) ? 1:0,
            'test_type_id'=>random_int(0, 2) ? 1:0,

            'created_at'=>Carbon::now()


            ];
    }
}
