<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return "daftar siswa";
    }
    
    public function show(string $id){
        return "data siswa yang muncul adalah ini {$id}";
    }

    public function create(){
        return "Telah bikin data baru";
    }

    public function edit(string $id){
        return "Ini adalah murid yang akan di edit {$id}";
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
