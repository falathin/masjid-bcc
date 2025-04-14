<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/svg+xml" href='data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="cyan" viewBox="0 0 24 24"%3E%3Cpath d="M12 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm6-7h-1V7a5 5 0 0 0-10 0v3H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2zm-8-3a3 3 0 0 1 6 0v3H10V7zm8 14H6v-9h12v9z"/%3E%3C/svg%3E'>
    <script src="https://cdn.tailwindcss.com"></script>

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
                style="border-color: rgba(255,255,255,.25)" data-aos="fade-down">
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
                                    <circle cx="11.994" cy="11.979" r="3.003"></circle>
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
                        <ul class="md:flex items-center">
                            <!-- BERANDA (aktif) -->
                            <li>
                                <a class="py-2 inline-block md:px-2 font-semibold 
                  {{ Request::routeIs('home') ? 'text-blue-600 border-b-4 border-blue-600 bg-blue-100 rounded-md animate__animated animate__fadeInDown' : 'md:text-white' }}"
                                    href="{{ route('home') }}">
                                    Beranda
                                </a>
                            </li>

                            <!-- TENTANG KAMI -->
                            <li class="md:ml-4">
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('about') }}">Tentang Kami</a>
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
                                        <a href="{{ route('galery') }}" class="block px-4 py-2 hover:bg-gray-100">Galeri
                                            Item</a>
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

                            <!-- BERITA -->
                            <li class="md:ml-4 lg:block md:hidden">
                                <a class="py-2 inline-block md:px-2 font-semibold 
                  {{ Request::routeIs('news') ? 'text-blue-600 border-b-4 border-blue-600 bg-blue-100 rounded-md animate__animated animate__fadeInDown' : 'md:text-white' }}"
                                    href="{{ route('news') }}">
                                    Berita
                                </a>
                            </li>

                            <!-- KONTAK KAMI -->
                            <li class="md:ml-4">
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('contact') }}">Kontak Kami</a>
                            </li>

                            @auth
                                <!-- LOGIN ADMIN -->
                                <li class="md:ml-6 mt-3 md:mt-0">
                                    <a href="{{ route('admin.home') }}"
                                        class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 rounded border border-white md:bg-transparent md:border md:text-white 
                            transition-all duration-300 ease-in-out 
                            hover:bg-white hover:text-blue-700 hover:shadow-lg hover:scale-105">
                                        Masuk halaman dashboard admin
                                    </a>
                                </li>
                            @endauth
                            @guest
                                <!-- LOGIN ADMIN -->
                                <li class="md:ml-6 mt-3 md:mt-0">
                                    <a href="{{ route('login') }}"
                                        class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 rounded border border-white md:bg-transparent md:border md:text-white 
                                transition-all duration-300 ease-in-out 
                                hover:bg-white hover:text-blue-700 hover:shadow-lg hover:scale-105">
                                        Log In As Admin
                                    </a>
                                </li>
                            @endguest


                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- start hero -->
        <div class="bg-gray-100" id="heroHeader">
            <section
                class="relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex items-center min-h-screen">
                <!-- Background image dengan opacity agar teks tetap terbaca -->
                <div class="absolute top-0 left-0 w-full h-full z-0" data-aos="fade">
                    <img src="images/cover-bg.jpg" alt="Background" class="w-full h-full object-cover opacity-20">
                </div>

                <!-- Container teks dan slider gambar -->
                <div class="relative z-10 flex flex-col lg:flex-row items-center w-full">
                    <!-- Kolom teks -->
                    <div class="lg:w-1/2" data-aos="fade-right" data-aos-delay="200">
                        <h3 class="text-white text-3xl md:text-5xl xl:text-5xl font-bold leading-tight">
                            Assalamualaikum...
                        </h3>
                        <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">
                            Selamat Datang di <span class="font-bold">Masjid Al-Ikhlas Buana Citra Ciwastra</span>.
                            Masjid ini berdiri sejak tahun <span class="font-bold" id="start-year-text">2022</span>
                            hingga sekarang <span class="font-bold" id="current-year-text"></span>. Terletak di <span
                                class="font-bold">Bandung Buana Citra Ciwastra</span>, tempat ini menjadi lokasi
                            kegiatan ibadah dan kebersamaan warga sekitar.
                        </p>

                        <!-- Tahun dan tombol -->
                        <div class="mt-6 flex items-center gap-4" data-aos="fade-up" data-aos-delay="400">
                            <!-- Tahun Mulai -->
                            <div
                                class="flex items-center gap-2 bg-white/10 px-4 py-2 rounded shadow-md hover:shadow-lg hover:scale-105 hover:bg-white/20 transition-all duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-white font-semibold text-xl">2022</p>
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
                            <a href="{{ route('about') }}"
                                class="px-8 py-4 bg-teal-500 text-white rounded font-semibold text-center hover:bg-teal-600 hover:scale-105 transition-all duration-300 cursor-pointer">
                                Info Selengkapnya
                            </a>
                            <a href="#infaq"
                                class="px-8 py-4 bg-yellow-400 text-black rounded font-semibold text-center hover:bg-yellow-300 hover:scale-105 transition-all duration-300 cursor-pointer">
                                Infaq ke Masjid
                            </a>
                        </div>
                    </div>

                    <!-- Kolom slider gambar -->
                    <div class="lg:w-1/2 mt-8 lg:mt-0 lg:pl-12" data-aos="fade-left" data-aos-delay="800">
                        <div id="hero-slider" class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer"
                            style="border: 1px solid #ccc;">
                            <div id="slider-inner" class="flex transition-transform duration-500 ease-in-out">
                                <img src="images/hero-header-1.jpg" alt="Slider 1"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                                <img src="images/hero-header-2.jpg" alt="Slider 2"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                                <img src="images/hero-header-3.jpg" alt="Slider 3"
                                    class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script untuk set tahun otomatis -->
                <script>
                    const currentYear = new Date().getFullYear();
                    document.getElementById('current-year').textContent = currentYear;
                    document.getElementById('current-year-text').textContent = currentYear;
                </script>

                <!-- Script untuk slider gambar (auto slide setiap 3 detik, dukungan swipe, klik untuk ganti gambar) -->
                <script>
                    const sliderInner = document.getElementById("slider-inner");
                    const slides = sliderInner.querySelectorAll("img");
                    let currentSlide = 0;
                    const totalSlides = slides.length;

                    function nextSlide() {
                        currentSlide = (currentSlide + 1) % totalSlides;
                        sliderInner.style.transform = `translateX(-${currentSlide * 100}%)`;
                    }

                    // Auto slide tiap 3 detik
                    let slideInterval = setInterval(nextSlide, 3000);

                    // Responsif: Update saat jendela diresize
                    window.addEventListener("resize", () => {
                        // Tidak perlu melakukan perubahan karena transform menggunakan persen
                    });

                    // Dukungan swipe untuk perangkat sentuh
                    let startX = 0;
                    let moveX = 0;

                    sliderInner.addEventListener("touchstart", (e) => {
                        clearInterval(slideInterval);
                        startX = e.touches[0].clientX;
                    });

                    sliderInner.addEventListener("touchmove", (e) => {
                        moveX = e.touches[0].clientX - startX;
                    });

                    sliderInner.addEventListener("touchend", (e) => {
                        if (moveX > 50) {
                            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                        } else if (moveX < -50) {
                            currentSlide = (currentSlide + 1) % totalSlides;
                        }
                        sliderInner.style.transform = `translateX(-${currentSlide * 100}%)`;
                        slideInterval = setInterval(nextSlide, 3000);
                        moveX = 0;
                    });

                    // Jika slider ditekan, ganti ke gambar berikutnya
                    document.getElementById("hero-slider").addEventListener("click", () => {
                        clearInterval(slideInterval);
                        nextSlide();
                        slideInterval = setInterval(nextSlide, 3000);
                    });
                </script>
            </section>
        </div>
        <!-- end hero -->

        <!-- start pray -->
        <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-32 bg-gray-50" id="pray">
            <div class="flex flex-col lg:flex-row lg:-mx-8">
                <div class="w-full lg:w-1/2 lg:px-8">
                    <h2 class="text-3xl leading-tight font-bold mt-4 text-gray-800">
                        Selamat Datang di Masjid Al-Ikhlas Buana Citra Ciwastra
                    </h2>
                    <p class="text-lg mt-4 font-semibold text-gray-700">Jadwal Sholat Wilayah Bandung</p>
                    <p class="mt-2 leading-relaxed text-gray-600">
                        Menyajikan informasi jadwal sholat harian khusus untuk wilayah Bandung, termasuk daerah Ciwastra
                        dan sekitarnya. Pastikan Anda beribadah tepat waktu dengan jadwal yang sesuai lokasi.
                    </p>
                </div>

                <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">
                    <div class="md:flex items-center">
                        <div>
                            <!-- Ikon Kotak Sajadah dengan warna merah -->
                            <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <rect x="2" y="3" width="20" height="18" rx="2" ry="2" />
                                    <path fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" d="M6 9h12M6 13h12" />
                                </svg>
                            </div>
                        </div>
                        <div class="md:ml-8 mt-4 md:mt-0">
                            <h4 class="text-xl font-bold leading-tight text-gray-800">Jadwal Sholat Daerah Ciwastra
                            </h4>
                            <p class="mt-2 leading-relaxed text-gray-600">
                                Jadwal sholat kami disesuaikan dengan waktu lokal Bandung dan sekitarnya, seperti
                                Ciwastra, Buah Batu, dan Margacinta. Dapatkan waktu sholat yang akurat setiap harinya.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Card jadwal sholat 5 waktu -->
            <div class="md:flex md:flex-wrap mt-24 text-center md:-mx-4">
                <!-- Card Subuh -->
                <div class="md:w-1/2 md:px-4 lg:w-1/5" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="bg-white rounded-lg border border-gray-300 p-8 shadow-md hover:shadow-xl transition duration-200">
                        <!-- Ikon Shubuh (Sunrise) yang Cerah -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-yellow-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Busur matahari terbenam -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22v-5" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a5 5 0 0118 0" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h16" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v4" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 13v4" />
                        </svg>
                        <h4 class="text-xl font-bold mt-4 text-gray-800">Subuh</h4>
                        <p class="mt-1 text-gray-600">04:30</p>
                    </div>
                </div>


                <!-- Card Dzuhur -->
                <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/5" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-white rounded-lg border border-gray-300 p-8 shadow-md hover:shadow-xl transition duration-200">
                        <!-- Ikon Dzuhur (Matahari) yang diperbaiki -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-orange-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Lingkaran sebagai inti matahari -->
                            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" />
                            <!-- Sinar matahari -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                        </svg>
                        <h4 class="text-xl font-bold mt-4 text-gray-800">Dzuhur</h4>
                        <p class="mt-1 text-gray-600">12:00</p>
                    </div>
                </div>

                <!-- Card Ashar -->
                <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/5" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="bg-white rounded-lg border border-gray-300 p-8 shadow-md hover:shadow-xl transition duration-200">
                        <!-- Ikon Ashar (Jam) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-green-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="currentColor"
                                fill="none" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                        <h4 class="text-xl font-bold mt-4 text-gray-800">Ashar</h4>
                        <p class="mt-1 text-gray-600">15:30</p>
                    </div>
                </div>

                <!-- Card Maghrib -->
                <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/5" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="bg-white rounded-lg border border-gray-300 p-8 shadow-md hover:shadow-xl transition duration-200">
                        <!-- Ikon Maghrib (Sunset) yang diperbaiki -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-red-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Busur matahari terbenam -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22v-5" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a5 5 0 0118 0" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h16" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v4" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 13v4" />
                        </svg>
                        <h4 class="text-xl font-bold mt-4 text-gray-800">Maghrib</h4>
                        <p class="mt-1 text-gray-600">18:15</p>
                    </div>
                </div>

                <!-- Card Isya -->
                <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-0 lg:w-1/5" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="bg-white rounded-lg border border-gray-300 p-8 shadow-md hover:shadow-xl transition duration-200">
                        <!-- Ikon Isya (Bulan) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-indigo-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                        </svg>
                        <h4 class="text-xl font-bold mt-4 text-gray-800">Isya</h4>
                        <p class="mt-1 text-gray-600">19:30</p>
                    </div>
                </div>
            </div>

        </section>
        <!-- end pray -->

        <!-- start infaq section -->
        <section id="infaq"
            class="relative bg-yellow-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-16 lg:py-32 overflow-hidden"
            data-aos="fade-up">
            <!-- Animated Background Image with Gradient Overlay -->
            <div class="absolute inset-0">
                <div class="w-full h-full animate-slowzoom">
                    <img src="{{ asset('images/infaq.jpg') }}" alt="Background" class="w-full h-full object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-br from-yellow-900 via-black-800 to-yellow-600 opacity-60 mix-blend-multiply">
                </div>
            </div>

            <!-- Konten -->
            <div class="relative z-10 flex flex-col lg:flex-row lg:-mx-8 items-center" data-aos-duration="1000">
                <!-- Teks dan Ayat -->
                <div class="w-full lg:w-1/2 lg:px-8 text-white">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-orange-300 drop-shadow-lg mb-4"
                        data-aos="fade-right">
                        Ayo Berinfaq untuk Masjid
                    </h2>
                    <p class="mt-4 text-lg italic leading-relaxed drop-shadow-sm" data-aos="fade-right"
                        data-aos-delay="100">
                        يٰٓاَيُّهَا الَّذِيْنَ اٰمَنُوْٓا اَنْفِقُوْا مِمَّا رَزَقْنٰكُمْ مِّنْ قَبْلِ اَنْ يَّأْتِيَ
                        يَوْمٌ لَّا بَيْعٌ فِيْهِ وَلَا خُلَّةٌ وَّلَا شَفَاعَةٌ ۗوَالْكٰفِرُوْنَ هُمُ الظّٰلِمُوْنَ
                    </p>
                    <p class="mt-2 text-sm text-yellow-100" data-aos="fade-right" data-aos-delay="200">
                        <span class="font-semibold">Artinya:</span> “Wahai orang-orang yang beriman, infakkanlah
                        sebagian dari rezeki yang telah Kami anugerahkan kepadamu sebelum datang hari (Kiamat)...”
                        <br><span class="italic">QS Al-Baqarah: 254</span>
                    </p>
                    <div class="mt-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="https://link.qris.id/transfer-masjid123" target="_blank" rel="noopener noreferrer"
                            class="inline-block px-8 py-4 bg-yellow-400 hover:bg-yellow-300 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition duration-300 ease-in-out cursor-pointer">
                            Transfer Infaq Sekarang
                        </a>
                    </div>
                </div>

                <!-- QR Code -->
                <div class="w-full md:max-w-md md:mx-auto lg:w-1/2 lg:px-8 mt-12 lg:mt-0" data-aos="zoom-in-up">
                    <div
                        class="bg-white rounded-2xl shadow-2xl p-6 transform transition duration-300 ease-in-out hover:scale-105">
                        <img src="path/to/your-qris-image.png" alt="QRIS Infaq"
                            class="w-full h-72 object-contain rounded-lg" />
                    </div>
                    <p class="italic text-sm mt-4 text-center text-white">
                        Scan QR untuk berdonasi langsung ke masjid
                    </p>
                </div>
            </div>
        </section>
        <!-- end infaq section -->

        <!-- Custom animation (tambahkan di Tailwind config atau style tambahan) -->
        <style>
            @keyframes slowzoom {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }
            }

            .animate-slowzoom {
                animation: slowzoom 20s ease-in-out infinite;
            }
        </style>


        <!-- start Lokasi Masjid -->
        <section id="map" class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32"
            data-aos="fade-up">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Lokasi Masjid Al-Ikhlas BCC</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Temukan lokasi Masjid Al-Ikhlas Buana Citra Ciwastra dengan mudah melalui peta di bawah ini.
                </p>
            </div>
            <div class="w-full h-96 overflow-hidden rounded-xl shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31662.222183505693!2d107.6706113!3d-6.9829751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3c865899f05%3A0x10e62f5608946df3!2sMasjid%20Al%20Ikhlas%20Buana%20Citra%20Ciwastra!5e0!3m2!1sid!2sid!4v1713000000000!5m2!1sid!2sid"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
        <!-- end Lokasi Masjid -->



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
