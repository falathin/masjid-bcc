<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Al-Ikhlas | Buana Citra Ciwastra</title>

    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        #dropdown-toggle:checked+#dropdown {
            display: block;
        }

        a,
        span {
            position: relative;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a.arrow,
        span.arrow {
            display: flex;
            align-items: center;
            font-weight: 600;
            line-height: 1.5;
        }

        a.arrow .arrow_icon,
        span.arrow .arrow_icon {
            position: relative;
            margin-left: 0.5em;
        }

        a.arrow .arrow_icon svg,
        span.arrow .arrow_icon svg {
            transition: transform 0.3s 0.02s ease;
            margin-right: 1em;
        }

        a.arrow .arrow_icon::before,
        span.arrow .arrow_icon::before {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 0;
            width: 0;
            height: 2px;
            background: #38b2ac;
            transform: translateY(-50%);
            transition: width 0.3s ease;
        }

        a.arrow:hover .arrow_icon::before,
        span.arrow:hover .arrow_icon::before {
            width: 1em;
        }

        a.arrow:hover .arrow_icon svg,
        span.arrow:hover .arrow_icon svg {
            transform: translateX(0.75em);
        }

        /* .cover {
      border-bottom-right-radius: 128px;
    } */

        .bg-blue-teal-gradient {
            background: rgb(49, 130, 206);
            background: linear-gradient(90deg, rgba(49, 130, 206, 1) 0%, rgba(56, 178, 172, 1) 100%);
        }

        /* @media (min-width: 1024px) {
      .cover {
        border-bottom-right-radius: 256px;
      }
    } */
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

</head>

<body class="antialiased bg-white font-sans text-gray-900">


    <main class="w-full">

        <!-- start header -->
        <header class="absolute top-0 left-0 w-full z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
            <div class="hidden md:flex justify-between items-center py-3 border-b text-sm"
                style="border-color: rgba(255,255,255,0.25)" data-aos="fade-down">
                <div>
                    <ul class="flex text-white">
                        <li>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                                </svg>
                                <span class="ml-2">
                                    <a href="https://maps.app.goo.gl/SmmmniMrLkKib5N79"
                                        class="hover:underline">Buahbatu, Kec. Bojongsoang, Kab. Bandung, Jawa Barat
                                        40287</a>
                                </span>
                            </div>
                        </li>
                        <li class="ml-6">
                            <div class="flex items-center space-x-2">
                                <a href="https://wa.me/+62816973677" target="_blank"
                                    class="flex items-center text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                                    </svg>
                                    <span class="ml-2">+62 816-973-677</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="flex justify-end text-white" data-aos="fade-down" data-aos-delay="200">
                        <li class="ml-6">
                            <a href="https://www.instagram.com/alikhlasbcc?igsh=eTNrMW9iYTN1NTVr" target="_blank"
                                title="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="fill-current">
                                    <path
                                        d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-between py-6" data-aos="fade-up" data-aos-delay="400">
                <div class="w-1/2 md:w-auto">
                    <a href="{{ route('home') }}" class="text-white font-bold text-2xl">
                        Masjid Al-Ikhlas
                    </a>
                </div>

                <label for="menu-toggle" class="cursor-pointer md:hidden block">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>

                <input class="hidden" type="checkbox" id="menu-toggle">

                <div class="hidden md:block w-full md:w-auto" id="menu">
                    <nav class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none"
                        data-aos="fade-up" data-aos-delay="600">
                        <ul class="md:flex md:items-center md:space-x-1">
                            <li>
                                <a class="py-2 inline-block md:text-white lg:block font-semibold"
                                    href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="md:ml-4">
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('about') }}">Tentang
                                    Kami</a>
                            </li>
                            <!-- EVENT MASJID BUTTON -->
                            <li class="relative md:ml-4">
                                <button onclick="toggleEventMenu()"
                                    class="py-2 inline-block md:text-white md:px-2 font-semibold focus:outline-none">
                                    Event Masjid
                                </button>

                                <!-- Pop-up Menu dengan transisi -->
                                <ul id="eventMenu"
                                    class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-lg w-56 z-50 transition-all duration-300 opacity-0 scale-95 pointer-events-none">
                                    <li>
                                        <a href="{{ route('ikatan') }}" class="block px-4 py-2 hover:bg-gray-100">Ikatan
                                            Remaja Masjid</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pesantren') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Pesantren Kilat Ramadhan</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('qurban') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Qurban</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('bumm') }}" class="block px-4 py-2 hover:bg-gray-100">BUMM</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- SCRIPT -->
                            <script>
                                function toggleEventMenu() {
                                    const menu = document.getElementById('eventMenu');
                                    const isHidden = menu.classList.contains('pointer-events-none');

                                    if (isHidden) {
                                        menu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                                        menu.classList.add('opacity-100', 'scale-100');
                                    } else {
                                        menu.classList.remove('opacity-100', 'scale-100');
                                        menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                                    }
                                }

                                // Optional: Klik di luar menu untuk menutupnya
                                window.addEventListener('click', function(e) {
                                    const menu = document.getElementById('eventMenu');
                                    const button = document.querySelector('button[onclick="toggleEventMenu()"]');
                                    if (!menu.contains(e.target) && !button.contains(e.target)) {
                                        menu.classList.remove('opacity-100', 'scale-100');
                                        menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                                    }
                                });
                            </script>
                            <li class="md:ml-4 lg:block md:hidden">
                                <a class="py-2 inline-block md:px-2 font-semibold text-blue-600 border-b-4 border-blue-600 bg-blue-100 rounded-md animate__animated animate__fadeInDown"
                                    href="{{ route('news') }}">
                                    Berita
                                </a>
                            </li>
                            <li class="md:ml-4 lg:block md:hidden">
                                <!-- Perubahan: link ke route home + anchor #pray -->
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('galery') }}">Galery</a>
                            </li>
                            <li class="md:ml-4">
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('contact') }}">Kontak
                                    Kami</a>
                            </li>
                            <li class="md:ml-6 mt-3 md:mt-0">
                                <a href="{{ route('login') }}"
                                    class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 rounded border border-white md:bg-transparent md:border md:text-white 
                                           transition-all duration-300 ease-in-out 
                                           hover:bg-white hover:text-blue-700 hover:shadow-lg hover:scale-105">
                                    Log In As Admin
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </header>
        <!-- end header -->
        <!-- start hero berita -->
        <div class="bg-gray-100" id="heroHeader">
            <section
                class="relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex items-center min-h-screen">
                <!-- Background image dengan opacity agar teks tetap terbaca -->
                <div class="absolute top-0 left-0 w-full h-full z-0" data-aos="fade">
                    <img src="{{ asset('images/cover-bg.jpg') }}" alt="Background"
                        class="w-full h-full object-cover opacity-20">
                </div>

                <!-- Container teks dan slider gambar -->
                <div class="relative z-10 flex flex-col lg:flex-row items-center w-full">
                    <!-- Kolom teks -->
                    <div class="lg:w-1/2" data-aos="fade-right" data-aos-delay="200">
                        <h3 class="text-white text-3xl md:text-5xl xl:text-5xl font-bold leading-tight">
                            Berita Terkini
                        </h3>
                        <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">
                            Temukan informasi terbaru seputar kegiatan <span class="font-bold">Masjid Al-Ikhlas Buana
                                Citra Ciwastra</span>, termasuk agenda keagamaan, program sosial, hingga pengumuman
                            penting bagi jamaah dan warga sekitar.
                        </p>

                        <!-- Tahun dan tombol -->
                        <div class="mt-6 flex items-center gap-4" data-aos="fade-up" data-aos-delay="400">
                            <!-- Tahun Rilis -->
                            <div
                                class="flex items-center gap-2 bg-white/10 px-4 py-2 rounded shadow-md hover:shadow-lg hover:scale-105 hover:bg-white/20 transition-all duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-white font-semibold text-xl">Terbaru</p>
                            </div>

                            <!-- Panah -->
                            <span class="text-white text-2xl font-bold">→</span>

                            <!-- Tahun Sekarang -->
                            <div
                                class="flex items-center gap-2 bg-white/10 px-4 py-2 rounded shadow-md hover:shadow-lg hover:scale-105 hover:bg-white/20 transition-all duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-white font-semibold text-xl" id="current-year"></p>
                            </div>
                        </div>

                        <!-- Tombol aksi -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="600">
                            <a href="#news"
                                class="px-8 py-4 bg-teal-500 text-white rounded font-semibold text-center hover:bg-teal-600 hover:scale-105 transition-all duration-300 cursor-pointer">
                                Lihat Berita
                            </a>
                            <a href="#agenda"
                                class="px-8 py-4 bg-yellow-400 text-black rounded font-semibold text-center hover:bg-yellow-300 hover:scale-105 transition-all duration-300 cursor-pointer">
                                Agenda Masjid
                            </a>
                        </div>
                    </div>

                    <!-- Kolom slider gambar -->
                    <div class="lg:w-1/2 mt-8 lg:mt-0 lg:pl-12" data-aos="fade-left" data-aos-delay="800">
                        <div id="hero-slider" class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
                            style="border: 1px solid #ccc;">
                            <div id="slider-inner" class="flex transition-transform duration-500 ease-in-out">
                                <img src="images/news-header-1.jpg" alt="Slider 1"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                                <img src="images/news-header-2.jpg" alt="Slider 2"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                                <img src="images/news-header-3.jpg" alt="Slider 3"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script untuk set tahun otomatis -->
                <script>
                    const currentYear = new Date().getFullYear();
                    document.getElementById('current-year').textContent = currentYear;
                </script>

                <!-- Script untuk slider gambar -->
                <script>
                    const sliderInner = document.getElementById("slider-inner");
                    const slides = sliderInner.querySelectorAll("img");
                    let currentSlide = 0;
                    const totalSlides = slides.length;

                    function nextSlide() {
                        currentSlide = (currentSlide + 1) % totalSlides;
                        sliderInner.style.transform = `translateX(-${currentSlide * 100}%)`;
                    }

                    let slideInterval = setInterval(nextSlide, 3000);

                    let startX = 0;
                    let moveX = 0;

                    sliderInner.addEventListener("touchstart", (e) => {
                        clearInterval(slideInterval);
                        startX = e.touches[0].clientX;
                    });

                    sliderInner.addEventListener("touchmove", (e) => {
                        moveX = e.touches[0].clientX - startX;
                    });

                    sliderInner.addEventListener("touchend", () => {
                        if (moveX > 50) {
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                        } else if (moveX < -50) {
                            currentSlide = (currentSlide + 1) % totalSlides;
                        }
                        sliderInner.style.transform = `translateX(-${currentSlide * 100}%)`;
                        slideInterval = setInterval(nextSlide, 3000);
                        moveX = 0;
                    });

                    document.getElementById("hero-slider").addEventListener("click", () => {
                        clearInterval(slideInterval);
                        nextSlide();
                        slideInterval = setInterval(nextSlide, 3000);
                    });
                </script>
            </section>
        </div>
        <!-- end hero berita -->

        <section id="news" class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12">
            <!-- Header Section -->
            <div class="mb-8" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Berita Masjid Al-Ikhlas BCC</h2>
                <p class="text-gray-600 mt-2 max-w-3xl leading-relaxed">
                    Dapatkan kabar terbaru seputar kegiatan keagamaan, kajian rutin, program sosial, serta aktivitas
                    komunitas dari Masjid Al-Ikhlas BCC.
                    Kami berkomitmen menjadi pusat spiritual dan sosial yang aktif di tengah masyarakat, mulai dari
                    ceramah Jum’at, santunan yatim, pengajian ibu-ibu, hingga kerja bakti dan program Ramadan.
                    Jelajahi artikel kami dan ikuti perkembangan kegiatan masjid yang penuh manfaat dan keberkahan.
                </p>
            </div>

            <!-- Search and Filter Controls -->
            <form action="{{ route('news') }}#news" method="GET"
                class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 mb-10" data-aos="fade-up"
                data-aos-delay="100">

                <!-- Search Input with Icon -->
                <div class="relative flex-1">
                    <label for="search" class="sr-only">Cari Berita</label>
                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                        placeholder="Cari berita atau judul..."
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none focus:border-teal-400 transition duration-200" />
                    <div class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M10.5 17a6.5 6.5 0 100-13 6.5 6.5 0 000 13z" />
                        </svg>
                    </div>
                </div>

                <!-- Filter Kategori -->
                <div class="w-full sm:w-auto">
                    <label for="category" class="sr-only">Kategori</label>
                    <select name="category" id="category"
                        class="w-full sm:w-48 px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-teal-400 focus:outline-none focus:border-teal-400 transition duration-200">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                {{ $cat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol Submit -->
                <div class="w-full sm:w-auto">
                    <button type="submit"
                        class="w-full sm:w-auto px-6 py-2.5 bg-teal-500 text-white font-semibold rounded-md hover:bg-teal-600 transition duration-300">
                        Cari
                    </button>
                </div>
            </form>

            <!-- Grid Artikel -->
            <div id="articles-container" class="min-h-[200px]" data-aos="fade-up" data-aos-delay="200">
                @if ($articles->count())
                    <div class="grid gap-8 sm:grid-cols-2 xl:grid-cols-3">
                        @foreach ($articles as $article)
                            <!-- Artikel Card -->
                            <div
                                class="article-card bg-white rounded-xl border border-gray-200 hover:shadow-lg transition duration-300">
                                <div class="w-full h-48 overflow-hidden rounded-t-xl">
                                    <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://source.unsplash.com/400x300/?mosque' }}"
                                        alt="{{ $article->title }}"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <span class="text-teal-500 font-semibold">{{ $article->category }}</span>
                                        <span
                                            class="ml-4">{{ \Carbon\Carbon::parse($article->date)->format('d M, Y') }}</span>
                                    </div>
                                    <h3 class="text-xl font-semibold mt-3 text-gray-900">{{ $article->title }}</h3>
                                    <div class="prose prose-lg max-w-none text-gray-800">
                            {!! $article->content !!}
                        </div>
                                    <button onclick="openModal({{ $article->id }})"
                                        class="mt-3 text-blue-600 hover:underline text-sm">
                                        Baca Selengkapnya
                                    </button>
                                    <div class="flex items-center mt-4">
                                        <img src="{{ $article->author_photo ? asset('storage/' . $article->author_photo) : 'https://source.unsplash.com/40x40/?man' }}"
                                            alt="{{ $article->author_name }}"
                                            class="w-10 h-10 rounded-full object-cover">
                                        <div class="ml-3 text-sm">
                                            <p class="text-gray-600">Oleh <span
                                                    class="text-gray-900 font-semibold">{{ $article->author_name }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Tidak Ada Hasil -->
                    <div class="text-center text-gray-600 py-12">
                        <svg class="mx-auto mb-4 w-12 h-12 text-gray-400" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.75c-3.72 0-6.75 3.03-6.75 6.75s3.03 6.75 6.75 6.75 6.75-3.03 6.75-6.75S15.72 4.75 12 4.75zM4.75 12h14.5" />
                        </svg>
                        <p class="text-lg font-semibold">Tidak ada hasil ditemukan.</p>
                        <p class="text-sm mt-1">Coba gunakan kata kunci atau filter yang berbeda.</p>
                    </div>
                @endif
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $articles->withQueryString()->links() }}
            </div>
        </section>

        <!-- Modal Popups (keluar dari section) -->
        @foreach ($articles as $article)
            <div id="modal-{{ $article->id }}"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden px-4 py-8 overflow-y-auto">
                <div
                    class="relative bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto animate-fadeIn">

                    <!-- Gambar Utama -->
                    <div class="w-full h-60 sm:h-72 md:h-80 lg:h-96 overflow-hidden rounded-t-2xl">
                        <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://source.unsplash.com/800x600/?mosque' }}"
                            alt="{{ $article->title }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Konten Modal -->
                    <div class="p-6 sm:p-8">

                        <!-- Header Modal -->
                        <div class="flex items-start justify-between mb-4 gap-4">
                            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 leading-snug flex-1">
                                {{ $article->title }}
                            </h2>
                            <button onclick="closeModal({{ $article->id }})"
                                class="text-gray-400 hover:text-gray-600 text-3xl leading-none font-bold focus:outline-none focus:ring-2 focus:ring-teal-400 rounded-full">
                                &times;
                            </button>
                        </div>

                        <!-- Metadata -->
                        <div class="flex flex-wrap items-center text-sm text-gray-500 gap-x-6 mb-6">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 7v10a4 4 0 004 4h10a4 4 0 004-4V7M3 7a4 4 0 014-4h10a4 4 0 014 4M3 7h18" />
                                </svg>
                                <span>{{ $article->category }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10m-10 4h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($article->date)->format('d M Y') }}</span>
                            </div>
                        </div>

                        <!-- Isi Artikel -->
                        <div class="prose prose-lg max-w-none text-gray-800">
                            {!! $article->content !!}
                        </div>

                        <!-- Author Info -->
                        <div class="mt-10 pt-6 border-t flex items-center">
                            <img src="{{ $article->author_photo ? asset('storage/' . $article->author_photo) : 'https://source.unsplash.com/40x40/?man' }}"
                                alt="{{ $article->author_name }}"
                                class="w-12 h-12 rounded-full object-cover mr-4 border border-gray-300 shadow-sm">
                            <div class="text-sm text-gray-700">
                                <p class="font-semibold text-gray-900">Oleh: {{ $article->author_name }}</p>
                                <p class="text-xs mt-0.5 text-gray-500">Diterbitkan pada:
                                    {{ \Carbon\Carbon::parse($article->date)->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Script Modal -->
        <script>
            function openModal(id) {
                document.getElementById(`modal-${id}`).classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal(id) {
                document.getElementById(`modal-${id}`).classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        </script>

        <!-- Animasi opsional -->
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.96);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            .animate-fadeIn {
                animation: fadeIn 0.3s ease-out;
            }
        </style>


        <!-- Script untuk Modal Popup -->
        <script>
            function openModal(id) {
                document.getElementById('modal-' + id).classList.remove('hidden');
            }

            function closeModal(id) {
                document.getElementById('modal-' + id).classList.add('hidden');
            }
        </script>


        <!-- start CTA Section -->
        <section
            class="relative bg-gradient-to-r from-blue-700 to-teal-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left"
            data-aos="fade-up">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h2 class="text-lg sm:text-xl md:text-2xl font-semibold text-white leading-relaxed">
                    Punya pertanyaan atau ingin berkontribusi?
                    <br class="block md:hidden"> Hubungi pengurus Masjid Al-Ikhlas BCC.
                </h2>
                <a href="https://wa.me/+62816973677"
                    class="inline-block px-6 sm:px-8 py-3 sm:py-4 bg-white text-blue-700 rounded font-semibold hover:bg-blue-100 transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </section>
        <!-- end CTA Section -->

        <!-- start footer -->
        @include('partials.footer')
        <!-- end footer -->
    </main>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-131505823-4');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Animasi hanya terjadi sekali per scroll
            easing: 'ease-in-out'
        });
    </script>

</body>

</html>