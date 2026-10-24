<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['nis'=>'1001', 'name'=>'Charles', 'gender'=>'Laki-Laki','class'=>'12 TKJ 2', 'major'=>'TKJ'],
            ['nis'=>'1002', 'name'=>'Nano', 'gender'=>'Perempuan','class'=>'12 AKL 2', 'major'=>'AKL'],
            ['nis'=>'1003', 'name'=>'Nani', 'gender'=>'Perempuan','class'=>'12 BiD 2', 'major'=>'BiD'],
        ];

        Student::upsert($students, ['nis'],['name', 'gender', 'class', 'major']);
    }
}
