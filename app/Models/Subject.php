<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Fillable('name')]
#[Table('subjects')]
class Subject extends Model
{
    public function students()
    {
        return $this->belongsToMany(
            Student::class,
            'student_subject',
            'student_id',
            'subject_id',
        );
    }
}
