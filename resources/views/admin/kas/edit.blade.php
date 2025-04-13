@extends('layouts.app')

@section('title', 'Edit Kas Masjid')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Kas Masjid</h1>
        <form action="{{ route('kas.update', $kasMasjid) }}" method="POST" id="kasForm">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="tanggal" class="block">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="border rounded w-full"
                    value="{{ $kasMasjid->tanggal->format('Y-m-d') }}" required>
                @error('tanggal')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kas_awal" class="block">Kas Awal</label>
                <input type="number" name="kas_awal" id="kas_awal" class="border rounded w-full"
                    value="{{ $kasMasjid->kas_awal }}" required>
                @error('kas_awal')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pemasukan" class="block">Pemasukan</label>
                <input type="number" name="pemasukan" id="pemasukan" class="border rounded w-full"
                    value="{{ $kasMasjid->pemasukan }}" required>
                @error('pemasukan')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pengeluaran" class="block">Pengeluaran</label>
                <input type="number" name="pengeluaran" id="pengeluaran" class="border rounded w-full"
                    value="{{ $kasMasjid->pengeluaran }}" required>
                @error('pengeluaran')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kas_akhir" class="block">Kas Akhir</label>
                <input type="text" name="kas_akhir" id="kas_akhir" class="border rounded w-full" readonly>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>

    <script>
        const kasAwal = document.getElementById('kas_awal');
        const pemasukan = document.getElementById('pemasukan');
        const pengeluaran = document.getElementById('pengeluaran');
        const kasAkhir = document.getElementById('kas_akhir');

        function calculateKasAkhir() {
            const awal = parseFloat(kasAwal.value) || 0;
            const masuk = parseFloat(pemasukan.value) || 0;
            const keluar = parseFloat(pengeluaran.value) || 0;
            kasAkhir.value = awal + masuk - keluar;
        }

        kasAwal.addEventListener('input', calculateKasAkhir);
        pemasukan.addEventListener('input', calculateKasAkhir);
        pengeluaran.addEventListener('input', calculateKasAkhir);

        // Initialize kas_akhir on page load
        calculateKasAkhir();
    </script>
@endsection