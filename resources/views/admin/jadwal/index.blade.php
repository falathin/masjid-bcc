@extends('layouts.app')

@section('title', 'History Jadwal Jumat')

@section('content')
<div class="max-w-6xl mx-auto p-6 space-y-6" data-aos="fade-up">
    <!-- Header: Judul & Aksi -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
        <!-- Judul -->
        <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
            📆 History Jadwal Jumat
        </h1>
        <!-- Form Pencarian & Tombol Tambah -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-4 w-full sm:w-auto">
            <!-- Form Pencarian -->
            <form method="GET" action="{{ route('admin.jadwal.index') }}" class="flex flex-wrap sm:flex-nowrap items-center gap-3">
                <div class="flex flex-col">
                    <label for="imam" class="text-sm font-medium text-gray-700">Cari Imam</label>
                    <input type="text" name="imam" id="imam" placeholder="Cari imam..."
                        value="{{ request('imam') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 sm:w-44">
                </div>
                <div class="flex flex-col">
                    <label for="muadzin" class="text-sm font-medium text-gray-700">Cari Muadzin</label>
                    <input type="text" name="muadzin" id="muadzin" placeholder="Cari muadzin..."
                        value="{{ request('muadzin') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 sm:w-44">
                </div>
                <div class="flex flex-col">
                    <label for="tanggal" class="text-sm font-medium text-gray-700">Tanggal Jadwal</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ request('tanggal') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 sm:w-44">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm font-medium text-gray-700 mb-1">Cari</label>
                    <button type="submit"
                        class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition w-full sm:w-auto">
                        🔍
                    </button>
                </div>
            </form>
            <!-- Tombol Tambah Jadwal -->
            <a href="{{ route('admin.jadwal.create') }}"
               class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow transition text-center w-full sm:w-auto">
                + Tambah Jadwal
            </a>
        </div>
    </div>

    <!-- Alert Sukses -->
    @if(session('success'))
        <div class="p-4 bg-green-100 border border-green-300 rounded text-green-700" data-aos="fade-up" data-aos-delay="100">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Data Jadwal -->
    <div class="overflow-x-auto bg-white rounded-lg shadow" data-aos="fade-up" data-aos-delay="200">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-emerald-600 text-white">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Imam</th>
                    <th class="px-6 py-3">Muadzin</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwal as $j)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">{{ $j->tanggal->format('d-m-Y') }}</td>
                        <td class="px-6 py-4">{{ $j->imam }}</td>
                        <td class="px-6 py-4">{{ $j->muadzin }}</td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="{{ route('admin.jadwal.edit', $j) }}" class="text-indigo-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.jadwal.destroy', $j) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada data jadwal.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pt-4" data-aos="fade-up" data-aos-delay="300">
        {{ $jadwal->withQueryString()->links() }}
    </div>
</div>
@endsection