<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "halaman daftar kelas";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "halaman tambah kelas";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "tambah data kelas baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "menambilkan data kelas dengan id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "halaman edit kelas dengan id: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "halaman apdet kelas dengan id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "menghancurkan kelas dengan id: {$id}";
    }
}
