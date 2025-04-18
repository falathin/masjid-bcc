@extends('layouts.app')

@section('title', 'Tambah Jadwal Jumat')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md border border-emerald-100" data-aos="fade-up">
    <h1 class="text-2xl font-bold text-emerald-800 mb-6">➕ Tambah Jadwal Jumat</h1>

    <form action="{{ route('admin.jadwal.store') }}" method="POST" id="jadwalForm" class="space-y-6">
        @csrf

        <!-- Tanggal (default otomatis ke hari Jumat dalam minggu ini) -->
        <div class="mb-4">
            <label for="tanggal" class="block font-semibold mb-1 text-emerald-700">Tanggal Jadwal</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" required>
            @error('tanggal')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Imam -->
        <div class="mb-4">
            <label for="imam" class="block font-semibold mb-1 text-emerald-700">Imam</label>
            <input type="text" name="imam" id="imam" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" placeholder="Masukkan nama imam" required>
            @error('imam')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Muadzin -->
        <div class="mb-4">
            <label for="muadzin" class="block font-semibold mb-1 text-emerald-700">Muadzin & Bilal</label>
            <input type="text" name="muadzin" id="muadzin" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" placeholder="Masukkan nama muadzin & bilal" required>
            @error('muadzin')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

                <!-- Khotib -->
        <div class="mb-4">
            <label for="khotib" class="block font-semibold mb-1 text-emerald-700">Khotib</label>
            <input type="text" name="khotib" id="khotib" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" placeholder="Masukkan nama khotib & bilal" required>
            @error('khotib')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors duration-300">
            Simpan Jadwal
        </button>
    </form>
</div>

<script>
    // Fungsi untuk menghitung tanggal Jumat pada minggu ini atau minggu depan
    function getNextFriday() {
        const today = new Date();
        // Dapatkan hari ke berapa (0 = Minggu, 1 = Senin, ... 5 = Jumat, 6 = Sabtu)
        const dayOfWeek = today.getDay();
        // Jika hari ini sudah Jumat, gunakan hari ini; jika belum, hitung selisih ke Jumat
        const diffToFriday = dayOfWeek <= 5 ? (5 - dayOfWeek) : (12 - dayOfWeek);
        const nextFriday = new Date(today);
        nextFriday.setDate(today.getDate() + diffToFriday);
        return nextFriday.toISOString().split('T')[0];
    }

    // Set tanggal input ke hari Jumat otomatis jika tidak ada input dari pengguna
    window.addEventListener('load', function() {
        const tanggalInput = document.getElementById('tanggal');
        if (!tanggalInput.value) {
            tanggalInput.value = getNextFriday();
        }
    });
</script>
@endsection