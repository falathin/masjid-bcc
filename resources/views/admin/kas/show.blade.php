@extends('layouts.app')

@section('title', 'Detail Kas Masjid')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detail Kas Masjid</h1>
    <div class="mb-4">
        <strong>Tanggal:</strong> {{ $kasMasjid->tanggal->format('d-m-Y') }}
    </div>
    <div class="mb-4">
        <strong>Kas Awal:</strong> {{ $kasMasjid->kas_awal }}
    </div>
    <div class="mb-4">
        <strong>Pemasukan:</strong> {{ $kasMasjid->pemasukan }}
    </div>
    <div class="mb-4">
        <strong>Pengeluaran:</strong> {{ $kasMasjid->pengeluaran }}
    </div>
    <div class="mb-4">
        <strong>Kas Akhir:</strong> {{ $kasMasjid->kas_awal + $kasMasjid->pemasukan - $kasMasjid->pengeluaran }}
    </div>
    <a href="{{ route('kas.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Kembali</a>
</div>
@endsection