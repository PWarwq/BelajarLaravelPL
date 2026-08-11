<?php

namespace App\Http\Controllers\SchoolClass;

class ShowController
{
    public function __invoke(string $id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        return view('classes.show', [
            'title' => $title,
            'id' => $id,
        ]);
    }
}