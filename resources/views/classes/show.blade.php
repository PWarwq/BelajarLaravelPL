@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <a
        href="{{ route('classes.index') }}"
        class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]"
    >
        &larr; Daftar Kelas
    </a>

</div>

<div class="border border-[#E5E3DB] bg-white">

    <div class="flex items-start justify-between border-b border-[#E5E3DB] bg-[#FCFBF8] px-8 py-6">

        <div>

            <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
                Lembar Kelas
            </p>

            <h1 class="font-display text-3xl font-semibold text-[#16213A]">
                XII AKL 1
            </h1>

            <p class="mt-1 font-mono text-xs text-slate-500">
                Kelas ID {{ $id }}
            </p>

        </div>

        <a
            href="{{ route('classes.edit', ['id' => $id]) }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white"
        >
            Ubah
        </a>

    </div>

    <dl class="divide-y divide-[#EFEDE6] text-sm">

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Nama Kelas
            </dt>

            <dd class="text-[#16213A]">
                XII AKL 1
            </dd>
        </div>

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Tingkat
            </dt>

            <dd class="text-[#16213A]">
                XII
            </dd>
        </div>

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Jurusan
            </dt>

            <dd class="text-[#16213A]">
                AKL
            </dd>
        </div>

        <div class="flex justify-between px-8 py-5">
            <dt class="font-medium text-slate-500">
                Wali Kelas
            </dt>

            <dd class="text-[#16213A]">
                Budi Santoso
            </dd>
        </div>

    </dl>

</div>

@endsection