<?php

namespace App\Http\Controllers\SchoolClass;

class EditController
{
    public function __invoke(string $id)
    {
        $title = 'Sistem Sekolah - Edit Kelas';

        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
            ],
        ];

        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];

        return view('classes.edit', [
            'title' => $title,
            'id' => $id,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }
}