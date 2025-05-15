@extends('layouts.app')

@section('title', 'History Kas Masjid')

@section('content')
    <div class="max-w-6xl mx-auto p-6" data-aos="fade-up">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
                📊 History Kas Masjid
            </h1>
            <a href="{{ route('admin.kas.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
                + Tambah Kas
            </a>
        </div>

        <!-- Filter & Search Form -->
        <form method="GET" action="{{ route('admin.kas.index') }}" class="mb-8 p-6 bg-white rounded-xl shadow space-y-6" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Filter Data Kas</h2>

            <div class="flex flex-col md:flex-row md:items-end md:gap-6 space-y-4 md:space-y-0">
                <!-- Dari Tanggal -->
                <div class="flex-1">
                    <label for="tanggal_start" class="block text-sm font-semibold text-gray-700 mb-2">
                        Dari Tanggal <span class="text-xs text-gray-500">(default: hari ini)</span>
                    </label>
                    <input type="date" name="tanggal_start" id="tanggal_start" value="{{ request('tanggal_start') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150">
                </div>

                <!-- Sampai Tanggal -->
                <div class="flex-1">
                    <label for="tanggal_end" class="block text-sm font-semibold text-gray-700 mb-2">
                        Sampai Tanggal <span class="text-xs text-gray-500">(default: besok)</span>
                    </label>
                    <input type="date" name="tanggal_end" id="tanggal_end" value="{{ request('tanggal_end') }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150">
                </div>

                <!-- Tombol Filter -->
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2 invisible">Filter</label>
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2.5 rounded-lg shadow-md transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 13.414V19a1 1 0 01-1.447.894l-4-2A1 1 0 019 17v-3.586L3.293 6.707A1 1 0 013 6V4z" />
                        </svg>
                        Filter
                    </button>
                </div>
            </div>
        </form>

        <script>
            // Set default dates: if the start date is not provided, set it to today.
            // If the end date is not provided, set it to tomorrow.
            window.addEventListener('load', function() {
                const tanggalStartInput = document.getElementById('tanggal_start');
                const tanggalEndInput = document.getElementById('tanggal_end');
                const today = new Date();
                const tomorrow = new Date();
                tomorrow.setDate(today.getDate() + 1);
                if (!tanggalStartInput.value) {
                    tanggalStartInput.value = today.toISOString().split('T')[0];
                }
                if (!tanggalEndInput.value) {
                    tanggalEndInput.value = tomorrow.toISOString().split('T')[0];
                }
            });

            // Optionally: Format minimal and maksimal kas inputs as plain numbers.
            // You may incorporate a custom formatting function if desired.
            function parseNumber(value) {
                return parseInt(value.replace(/[^0-9]/g, '')) || 0;
            }
            // Event listeners for live formatting (optional; remove if you want default input type="number")
            document.getElementById('min_kas').addEventListener('input', function() {
                let value = parseNumber(this.value);
                this.value = value;
            });
            document.getElementById('max_kas').addEventListener('input', function() {
                let value = parseNumber(this.value);
                this.value = value;
            });
        </script>


        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-300 rounded text-green-700" data-aos="fade-up"
                data-aos-delay="200">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow" data-aos="fade-up" data-aos-delay="300">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-emerald-600 text-white">
                    <tr>
                        <th class="px-6 py-3">Tanggal</th>
                        <th class="px-6 py-3">Kas Awal</th>
                        <th class="px-6 py-3">Pemasukan</th>
                        <th class="px-6 py-3">Pengeluaran</th>
                        <th class="px-6 py-3">Kas Akhir</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody id="kasTableBody">
                    @forelse($kasMasjid as $kas)
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-6 py-4">{{ $kas->tanggal->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 format-currency" data-value="{{ $kas->kas_awal }}">Rp
                                {{ number_format($kas->kas_awal, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded format-currency"
                                    data-value="{{ $kas->pemasukan }}">
                                    +Rp {{ number_format($kas->pemasukan, 0, ',', '.') }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded format-currency"
                                    data-value="{{ $kas->pengeluaran }}">
                                    -Rp {{ number_format($kas->pengeluaran, 0, ',', '.') }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-semibold text-blue-700 format-currency"
                                data-value="{{ $kas->kas_awal + $kas->pemasukan - $kas->pengeluaran }}">
                                Rp {{ number_format($kas->kas_awal + $kas->pemasukan - $kas->pengeluaran, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('admin.kas.edit', $kas) }}"
                                    class="text-indigo-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.kas.destroy', $kas) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin ingin menghapus data kas ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada data kas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6" data-aos="fade-up" data-aos-delay="400">
            {{ $kasMasjid->links() }}
        </div>
    </div>

    <!-- Optional JavaScript for client-side live search filtering -->
    <script>
        const searchInput = document.getElementById('searchKas');
        searchInput.addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#kasTableBody tr');
            rows.forEach(row => {
                row.style.display = row.innerText.toLowerCase().includes(filter) ? '' : 'none';
            });
        });

        // Use Intl.NumberFormat for any client-side reformatting if needed (already used on server-side)
        const currencyFormatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            maximumFractionDigits: 0,
        });

        // (Optional) Update each element with the class "format-currency" based on data-value
        document.querySelectorAll('.format-currency').forEach(element => {
            const rawValue = parseInt(element.getAttribute('data-value')) || 0;
            element.textContent = currencyFormatter.format(rawValue);
        });
    </script>
@endsection