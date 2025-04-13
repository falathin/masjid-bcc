@extends('layouts.app')

@section('title', 'Daftar Kas Masjid')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">📊 Daftar Kas Masjid</h1>
        <a href="{{ route('kas.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
            + Tambah Kas
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-300 rounded text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-6 py-3">Tanggal</th>
                    <th class="px-6 py-3">Kas Awal</th>
                    <th class="px-6 py-3">Pemasukan</th>
                    <th class="px-6 py-3">Pengeluaran</th>
                    <th class="px-6 py-3">Kas Akhir</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kasMasjid as $kas)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-6 py-4">{{ $kas->tanggal->format('d-m-Y') }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($kas->kas_awal, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded">
                                +Rp {{ number_format($kas->pemasukan, 0, ',', '.') }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                -Rp {{ number_format($kas->pengeluaran, 0, ',', '.') }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-semibold text-blue-700">
                            Rp {{ number_format($kas->kas_awal + $kas->pemasukan - $kas->pengeluaran, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="{{ route('kas.edit', $kas) }}" class="text-indigo-600 hover:underline">Edit</a>
                            <form action="{{ route('kas.destroy', $kas) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:underline">
                                    Hapus
                                </button>
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
</div>
@endsection