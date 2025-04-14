@extends('layouts.app')

@section('title', 'Tambah Produk Koprotin ☕️🍪')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-6 text-center">Tambah Produk Koprotin ☕️🍪</h1>
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-2xl p-8">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Nama Produk -->
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Nama Produk 📛</label>
                <input type="text" name="name" id="name" placeholder="Contoh: Kopi Hitam" required
                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>

            <!-- Kategori -->
            <div>
                <label for="category" class="block text-lg font-medium text-gray-700">Kategori 📂</label>
                <select name="category" id="category" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">Pilih Kategori</option>
                    <option value="Minuman" {{ old('category') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Makanan" {{ old('category') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Lainnya" {{ old('category') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>

            <!-- Harga -->
            <div>
                <label for="price" class="block text-lg font-medium text-gray-700">Harga 💲</label>
                <input type="text" name="price" id="price" placeholder="Contoh: 5000" required
                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block text-lg font-medium text-gray-700">Deskripsi 📝</label>
                <textarea name="description" id="description" rows="4" placeholder="Deskripsi produk..."
                          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <!-- Gambar Produk -->
            <div>
                <label for="image" class="block text-lg font-medium text-gray-700">Gambar Produk (Opsional) 🖼</label>
                <input type="file" name="image" id="image" accept="image/*"
                       class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button type="submit"
                        class="px-8 py-4 bg-green-600 text-white rounded-md font-semibold transition duration-300 hover:bg-green-500">
                    Tambah Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Fungsi untuk memformat angka sesuai locale Indonesia tanpa Rp, misalnya: 10000 => 10.000
    function formatNumber(value) {
        return new Intl.NumberFormat('id-ID', {
            maximumFractionDigits: 0,
        }).format(value);
    }

    const priceInput = document.getElementById('price');
    priceInput.addEventListener('blur', function() {
        // Hilangkan karakter non-digit
        let value = this.value.replace(/\D/g, '');
        if(value) {
            this.value = formatNumber(value);
        }
    });
    priceInput.addEventListener('focus', function() {
        // Hapus separator untuk memudahkan pengeditan
        this.value = this.value.replace(/\D/g, '');
    });
</script>
@endsection