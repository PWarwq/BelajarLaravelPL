@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <a
        href="{{ route('majors.index') }}"
        class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]"
    >
        &larr; Daftar Jurusan
    </a>
</div>

<div class="border border-[#E5E3DB] bg-white">

    <div class="border-b border-[#E5E3DB] bg-[#FCFBF8] px-8 py-6">

        <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
            Detail Jurusan
        </p>

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            Akuntansi dan Keuangan Lembaga
        </h1>

        <p class="mt-1 font-mono text-xs text-slate-500">
            Kode: AKL
        </p>

    </div>

    <dl class="divide-y divide-[#EFEDE6] text-sm">

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Kode Jurusan
            </dt>

            <dd class="font-mono text-[#16213A]">
                AKL
            </dd>
        </div>

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Nama Jurusan
            </dt>

            <dd class="text-[#16213A]">
                Akuntansi dan Keuangan Lembaga
            </dd>
        </div>

        <div class="px-8 py-5">
            <dt class="mb-2 font-medium text-slate-500">
                Deskripsi
            </dt>

            <dd class="leading-7 text-[#16213A]">
                Program keahlian yang membekali murid dengan kompetensi
                pencatatan dan pelaporan keuangan.
            </dd>
        </div>

    </dl>

    <div class="flex justify-end gap-4 border-t border-[#EFEDE6] px-8 py-5">

        <a
            href="{{ route('majors.index') }}"
            class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
        >
            Kembali
        </a>

        <a
            href="{{ route('majors.edit', ['id' => 1]) }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white"
        >
            Ubah
        </a>

    </div>

</div>

@endsection