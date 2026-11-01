<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Sistem sekolah - Daftar Siswa';

        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nis', 'like', "%{$search}%");
                });
            })
            ->when($class, fn ($query, $class) => $query->where('class', '=', $class))
            ->when($major, fn ($query, $major) => $query->where('major', '=', $major))
            ->paginate(5)
            ->withQueryString();

        $schoolClasses = ['10 BiD', '11 BiD', '12 BiD', '10 AKL', '11 AKL', '12 AKL', '10 TKJ', '11 TKJ', '12 TKJ'];
        $majors = ['AKL', 'BiD', 'TKJ'];

        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'schoolClasses' => $schoolClasses,
            'majors' => $majors,
        ]);
    }

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Detail Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';

        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function edit(Student $student)
    {

        $title = 'Sistem Sekolah - Edit';

        return view('students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();
        // Add Data to Database
        Student::create($validatedRequest);

        // Handle if success
        return redirect()->route('students.index')
            ->with('sucess', 'Berhasil Menambahkan data Siswa');
    }

    public function update(Student $student, UpdateRequest $request)
    {
        $validatedRequest = $request->validated();

        // Update Data
        $student->update($validatedRequest);

        // Handle if success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');

    }
}
