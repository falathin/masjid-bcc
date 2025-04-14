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

        <!-- Saldo Awal -->
        <div class="mb-4">
            <label for="kas_awal" class="block font-semibold mb-1 text-emerald-700">Saldo Awal</label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">Rp</span>
                <input type="text" name="kas_awal" id="kas_awal" class="w-full pl-10 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ old('kas_awal', $kasMasjid->kas_awal) }}">
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
                <input type="text" name="pemasukan" id="pemasukan" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-emerald-500" placeholder="0" required value="{{ old('pemasukan', $kasMasjid->pemasukan) }}">
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
                <input type="text" name="pengeluaran" id="pengeluaran" class="w-full pl-12 pr-4 py-2 border rounded focus:ring-2 focus:ring-red-500" placeholder="0" required value="{{ old('pengeluaran', $kasMasjid->pengeluaran) }}">
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
                <input type="text" name="kas_akhir" id="kas_akhir" class="w-full pl-10 pr-4 py-2 border rounded bg-gray-50 font-semibold" readonly value="{{ number_format($kasMasjid->kas_awal + $kasMasjid->pemasukan - $kasMasjid->pengeluaran, 0, ',', '.') }}">
            </div>
        </div>

        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition duration-300">
            Perbarui Kas
        </button>

        <!-- Input Hidden untuk menyimpan nilai murni -->
        <input type="hidden" name="kas_awal" id="kas_awal_raw" value="{{ $kasMasjid->kas_awal }}">
        <input type="hidden" name="pemasukan" id="pemasukan_raw" value="{{ $kasMasjid->pemasukan }}">
        <input type="hidden" name="pengeluaran" id="pengeluaran_raw" value="{{ $kasMasjid->pengeluaran }}">
    </form>
</div>

<script>
    // Fungsi format angka dengan separator ribuan (Format Indonesia, misal: 1000000 -> 1.000.000)
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Fungsi untuk mengonversi string format rupiah menjadi angka murni
    function parseNumber(str) {
        return parseInt(str.replace(/[^0-9]/g, '')) || 0;
    }

    // Fungsi untuk meng-update saldo akhir dan mengisi hidden field
    function updateSaldo() {
        const kasAwal = parseNumber(document.getElementById('kas_awal').value);
        const pemasukan = parseNumber(document.getElementById('pemasukan').value);
        const pengeluaran = parseNumber(document.getElementById('pengeluaran').value);
        
        const saldoAkhir = kasAwal + pemasukan - pengeluaran;
        document.getElementById('kas_akhir').value = formatNumber(saldoAkhir);
        
        // Update hidden fields dengan nilai murni
        document.getElementById('kas_awal_raw').value = kasAwal;
        document.getElementById('pemasukan_raw').value = pemasukan;
        document.getElementById('pengeluaran_raw').value = pengeluaran;
    }

    // Tambahkan event listener untuk input yang diformat
    document.querySelectorAll('#kas_awal, #pemasukan, #pengeluaran').forEach(input => {
        input.addEventListener('input', function () {
            let value = parseNumber(this.value);
            this.value = formatNumber(value);
            updateSaldo();
        });
    });

    // Set tanggal otomatis jika belum diisi (untuk create, di edit sudah terisi)
    window.addEventListener('load', function() {
        const tanggalInput = document.getElementById('tanggal');
        if (!tanggalInput.value) {
            tanggalInput.value = new Date().toISOString().split('T')[0];
        }
    });
</script>
@endsection
