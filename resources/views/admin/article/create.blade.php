@extends('layouts.app')

@section('title', 'Buat Artikel')

@section('content')
<div class="container mx-auto px-4 py-8" data-aos="fade-up">
  <a href="{{ route('admin.article.index') }}" class="text-blue-500 hover:underline">&larr; Kembali ke Daftar Artikel</a>
  <div class="bg-white shadow rounded-lg p-6 mt-4" data-aos="fade-up" data-aos-delay="100">
    <h1 class="text-3xl font-bold mb-4">Buat Artikel Baru</h1>
    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach 
        </ul>
      </div>
    @endif
    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf
      <!-- Judul Artikel -->
      <div>
        <label for="title" class="block text-lg font-medium text-gray-700">Judul Artikel</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required 
               class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-masjid-blue">
        @error('title')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Kategori -->
      <div>
        <label for="category" class="block text-lg font-medium text-gray-700">Kategori</label>
        <select name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-masjid-blue">
          <option value="">Pilih Kategori</option>
          <option value="pesantren kilat" {{ old('category') == 'pesantren kilat' ? 'selected' : '' }}>Pesantren Kilat</option>
          <option value="qurban" {{ old('category') == 'qurban' ? 'selected' : '' }}>Qurban</option>
          <option value="kajian agama" {{ old('category') == 'kajian agama' ? 'selected' : '' }}>Kajian Agama</option>
          <option value="bakti sosial" {{ old('category') == 'bakti sosial' ? 'selected' : '' }}>Bakti Sosial</option>
          <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>
        @error('category')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Tanggal Artikel -->
      <div>
        <label for="date" class="block text-lg font-medium text-gray-700">Tanggal Artikel</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}" required 
               class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-masjid-blue">
        @error('date')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Konten Artikel -->
      <div>
        <label for="content" class="block text-lg font-medium text-gray-700">Konten Artikel</label>
        <textarea name="content" id="content" rows="6" required 
               class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-masjid-blue">{{ old('content') }}</textarea>
        @error('content')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Unggah Gambar Utama (Drag & Drop) -->
      <div>
        <label class="block text-lg font-medium text-gray-700 mb-2">Gambar Utama</label>
        <div id="feature-dropzone" class="border-2 border-dashed border-gray-300 rounded-md p-6 flex flex-col items-center justify-center cursor-pointer transition hover:border-masjid-blue">
          <p class="text-gray-500">Klik atau seret gambar ke sini</p>
          <img id="feature-preview" src="" alt="" class="mt-4 max-h-60 rounded" style="display: none;">
        </div>
        <input type="file" name="image" id="image" class="hidden" accept="image/*">
        @error('image')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Nama Penulis -->
      <div>
        <label for="author_name" class="block text-lg font-medium text-gray-700">Nama Penulis</label>
        <input type="text" name="author_name" id="author_name" value="{{ old('author_name') }}"
               class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-masjid-blue">
        @error('author_name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Foto Penulis (Avatar) dengan Drag & Drop -->
      <div>
        <label class="block text-lg font-medium text-gray-700 mb-2">Foto Penulis (Avatar)</label>
        <div id="author-dropzone" class="border-2 border-dashed border-gray-300 rounded-full w-32 h-32 mx-auto flex items-center justify-center cursor-pointer transition hover:border-masjid-blue overflow-hidden">
          <span id="author-dropzone-text" class="text-gray-500">Klik atau seret foto</span>
          <img id="author-preview" src="" alt="" class="w-full h-full object-cover" style="display: none;">
        </div>
        <input type="file" name="author_photo" id="author_photo" class="hidden" accept="image/*">
        @error('author_photo')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
      
      <!-- Tombol Submit -->
      <div>
        <button type="submit" class="w-full py-3 bg-masjid-blue text-white rounded-md font-semibold hover:bg-masjid-green transition duration-300">
          Buat Artikel
        </button>
      </div>
    </form>
  </div>
</div>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content', {
    removeButtons: 'PasteFromWord'
  });

  // Auto-fill tanggal jika kosong
  const dateInput = document.getElementById('date');
  if(dateInput && !dateInput.value) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.value = today;
  }

  // Feature Image Drag & Drop
  const featureDropzone = document.getElementById('feature-dropzone');
  const featureInput = document.getElementById('image');
  const featurePreview = document.getElementById('feature-preview');

  featureDropzone.addEventListener('click', () => featureInput.click());
  featureDropzone.addEventListener('dragover', (e) => {
    e.preventDefault();
    featureDropzone.classList.add('border-masjid-blue');
  });
  featureDropzone.addEventListener('dragleave', (e) => {
    e.preventDefault();
    featureDropzone.classList.remove('border-masjid-blue');
  });
  featureDropzone.addEventListener('drop', (e) => {
    e.preventDefault();
    featureDropzone.classList.remove('border-masjid-blue');
    if(e.dataTransfer.files.length) {
      featureInput.files = e.dataTransfer.files;
      previewFeatureImage(featureInput.files[0]);
    }
  });
  featureInput.addEventListener('change', () => {
    if(featureInput.files.length) {
      previewFeatureImage(featureInput.files[0]);
    }
  });
  function previewFeatureImage(file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      featurePreview.src = e.target.result;
      featurePreview.style.display = 'block';
    }
    reader.readAsDataURL(file);
  }

  // Author Photo Drag & Drop dengan simulasi crop (avatar)
  const authorDropzone = document.getElementById('author-dropzone');
  const authorInput = document.getElementById('author_photo');
  const authorPreview = document.getElementById('author-preview');
  const authorDropzoneText = document.getElementById('author-dropzone-text');

  authorDropzone.addEventListener('click', () => authorInput.click());
  authorDropzone.addEventListener('dragover', (e) => {
    e.preventDefault();
    authorDropzone.classList.add('border-masjid-blue');
  });
  authorDropzone.addEventListener('dragleave', (e) => {
    e.preventDefault();
    authorDropzone.classList.remove('border-masjid-blue');
  });
  authorDropzone.addEventListener('drop', (e) => {
    e.preventDefault();
    authorDropzone.classList.remove('border-masjid-blue');
    if(e.dataTransfer.files.length) {
      authorInput.files = e.dataTransfer.files;
      previewAuthorImage(authorInput.files[0]);
    }
  });
  authorInput.addEventListener('change', () => {
    if(authorInput.files.length) {
      previewAuthorImage(authorInput.files[0]);
    }
  });
  function previewAuthorImage(file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      authorPreview.src = e.target.result;
      authorPreview.style.display = 'block';
      authorDropzoneText.style.display = 'none';
    }
    reader.readAsDataURL(file);
  }
</script>
@endsection