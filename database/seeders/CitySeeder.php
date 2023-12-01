<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
        // City::factory()->create();
        public function run(): void
        {
            City::truncate();
                City::insert([
                    ['name' => 'بغداد'],
                    ['name' => 'كربلاء'],
                    ['name' => 'النجف'],
                    ['name' => 'البصرة'],
                    ['name' => 'المثنى'],
                    ['name' => 'ذي قار'],
                    ['name' => 'بابل'],
                    ['name' => 'واسط'],
                    ['name' => 'ميسان'],
                    ['name' => 'صلاح الدين'],
                    ['name' => 'اربيل'],
                    ['name' => 'كركوك'],
                    ['name' => 'سليمانية'],
                    ['name' => 'دهوك'],
                    ['name' => 'نينوى'],
                    ['name' => 'الانبار'],
                    ['name' => 'القادسية'],
                    ['name' => 'ديالى'],
                ]);

    }
}
