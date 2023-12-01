<?php

namespace Database\Seeders;

use App\Http\Controllers\GenderController;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Gender::truncate();
                Gender::insert([
                    ['name' => 'ذكر'],
                    ['name' => 'انثى'],
        ]);
    }
}
