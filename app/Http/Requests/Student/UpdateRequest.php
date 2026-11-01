<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'size:4', Rule::unique('students', 'nis')->ignore($this->route('student'))],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'major_id' => ['required', 'integer', 'exists:majors,id'],
            'class_id' => ['required', 'integer', 'exists:classes,id'],
        ];
    }

    public function attributes()
    {
        return [
            'nis' => 'Nomor Induk Siswa',
            'name' => 'Nama Lengkap',
            'gender' => 'Jenis Kelamin',
            'class_id' => 'Kelas',
            'major_id' => 'Jurusan',
        ];
    }
}
