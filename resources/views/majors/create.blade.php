@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Manajemen Jurusan
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Tambah Jurusan
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-8">

    <form action="{{ route('majors.store') }}" method="POST" class="space-y-6">

        @csrf

        <div>
            <label for="code" class="block text-sm font-medium text-[#16213A]">
                Kode Jurusan
            </label>

            <input
                type="text"
                id="code"
                name="code"
                placeholder="Contoh: AKL"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm focus:border-[#A16207] focus:outline-none"
            >
        </div>

        <div>
            <label for="name" class="block text-sm font-medium text-[#16213A]">
                Nama Jurusan
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Contoh: Akuntansi dan Keuangan Lembaga"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm focus:border-[#A16207] focus:outline-none"
            >
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-[#16213A]">
                Deskripsi
            </label>

            <textarea
                id="description"
                name="description"
                rows="5"
                placeholder="Penjelasan singkat mengenai jurusan"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm focus:border-[#A16207] focus:outline-none"
            ></textarea>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a
                href="{{ route('majors.index') }}"
                class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
            >
                Batal
            </a>

            <button
                type="submit"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white"
            >
                Simpan
            </button>

        </div>

    </form>

</div>

@endsection