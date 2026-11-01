<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        $schoolClasses = ['10 AKL', '11 AKL', '12 AKL', '10 TKJ', '11 TKJ', '12 TKJ', '10 BiD', '11 BiD', '12 BiD'];

        foreach ($schoolClasses as $name) {
            SchoolClass::firstOrCreate(['name' => $name]);
        }
    }
}
