<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() // -> buat functiom baru dengan nama index
    {
        return "ini adalah halaman daftar guru"; // -> yang memakai class function index bakalan ngereturn ini di webnya
    }

    public function show(string $id) // -> sama seperti yang diatas, cuma tambahin attribute string $idnya
    {
        return "menampilkan detail guru dengan id : {$id}";
    }

    public function edit(string $id){
        return "ini adalah halaman mengedit data guru dari id : {$id}";
    }

    public function create(){
        return "ini adalah halaman menambahkan guru";
    }

    public function store(){
        return "menambahkan data guru baru";
    }

    public function update(string $id){
        return "guru dengan id : {$id} sudah diupdate";
    }

    public function delete(string $id){
        return "menghapus guru dengan id : {$id}";
    }
}