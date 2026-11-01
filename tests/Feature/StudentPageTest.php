<?php

use App\Models\Major;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Database\Seeders\ClassSeeder;
use Database\Seeders\MajorSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed([ClassSeeder::class, MajorSeeder::class]);
    $this->actingAs(User::factory()->create(['role' => 'teacher']));
});

it('shows the student list with class and major names', function () {
    $student = Student::factory()->create(['name' => 'Charles']);

    $this->get('/students')
        ->assertOk()
        ->assertSee('Charles')
        ->assertSee($student->schoolClass->name)
        ->assertSee($student->major->name);
});

it('filters students by class and major', function () {
    $major = Major::first();
    $class = SchoolClass::where('name', 'like', '%AKL%')->first();

    $match = Student::factory()->create(['major_id' => $major->id, 'class_id' => $class->id]);
    $other = Student::factory()->create();

    $this->get('/students?class='.$class->id.'&major='.$major->id)
        ->assertOk()
        ->assertSee($match->name)
        ->assertDontSee($other->name);
});

it('creates a student', function () {
    $this->post('/students', [
        'nis' => '1234',
        'name' => 'Siswa Baru',
        'gender' => 'Laki-Laki',
        'major_id' => Major::first()->id,
        'class_id' => SchoolClass::first()->id,
    ])->assertRedirect('/students');

    expect(Student::where('nis', '1234')->value('name'))->toBe('Siswa Baru');
});

it('shows, edits, updates and deletes a student', function () {
    $student = Student::factory()->create();

    $this->get("/students/{$student->id}")->assertOk();
    $this->get("/students/{$student->id}/edit")->assertOk();

    $this->put("/students/{$student->id}", [
        'nis' => $student->nis,
        'name' => 'Nama Baru',
        'gender' => 'Perempuan',
        'major_id' => $student->major_id,
        'class_id' => $student->class_id,
    ])->assertRedirect('/students');

    expect($student->fresh()->name)->toBe('Nama Baru');

    $this->delete("/students/{$student->id}")->assertRedirect('/students');

    expect(Student::find($student->id))->toBeNull();
});
