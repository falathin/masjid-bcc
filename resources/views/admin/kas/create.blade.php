@extends('layouts.app')

@section('title', 'Tambah Transaksi Kas Masjid')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md border border-emerald-100">
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="inline-block p-3 bg-emerald-100 rounded-full">
            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-emerald-800 mt-4">📘 Catatan Keuangan Masjid</h1>
        <p class="text-sm text-gray-500">Transparansi dan Amanah dalam Pengelolaan Dana</p>
    </div>

    <form action="{{ route('kas.store') }}" method="POST" id="kasForm">
        @csrf
        
        <!-- Input Hidden untuk nilai asli -->
        <input type="hidden" name="kas_awal" id="kas_awal_raw">
        <input type="hidden" name="pemasukan" id="pemasukan_raw">
        <input type="hidden" name="pengeluaran" id="pengeluaran_raw">

        <div class="space-y-6">
            <!-- Tanggal -->
            <div>
                <label class="block text-sm font-medium text-emerald-700 mb-2">Tanggal Transaksi</label>
                <div class="relative">
                    <input type="date" id="tanggal" name="tanggal" required
                        class="w-full px-4 py-2 border border-emerald-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        value="{{ old('tanggal') }}">
                    @error('tanggal')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Saldo Awal -->
            <div>
                <label class="block text-sm font-medium text-emerald-700 mb-2">Saldo Awal</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">Rp</span>
                    <input type="text" id="kas_awal" 
                        class="w-full pl-10 pr-4 py-2 border border-emerald-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        placeholder="0"
                        value="{{ old('kas_awal') }}">
                    @error('kas_awal')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Pemasukan -->
            <div>
                <label class="block text-sm font-medium text-emerald-700 mb-2">Pemasukan</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-emerald-600">+ Rp</span>
                    <input type="text" id="pemasukan" 
                        class="w-full pl-10 pr-4 py-2 border border-emerald-200 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        placeholder="0"
                        value="{{ old('pemasukan') }}">
                    @error('pemasukan')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Pengeluaran -->
            <div>
                <label class="block text-sm font-medium text-emerald-700 mb-2">Pengeluaran</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-red-600">- Rp</span>
                    <input type="text" id="pengeluaran" 
                        class="w-full pl-10 pr-4 py-2 border border-red-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500"
                        placeholder="0"
                        value="{{ old('pengeluaran') }}">
                    @error('pengeluaran')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Saldo Akhir -->
            <div>
                <label class="block text-sm font-medium text-emerald-700 mb-2">Saldo Akhir</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-600">Rp</span>
                    <input type="text" id="kas_akhir" 
                        class="w-full pl-10 pr-4 py-2 border border-blue-200 rounded-lg bg-gray-50 font-semibold"
                        readonly>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="pt-6">
                <button type="submit" 
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-colors flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    Simpan Transaksi
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    // Format angka dengan separator ribuan
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Parse angka dari format ribuan
    function parseNumber(str) {
        return parseInt(str.replace(/\./g, '')) || 0;
    }

    // Update saldo akhir
    function updateSaldo() {
        const kasAwal = parseNumber(document.getElementById('kas_awal').value);
        const pemasukan = parseNumber(document.getElementById('pemasukan').value);
        const pengeluaran = parseNumber(document.getElementById('pengeluaran').value);
        
        const saldoAkhir = kasAwal + pemasukan - pengeluaran;
        document.getElementById('kas_akhir').value = formatNumber(saldoAkhir);
        
        // Update hidden fields
        document.getElementById('kas_awal_raw').value = kasAwal;
        document.getElementById('pemasukan_raw').value = pemasukan;
        document.getElementById('pengeluaran_raw').value = pengeluaran;
    }

    // Format input saat mengetik
    document.querySelectorAll('#kas_awal, #pemasukan, #pengeluaran').forEach(input => {
        input.addEventListener('input', function(e) {
            let value = this.value.replace(/\./g, '');
            if(!isNaN(value)) {
                this.value = formatNumber(value);
                updateSaldo();
            }
        });
    });

    // Set tanggal otomatis
    document.getElementById('tanggal').value = new Date().toISOString().split('T')[0];
</script>

<style>
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(0.5);
    }
    input[type="date"]::-webkit-calendar-picker-indicator:hover {
        filter: invert(0.3);
    }
</style>
@endsection