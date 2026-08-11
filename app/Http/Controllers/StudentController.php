<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $title = "Sistem sekolah - Daftar Siswa";
        $students =[
            [
                'id' => 1,
                'nis'=> '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis'=> '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
    
    public function show(string $id){
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create(){
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit(string $id){
        $title ="Sistem Sekolah - Edit";
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function store(){
        return "murid telah di store";
    }

    public function update(string $id){
        return "ini adalah murid yang di edit {$id}";
    }

    public function destroy(string $id){
        return "ini adalah id yang akan di hapus {$id}";
    }

}
