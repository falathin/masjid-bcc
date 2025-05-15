@extends('layouts.app')

@section('title', 'Edit Kas Masjid')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md border border-emerald-100">
    <h1 class="text-2xl font-bold text-emerald-800 mb-6">✏️ Edit Kas Masjid</h1>

    <form action="{{ route('admin.kas.update', $kasMasjid->id) }}" method="POST" id="kasForm">
        @csrf
        @method('PUT')

        <!-- Tanggal Transaksi -->
        <div class="mb-4">
            <label for="tanggal" class="block font-semibold mb-1 text-emerald-700">Tanggal Transaksi</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-emerald-500" required value="{{ old('tanggal', $kasMasjid->tanggal->format('Y-m-d')) }}">
            @error('tanggal')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Saldo Awal (display) -->
        <div class="mb-4">
            <label for="kas_awal" class="block font-semibold mb-1 text-emerald-700">Saldo Awal</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">Rp</span>
                <input type="text" name="kas_awal_display" id="kas_awal" class="w-full pl-10 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ number_format(old('kas_awal', $kasMasjid->kas_awal), 0, ',', '.') }}">
            </div>
            @error('kas_awal')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Pemasukan (display) -->
        <div class="mb-4">
            <label for="pemasukan" class="block font-semibold mb-1 text-emerald-700">Pemasukan</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">+ Rp</span>
                <input type="text" name="pemasukan_display" id="pemasukan" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ number_format(old('pemasukan', $kasMasjid->pemasukan), 0, ',', '.') }}">
            </div>
            @error('pemasukan')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Pengeluaran (display) -->
        <div class="mb-4">
            <label for="pengeluaran" class="block font-semibold mb-1 text-emerald-700">Pengeluaran</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-red-600">- Rp</span>
                <input type="text" name="pengeluaran_display" id="pengeluaran" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-red-500" placeholder="0" required value="{{ number_format(old('pengeluaran', $kasMasjid->pengeluaran), 0, ',', '.') }}">
            </div>
            @error('pengeluaran')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Saldo Akhir (Readonly) -->
        <div class="mb-6">
            <label for="kas_akhir" class="block font-semibold mb-1 text-emerald-700">Saldo Akhir</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-600">Rp</span>
                <input type="text" name="kas_akhir" id="kas_akhir" class="w-full pl-10 pr-4 py-2 border rounded bg-gray-50 font-semibold" readonly>
            </div>
        </div>

        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition duration-300">
            Perbarui Kas
        </button>

        <!-- Hidden raw values -->
        <input type="hidden" name="kas_awal" id="kas_awal_raw" value="{{ $kasMasjid->kas_awal }}">
        <input type="hidden" name="pemasukan" id="pemasukan_raw" value="{{ $kasMasjid->pemasukan }}">
        <input type="hidden" name="pengeluaran" id="pengeluaran_raw" value="{{ $kasMasjid->pengeluaran }}">
    </form>
</div>

<script>
    function formatNumber(num) {
        const isNeg = num < 0;
        const abs = Math.abs(num).toString();
        const formatted = abs.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return isNeg ? '-' + formatted : formatted;
    }

    function parseNumber(str) {
        const neg = str.trim().startsWith('-');
        const digits = str.replace(/[^0-9]/g, '');
        const val = parseInt(digits) || 0;
        return neg ? -val : val;
    }

    function updateSaldo() {
        const awal = parseNumber(document.getElementById('kas_awal').value);
        const masuk = parseNumber(document.getElementById('pemasukan').value);
        const keluar = parseNumber(document.getElementById('pengeluaran').value);
        const akhir = awal + masuk - keluar;

        document.getElementById('kas_akhir').value = formatNumber(akhir);
        document.getElementById('kas_awal_raw').value = awal;
        document.getElementById('pemasukan_raw').value = masuk;
        document.getElementById('pengeluaran_raw').value = keluar;
    }

    ['kas_awal', 'pemasukan', 'pengeluaran'].forEach(id => {
        const el = document.getElementById(id);
        el.addEventListener('input', function() {
            const raw = parseNumber(this.value);
            this.value = formatNumber(raw);
            updateSaldo();
        });
    });

    window.addEventListener('load', () => {
        document.getElementById('tanggal').value ||= new Date().toISOString().split('T')[0];
        updateSaldo();
    });
</script>
@endsection