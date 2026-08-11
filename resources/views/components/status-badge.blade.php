@php
    $classes = match ($status) {
        'Aktif' => 'bg-green-50 text-green-700 border-green-200',
        'Tidak Aktif' => 'bg-red-50 text-red-700 border-red-200',
        default => 'bg-slate-50 text-slate-600 border-slate-200',
    };
@endphp

<span class="inline-flex items-center border px-3 py-1 text-xs font-medium {{ $classes }}">
    {{ $status }}
</span>