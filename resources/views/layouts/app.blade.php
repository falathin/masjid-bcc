<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masjid Al-Ikhlas Admin Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Konfigurasi Tailwind (opsional) -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'masjid-blue': '#1E3A8A',
              'masjid-green': '#047857',
            },
          },
        },
      };
    </script>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100" x-data="{ sidebarOpen: false }">
  
    <!-- Mobile Sidebar (Overlay) -->
    <div x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click.away="sidebarOpen = false"
         class="fixed inset-0 z-30 flex md:hidden">
      <div class="relative flex-1 flex flex-col max-w-xs w-full bg-masjid-blue text-white">
        <!-- Tombol Close Mobile Sidebar -->
        <div class="absolute top-4 right-4">
          <button @click="sidebarOpen = false" class="text-2xl font-bold focus:outline-none">&times;</button>
        </div>
        <div class="px-6 py-8">
          <h1 class="text-2xl font-bold tracking-wide">Masjid Al-Ikhlas</h1>
          <p class="text-sm text-gray-300">Admin Dashboard</p>
        </div>
        <nav class="flex-1 px-6">
          <ul class="space-y-2">
            <li>
              <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Dashboard</a>
            </li>
            <li>
              <a href="{{route('admin.article.index')}}" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Program Artikel</a>
            </li>
            <li>
              <a href="{{route('kas.index')}}" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Program Kas Bendahara</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Notifikasi QnA</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Buat Jadwal Imam Jum'at</a>
            </li>
          </ul>
        </nav>
        <div class="px-6 py-4">
          <button class="w-full py-2 bg-blue-700 rounded hover:bg-blue-600 transition">Keluar</button>
        </div>
      </div>
      <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
    </div>
    
    <!-- Desktop Sidebar -->
    <aside class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 bg-masjid-blue text-white">
      <div class="px-6 py-8">
        <h1 class="text-2xl font-bold tracking-wide">Masjid Al-Ikhlas</h1>
        <p class="text-sm text-gray-300">Admin Dashboard</p>
      </div>
      <nav class="flex-1 px-6">
        <ul class="space-y-2">
          <li>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Dashboard</a>
          </li>
          <li>
            <a href="{{route('admin.article.index')}}" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Program Artikel</a>
          </li>
          <li>
            <a href="{{route('kas.index')}}" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Program Kas Bendahara</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Notifikasi QnA</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-4 rounded hover:bg-blue-800 transition">Buat Jadwal Imam Jum'at</a>
          </li>
        </ul>
      </nav>
      <div class="px-6 py-4">
        <button class="w-full py-2 bg-blue-700 rounded hover:bg-blue-600 transition">Keluar</button>
      </div>
    </aside>
    
    <!-- Main Content Wrapper -->
    <div class="min-h-screen flex flex-col md:pl-64">
      <!-- Header -->
      <header class="bg-white shadow p-4 flex items-center justify-between">
        <div class="flex items-center">
            <!-- Hamburger (Mobile Only) -->
            <button @click="sidebarOpen = true" class="md:hidden text-gray-500 focus:outline-none focus:text-gray-900">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
            <h2 class="text-xl font-bold text-gray-800 ml-2">@yield('title')</h2>
          </div>          
        <span class="text-gray-600 text-sm hidden md:block">Selamat datang, Admin!</span>
      </header>
      
      <!-- Content Area -->
      <main class="p-6 overflow-auto">
        @yield('content')
      </main>
      
      <!-- Footer (Sticky Footer) -->
      <footer class="bg-white shadow p-4 mt-auto" data-aos="fade-up">
        <div class="container mx-auto text-center text-gray-600">
          <p>&copy; 2025 Masjid Al-Ikhlas. All rights reserved.</p>
        </div>
      </footer>
    </div>
    
    <!-- Scripts: Alpine.js, AOS -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        once: true,
      });
    </script>
  </body>
</html>