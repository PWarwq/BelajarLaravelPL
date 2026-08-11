@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Manajemen Guru
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Edit Guru
    </h1>

</div>

<div class="border border-[#E5E3DB] bg-white p-8">

    <form
        action="{{ route('teachers.update', ['id' => $id]) }}"
        method="POST"
        class="space-y-6"
    >

        @csrf
        @method('PUT')

        <div>
            <label for="nip" class="block text-sm font-medium text-[#16213A]">
                NIP
            </label>

            <input
                type="text"
                id="nip"
                name="nip"
                value="198501012024"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
        </div>

        <div>
            <label for="name" class="block text-sm font-medium text-[#16213A]">
                Nama Lengkap
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="Budi Santoso"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
        </div>

        <div>
            <label for="gender" class="block text-sm font-medium text-[#16213A]">
                Jenis Kelamin
            </label>

            <select
                id="gender"
                name="gender"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
                <option value="Laki-Laki" selected>Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div>
            <label for="subject" class="block text-sm font-medium text-[#16213A]">
                Mata Pelajaran
            </label>

            <input
                type="text"
                id="subject"
                name="subject"
                value="Akuntansi Dasar"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
        </div>

        <div>
            <label for="phone_number" class="block text-sm font-medium text-[#16213A]">
                No. Telepon
            </label>

            <input
                type="text"
                id="phone_number"
                name="phone_number"
                value="081234560001"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-[#16213A]">
                Status
            </label>

            <select
                id="status"
                name="status"
                class="mt-2 w-full border border-[#E5E3DB] px-4 py-3 text-sm"
            >
                <option value="Aktif" selected>Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a
                href="{{ route('teachers.index') }}"
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