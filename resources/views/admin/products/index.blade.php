@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
        <h1 class="text-4xl font-bold text-gray-800 flex items-center gap-2">
            Produk Koprotin
        </h1>
        <a href="{{ route('admin.products.create') }}" class="px-6 py-3 bg-green-600 text-white rounded-md font-semibold transition duration-300 hover:bg-green-500">
            Tambah Produk
        </a>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('admin.products.index') }}" class="mb-6 flex flex-col sm:flex-row sm:items-center gap-4">
        <input type="text" name="search" placeholder="Cari produk, nama, atau kategori..." value="{{ request('search') }}"
               class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300" />
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md font-semibold transition duration-300 hover:bg-blue-700">
            Search
        </button>
    </form>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-6">
            <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg animate__animated animate__fadeInDown">
                <p class="font-bold text-2xl">Sukses! 🎉</p>
                <p class="mt-2">Operasi berhasil dilakukan.</p>
            </div>
        </div>
    @endif

    <!-- Data Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-lg">
            <thead class="bg-blue-600 text-white uppercase text-sm">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Kategori</th>
                    <th class="py-3 px-6 text-left">Harga</th>
                    <th class="py-3 px-6 text-left">Deskripsi</th>
                    <th class="py-3 px-6 text-left">Gambar</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-base">
                @forelse($products as $product)
                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition-all">
                        <td class="py-3 px-6">{{ $product->id }}</td>
                        <td class="py-3 px-6">{{ $product->name }}</td>
                        <td class="py-3 px-6">{{ $product->category }}</td>
                        <td class="py-3 px-6">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="py-3 px-6">{{ Str::limit($product->description, 50) }}</td>
                        <td class="py-3 px-6">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                     class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-500 text-sm">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="py-3 px-6 space-x-2">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600 hover:underline">
                                Edit ✏️
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">
                                    Delete 🗑
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4 px-6 text-center text-gray-600">Tidak ada data produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $products->withQueryString()->links() }}
    </div>
</div>
@endsection