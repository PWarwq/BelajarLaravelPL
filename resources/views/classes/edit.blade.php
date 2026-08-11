@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Manajemen Kelas
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Edit Kelas
    </h1>

</div>

<div class="border border-[#E5E3DB] bg-white p-8">

    <form
        action="{{ route('classes.update', ['id' => $id]) }}"
        method="POST"
        class="space-y-6"
    >

        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-[#16213A]">
                Nama Kelas
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="XII AKL 1"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
        </div>

        <div>
            <label for="grade" class="block text-sm font-medium text-[#16213A]">
                Tingkat
            </label>

            <select
                id="grade"
                name="grade"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII" selected>XII</option>
            </select>
        </div>

        <div>
            <label for="major_id" class="block text-sm font-medium text-[#16213A]">
                Jurusan
            </label>

            <select
                id="major_id"
                name="major_id"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >

                @foreach ($majors as $major)

                    <option value="{{ $major['id'] }}">
                        {{ $major['code'] }} - {{ $major['name'] }}
                    </option>

                @endforeach

            </select>
        </div>

        <div>
            <label for="teacher_id" class="block text-sm font-medium text-[#16213A]">
                Wali Kelas
            </label>

            <select
                id="teacher_id"
                name="teacher_id"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >

                @foreach ($teachers as $teacher)

                    <option value="{{ $teacher['id'] }}">
                        {{ $teacher['name'] }}
                    </option>

                @endforeach

            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a
                href="{{ route('classes.index') }}"
                class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
            >
                Batal
            </a>

            <button
                type="submit"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white"
            >
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection