<?php

namespace Database\Seeders;

use App\Models\TestsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestsType::truncate();
        TestsType::insert([
            ['name' => 'يومي'],
            ['name' => 'شهري'],
            ['name' => 'فصلي'],
            ['name' => 'فاينل'],
           
]);
    }
}
