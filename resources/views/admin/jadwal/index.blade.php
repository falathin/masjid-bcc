@extends('layouts.app')

@section('title', 'History Jadwal Jumat')

@section('content')
<div class="max-w-6xl mx-auto p-4 sm:p-6 space-y-6" data-aos="fade-up">
    <!-- Header -->
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
        <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
            📆 History Jadwal Jumat
        </h1>

        <!-- Tombol Tambah -->
        <a href="{{ route('admin.jadwal.create') }}"
            class="w-full sm:w-auto px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow transition text-center">
            + Tambah Jadwal
        </a>
    </div>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('admin.jadwal.index') }}" class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Imam -->
        <div>
            <label for="imam" class="text-sm font-medium text-gray-700">Cari Imam</label>
            <input type="text" name="imam" id="imam" placeholder="Imam"
                value="{{ request('imam') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Muadzin -->
        <div>
            <label for="muadzin" class="text-sm font-medium text-gray-700">Cari Muadzin</label>
            <input type="text" name="muadzin" id="muadzin" placeholder="Muadzin"
                value="{{ request('muadzin') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Khotib -->
        <div>
            <label for="khotib" class="text-sm font-medium text-gray-700">Cari Khotib</label>
            <input type="text" name="khotib" id="khotib" placeholder="Khotib"
                value="{{ request('khotib') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Tanggal -->
        <div>
            <label for="tanggal" class="text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="{{ request('tanggal') }}"
                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Tombol Cari -->
        <div class="sm:col-span-2 md:col-span-3 lg:col-span-1 flex items-end">
            <button type="submit"
                class="w-full px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition">
                🔍 Cari
            </button>
        </div>
    </form>

    <!-- Alert -->
    @if(session('success'))
        <div class="p-4 bg-green-100 border border-green-300 rounded text-green-700" data-aos="fade-up" data-aos-delay="100">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Data -->
    <div class="overflow-auto bg-white rounded-lg shadow" data-aos="fade-up" data-aos-delay="200">
        <table class="min-w-full table-auto text-sm text-left whitespace-nowrap">
            <thead class="bg-emerald-600 text-white">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Imam</th>
                    <th class="px-6 py-3">Muadzin</th>
                    <th class="px-6 py-3">Khotib</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwal as $j)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">{{ $j->tanggal->format('d-m-Y') }}</td>
                        <td class="px-6 py-4">{{ $j->imam }}</td>
                        <td class="px-6 py-4">{{ $j->muadzin }}</td>
                        <td class="px-6 py-4">{{ $j->khotib }}</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <a href="{{ route('admin.jadwal.edit', $j) }}" class="text-indigo-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.jadwal.destroy', $j) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada data jadwal.</td>
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