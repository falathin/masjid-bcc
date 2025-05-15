@extends('layouts.app')

@section('title', 'Tambah Kas Masjid')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md border border-emerald-100" data-aos="fade-up">
    <h1 class="text-2xl font-bold text-emerald-800 mb-6">➕ Tambah Kas Masjid</h1>

    <form action="{{ route('admin.kas.store') }}" method="POST" id="kasForm">
        @csrf

        <!-- Tanggal Transaksi -->
        <div class="mb-4">
            <label for="tanggal" class="block font-semibold mb-1 text-emerald-700">Tanggal Transaksi</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" required>
            @error('tanggal')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Saldo Awal -->
        <div class="mb-4">
            <label for="kas_awal" class="block font-semibold mb-1 text-emerald-700">Saldo Awal</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">Rp</span>
                <input type="text" name="kas_awal_display" id="kas_awal" class="w-full pl-10 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ old('kas_awal', isset($latestKas) ? $latestKas->kas_akhir : 0) }}">
            </div>
            @error('kas_awal')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Pemasukan -->
        <div class="mb-4">
            <label for="pemasukan" class="block font-semibold mb-1 text-emerald-700">Pemasukan</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">+ Rp</span>
                <input type="text" name="pemasukan_display" id="pemasukan" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ old('pemasukan') }}">
            </div>
            @error('pemasukan')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Pengeluaran -->
        <div class="mb-4">
            <label for="pengeluaran" class="block font-semibold mb-1 text-emerald-700">Pengeluaran</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-red-600">- Rp</span>
                <input type="text" name="pengeluaran_display" id="pengeluaran" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-red-500" placeholder="0" required value="{{ old('pengeluaran') }}">
            </div>
            @error('pengeluaran')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Saldo Akhir (Readonly, dihitung otomatis) -->
        <div class="mb-6">
            <label for="kas_akhir" class="block font-semibold mb-1 text-emerald-700">Saldo Akhir</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-600">Rp</span>
                <input type="text" name="kas_akhir" id="kas_akhir" class="w-full pl-10 pr-4 py-2 border rounded bg-gray-50 font-semibold" readonly>
            </div>
        </div>

        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition-colors duration-300">
            Simpan
        </button>

        <!-- Input Hidden untuk nilai numerik asli -->
        <input type="hidden" name="kas_awal" id="kas_awal_raw">
        <input type="hidden" name="pemasukan" id="pemasukan_raw">
        <input type="hidden" name="pengeluaran" id="pengeluaran_raw">
    </form>
</div>

<script>
    // Format angka ribuan (dengan tanda minus)
    function formatNumber(num) {
        const isNegative = num < 0;
        const absolute = Math.abs(num).toString();
        const formatted = absolute.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return isNegative ? '-' + formatted : formatted;
    }

    // Konversi string format rupiah menjadi angka murni (termasuk minus)
    function parseNumber(str) {
        const hasMinus = str.trim().startsWith('-');
        const digits = str.replace(/[^0-9]/g, '');
        const value = parseInt(digits) || 0;
        return hasMinus ? -value : value;
    }

    // Update saldo akhir dan hidden field
    function updateSaldo() {
        const kasAwal = parseNumber(document.getElementById('kas_awal').value);
        const pemasukan = parseNumber(document.getElementById('pemasukan').value);
        const pengeluaran = parseNumber(document.getElementById('pengeluaran').value);
        const saldoAkhir = kasAwal + pemasukan - pengeluaran;

        document.getElementById('kas_akhir').value = formatNumber(saldoAkhir);
        document.getElementById('kas_awal_raw').value = kasAwal;
        document.getElementById('pemasukan_raw').value = pemasukan;
        document.getElementById('pengeluaran_raw').value = pengeluaran;
    }

    // Pasang event listener pada input
    ['kas_awal', 'pemasukan', 'pengeluaran'].forEach(id => {
        const input = document.getElementById(id);
        input.addEventListener('input', function() {
            const raw = parseNumber(this.value);
            this.value = formatNumber(raw);
            updateSaldo();
        });
    });

    // Set tanggal otomatis
    document.getElementById('tanggal').value = new Date().toISOString().split('T')[0];
    updateSaldo();
</script>
@endsection