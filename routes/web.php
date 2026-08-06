<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\IndexController;
use App\Http\Controllers\Teacher\StoreController;
use App\Http\Controllers\Teacher\CreateController;
use App\Http\Controllers\Teacher\UpdateController;
use App\Http\Controllers\Teacher\DestroyController;
use App\Http\Controllers\Teacher\EditController;
use App\Http\Controllers\Teacher\ShowController;
use App\Http\Controllers\SchoolClassController;

Route::get('/', function () {
    return view('welcome');
});


// Manage Students (Action)
Route::name('students.') -> prefix('students')-> group(function(){
    // Daftar siswa
    Route::get('/',[StudentController::class, 'index']) -> name('index');

    // Liat Siswa
    Route::get('/{id}', [StudentController::class, 'show']) -> name('show');

    // Tambah 
    Route::get('/create', [StudentController::class, 'create']) -> name('create');

    // Hal Edit
    Route::get('/{id}/edit', [StudentController::class, 'edit'])-> name('edit');


    // Back End Add Student
    Route::post('/', [StudentController::class, 'store'])-> name('store');

    // Back End Edit Student
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Back End Delete Student
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});


// Manajemen Guru (Invokable)
Route::name('teachers.') -> prefix('teachers')-> group(function(){
    // Daftar guru
    Route::get('/',[IndexController::class, 'index']) -> name('index');

    // Liat guru
    Route::get('/{id}', [ShowController::class, 'show']) -> name('show');

    // Tambah 
    Route::get('/create', [CreateController::class, 'create']) -> name('create');

    // Hal Edit
    Route::get('/{id}/edit', [EditController::class, 'edit'])-> name('edit');


    // Back End Add Student
    Route::post('/', [StoreController::class, 'store'])-> name('store');

    // Back End Edit Student
    Route::put('/{id}', [UpdateController::class, 'update'])->name('update');

    // Back End Delete Student
    Route::delete('/{id}', [DestroyController::class, 'destroy'])->name('destroy');
});

// manage data

Route::resource('classes', SchoolClassController::class);