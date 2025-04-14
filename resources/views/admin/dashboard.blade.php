@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
@php
    use App\Models\Product;
    use App\Models\Article;
    use App\Models\Contact;
    use App\Models\JadwalJumat;
    use App\Models\KasMasjid;

    $productCount = Product::count();
    $articleCount = Article::count();
    $contactCount = Contact::count();
    $jadwalCount  = JadwalJumat::count();
    $kasCount     = KasMasjid::count();
@endphp

<div class="container mx-auto py-12" data-aos="fade-up">
    <h1 class="text-5xl font-extrabold text-center text-white mb-12 bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-xl shadow-lg">📊 Dashboard Admin Masjid Al-Ikhlas</h1>
    
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card Produk -->
        <a href="{{ route('admin.products.index') }}" class="block bg-gradient-to-br from-blue-200 to-blue-400 rounded-2xl shadow-xl p-6 hover:scale-105 transform transition duration-300">
            <div class="flex items-center space-x-4">
                <div class="text-4xl">📦</div>
                <div>
                    <p class="text-sm text-gray-700">Total Produk</p>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $productCount }}</p>
                </div>
            </div>
            <p class="mt-4 text-gray-800">Lihat detail produk Koprotin.</p>
        </a>

        <!-- Card Artikel -->
        <a href="{{ route('admin.article.index') }}" class="block bg-gradient-to-br from-green-200 to-green-400 rounded-2xl shadow-xl p-6 hover:scale-105 transform transition duration-300">
            <div class="flex items-center space-x-4">
                <div class="text-4xl">📰</div>
                <div>
                    <p class="text-sm text-gray-700">Total Artikel</p>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $articleCount }}</p>
                </div>
            </div>
            <p class="mt-4 text-gray-800">Lihat artikel & berita masjid.</p>
        </a>

        <!-- Card Kontak -->
        <a href="{{ route('admin.contacts.index') }}" class="block bg-gradient-to-br from-purple-200 to-purple-400 rounded-2xl shadow-xl p-6 hover:scale-105 transform transition duration-300">
            <div class="flex items-center space-x-4">
                <div class="text-4xl">📬</div>
                <div>
                    <p class="text-sm text-gray-700">Total Kontak</p>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $contactCount }}</p>
                </div>
            </div>
            <p class="mt-4 text-gray-800">Lihat pesan & kontak dari pengunjung.</p>
        </a>

        <!-- Card Jadwal Jumat -->
        <a href="{{ route('admin.jadwal.index') }}" class="block bg-gradient-to-br from-red-200 to-red-400 rounded-2xl shadow-xl p-6 hover:scale-105 transform transition duration-300">
            <div class="flex items-center space-x-4">
                <div class="text-4xl">🕌</div>
                <div>
                    <p class="text-sm text-gray-700">Jadwal Jumat</p>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $jadwalCount }}</p>
                </div>
            </div>
            <p class="mt-4 text-gray-800">Lihat data jadwal Jumat masjid.</p>
        </a>

        <!-- Card Kas Masjid -->
        <a href="{{ route('admin.kas.index') }}" class="block bg-gradient-to-br from-yellow-200 to-yellow-400 rounded-2xl shadow-xl p-6 hover:scale-105 transform transition duration-300">
            <div class="flex items-center space-x-4">
                <div class="text-4xl">💰</div>
                <div>
                    <p class="text-sm text-gray-700">Kas Masjid</p>
                    <p class="text-3xl font-extrabold text-gray-900">{{ $kasCount }}</p>
                </div>
            </div>
            <p class="mt-4 text-gray-800">Lihat data keuangan masjid.</p>
        </a>
    </div>
</div>
@endsection