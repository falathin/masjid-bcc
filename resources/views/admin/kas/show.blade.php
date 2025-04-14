@extends('layouts.app')

@section('title', 'Detail Kas Masjid')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Detail Kas Masjid</h1>
    <div class="mb-4">
        <strong>Tanggal:</strong> {{ $kasMasjid->tanggal->format('d-m-Y') }}
    </div>
    <div class="mb-4">
        <strong>Kas Awal:</strong> Rp {{ number_format($kasMasjid->kas_awal, 0, ',', '.') }}
    </div>
    <div class="mb-4">
        <strong>Pemasukan:</strong> <span class="text-green-600">+Rp {{ number_format($kasMasjid->pemasukan, 0, ',', '.') }}</span>
    </div>
    <div class="mb-4">
        <strong>Pengeluaran:</strong> <span class="text-red-600">-Rp {{ number_format($kasMasjid->pengeluaran, 0, ',', '.') }}</span>
    </div>
    <div class="mb-4">
        <strong>Kas Akhir:</strong> Rp {{ number_format($kasMasjid->kas_awal + $kasMasjid->pemasukan - $kasMasjid->pengeluaran, 0, ',', '.') }}
    </div>
    <a href="{{ route('admin.kas.index') }}" class="text-blue-500 hover:underline">&larr; Kembali ke History Kas</a>
</div>
@endsection