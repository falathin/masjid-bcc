@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div data-aos="fade-up">
  <!-- Section: Statistik Widget -->
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Statistik Jamaah</h3>
      <p class="text-gray-600">Menampilkan data statistik jumlah jamaah dan perkembangan kehadiran.</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemasukan Infaq</h3>
      <p class="text-gray-600">Data pemasukan infaq harian, bulanan, dan tahunan masjid.</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Kegiatan Masjid</h3>
      <p class="text-gray-600">Daftar kegiatan terbaru dan mendatang di masjid.</p>
    </div>
  </div>

  <!-- Section: Halaman Kosong untuk Pengembangan -->
  <div class="bg-white rounded-lg shadow p-6 mb-8" data-aos="fade-up" data-aos-delay="200">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Halaman Kosong</h3>
    <p class="text-gray-600">
      Selamat datang di Dashboard Admin Masjid Al-Ikhlas. Gunakan halaman ini sebagai dasar untuk
      menambahkan modul-modul administrasi seperti monitoring infaq, data jamaah, dan kegiatan masjid.
      Kembangkan fitur-fitur yang diperlukan agar operasional masjid berjalan dengan baik.
    </p>
  </div>

  <!-- Section: Widget Tambahan -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="300">
    <div class="bg-blue-50 p-4 rounded-lg shadow">
      <h4 class="font-medium text-blue-900 mb-2">Widget 1</h4>
      <p class="text-blue-700 text-sm">Informasi penting terkait administrasi masjid.</p>
    </div>
    <div class="bg-green-50 p-4 rounded-lg shadow">
      <h4 class="font-medium text-green-900 mb-2">Widget 2</h4>
      <p class="text-green-700 text-sm">Grafik dan laporan keuangan infaq serta donasi.</p>
    </div>
  </div>
</div>
@endsection
