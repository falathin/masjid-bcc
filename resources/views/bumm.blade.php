<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
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
                        <ul class="md:flex items-center">
                            <li>
                                <a class="py-2 inline-block md:text-white lg:block font-semibold"
                                    href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="md:ml-4">
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('about') }}#pray">Tentang Kami</a>
                            </li>
                            <!-- EVENT MASJID BUTTON -->
                            <li class="relative md:ml-4">
                                <button onclick="toggleEventMenu()" class="py-2 inline-block md:text-white md:px-2 font-semibold focus:outline-none">
                                Event Masjid
                                </button>

                                <!-- Pop-up Menu dengan transisi -->
                                <ul id="eventMenu" class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-lg w-56 z-50 transition-all duration-300 opacity-0 scale-95 pointer-events-none">
                                    <li>
                                        <a href="{{ route('ikatan') }}" class="block px-4 py-2 hover:bg-gray-100">Ikatan Remaja Masjid</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pesantren') }}" class="block px-4 py-2 hover:bg-gray-100">Pesantren Kilat Ramadhan</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('qurban') }}" class="block px-4 py-2 hover:bg-gray-100">Qurban</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('galery') }}" class="block px-4 py-2 hover:bg-gray-100">Galeri Item</a>
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
                                <!-- Perubahan: link ke route home + anchor #pray -->
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('news') }}">Berita</a>
                            </li>
                            <li class="md:ml-4 lg:block md:hidden">
                                <!-- Perubahan: link ke route home + anchor #pray -->
                                <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                    href="{{ route('contact') }}">Kontak kami</a>
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
        <!-- start hero BUMM -->
        <div class="bg-gray-100" id="heroHeader">
        <section class="relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex items-center min-h-screen">
            <!-- Background image dengan opacity -->
            <div class="absolute top-0 left-0 w-full h-full z-0" data-aos="fade">
            <img src="{{ asset('images/cover-bg.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-20">
            </div>

            <!-- Container teks dan slider -->
            <div class="relative z-10 flex flex-col lg:flex-row items-center w-full">
            <!-- Kolom teks -->
            <div class="lg:w-1/2" data-aos="fade-right" data-aos-delay="200">
                <h3 class="text-white text-3xl md:text-5xl xl:text-5xl font-bold leading-tight">
                Badan Usaha Milik Masjid
                </h3>
                <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">
                Dukung usaha masjid melalui pembelian produk makanan favorit masyarakat!
                </p>
                <p class="text-blue-100 text-xl md:text-2xl leading-snug mt-4">
                Dari makanan ringan hingga berat, semua dibuat dengan semangat kebersamaan dan keberkahan.
                </p>

                <!-- Tombol aksi -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="600">
                <a href="https://wa.me/+62816973677" class="px-8 py-4 bg-teal-500 text-white rounded font-semibold text-center hover:bg-teal-600 hover:scale-105 transition-all duration-300 cursor-pointer">
                    Hubungi Kami
                </a>
                <a href="{{route('bumm')}}" class="px-8 py-4 bg-yellow-400 text-black rounded font-semibold text-center hover:bg-yellow-300 hover:scale-105 transition-all duration-300 cursor-pointer">
                    Lihat Semua Produk
                </a>
                </div>
            </div>

            <!-- Kolom slider gambar -->
            <div class="lg:w-1/2 mt-8 lg:mt-0 lg:pl-12" data-aos="fade-left" data-aos-delay="800">
                <div id="hero-slider" class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer" style="border: 1px solid #ccc;">
                <div id="slider-inner" class="flex transition-transform duration-500 ease-in-out">
                    <img src="images/makanan-slider-1.jpg" alt="Nasi Goreng Berkah" class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                    <img src="images/makanan-slider-2.jpg" alt="Tahu Pedas Crispy" class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                    <img src="images/makanan-slider-3.jpg" alt="Donat Manis Masjid" class="w-full flex-shrink-0 object-cover transform transition duration-500 hover:scale-105">
                </div>
                </div>
            </div>
            </div>

            <!-- Script slider -->
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
        <!-- end hero BUMM -->

        <!-- start section Koprotin - Warung Kopi & Cemilan -->
        <section id="koprotin" class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-24">
            <!-- Header Section -->
            <div class="mb-12 text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight text-gray-900">
                    Koprotin
                </h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-justify leading-relaxed">
                    Koprotin adalah usaha kecil milik Masjid Al-Ikhlas Buana Citra Ciwastra yang berada di depan sebelah
                    kanan masjid.
                    Menyediakan kopi, roti, indomie, dan piscok dengan harga ramah di kantong. Setiap pembelian di sini
                    juga ikut menyumbang untuk masjid,
                    karena sebagian pemasukan akan digunakan untuk keperluan masjid. Beli di sini, sama dengan sedekah
                    juga.
                </p>
            </div>

            <!-- Grid Menu -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4" data-aos="fade-up" data-aos-delay="200">
                <!-- Card Menu Kopi -->
                <div
                    class="article-card bg-gray-50 border border-gray-200 rounded-xl shadow-md p-6 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <div class="w-24 h-24 mb-4">
                        <img src="https://source.unsplash.com/collection/190727/100x100?coffee" alt="Kopi"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Kopi</h4>
                    <p class="text-gray-600 mb-4">Rp 5.000</p>
                    <!-- Quantity Selector -->
                    <div class="flex items-center space-x-2 mb-4">
                        <button type="button"
                            class="quantity-decrease bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">–</button>
                        <span class="quantity-value font-semibold text-gray-800" data-value="0">0</span>
                        <button type="button"
                            class="quantity-increase bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">+</button>
                    </div>
                    <!-- Tombol Beli dengan link dinamis ke WhatsApp -->
                    <a href="https://wa.me/6285210724904" target="_blank"
                        class="buy-btn px-4 py-2 bg-blue-500 text-white rounded-md font-semibold transition hover:bg-blue-600"
                        data-item="Kopi">
                        Beli
                    </a>
                </div>

                <!-- Card Menu Roti Kukus & Bakar -->
                <div
                    class="article-card bg-gray-50 border border-gray-200 rounded-xl shadow-md p-6 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <div class="w-24 h-24 mb-4">
                        <img src="https://source.unsplash.com/collection/190727/100x100?bread"
                            alt="Roti Kukus & Bakar" class="w-full h-full object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Roti Kukus & Bakar</h4>
                    <p class="text-gray-600 mb-4">Rp 6.000</p>
                    <!-- Quantity Selector -->
                    <div class="flex items-center space-x-2 mb-4">
                        <button type="button"
                            class="quantity-decrease bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">–</button>
                        <span class="quantity-value font-semibold text-gray-800" data-value="0">0</span>
                        <button type="button"
                            class="quantity-increase bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">+</button>
                    </div>
                    <a href="https://wa.me/6285210724904" target="_blank"
                        class="buy-btn px-4 py-2 bg-blue-500 text-white rounded-md font-semibold transition hover:bg-blue-600"
                        data-item="Roti Kukus & Bakar">
                        Beli
                    </a>
                </div>

                <!-- Card Menu Indomie -->
                <div
                    class="article-card bg-gray-50 border border-gray-200 rounded-xl shadow-md p-6 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <div class="w-24 h-24 mb-4">
                        <img src="https://source.unsplash.com/collection/190727/100x100?noodles" alt="Indomie"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Indomie</h4>
                    <p class="text-gray-600 mb-4">Rp 10.000</p>
                    <!-- Quantity Selector -->
                    <div class="flex items-center space-x-2 mb-4">
                        <button type="button"
                            class="quantity-decrease bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">–</button>
                        <span class="quantity-value font-semibold text-gray-800" data-value="0">0</span>
                        <button type="button"
                            class="quantity-increase bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">+</button>
                    </div>
                    <a href="https://wa.me/6285210724904" target="_blank"
                        class="buy-btn px-4 py-2 bg-blue-500 text-white rounded-md font-semibold transition hover:bg-blue-600"
                        data-item="Indomie">
                        Beli
                    </a>
                </div>

                <!-- Card Menu Baru: Piscok -->
                <div
                    class="article-card bg-gray-50 border border-gray-200 rounded-xl shadow-md p-6 flex flex-col items-center transition-transform duration-300 hover:scale-105">
                    <div class="w-24 h-24 mb-4">
                        <img src="https://source.unsplash.com/collection/190727/100x100?chocolate" alt="Piscok"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Piscok</h4>
                    <p class="text-gray-600 mb-4">Rp 8.000</p>
                    <!-- Quantity Selector -->
                    <div class="flex items-center space-x-2 mb-4">
                        <button type="button"
                            class="quantity-decrease bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">–</button>
                        <span class="quantity-value font-semibold text-gray-800" data-value="0">0</span>
                        <button type="button"
                            class="quantity-increase bg-gray-200 text-gray-700 w-8 h-8 rounded-full flex justify-center items-center hover:bg-gray-300">+</button>
                    </div>
                    <a href="https://wa.me/6285210724904" target="_blank"
                        class="buy-btn px-4 py-2 bg-blue-500 text-white rounded-md font-semibold transition hover:bg-blue-600"
                        data-item="Piscok">
                        Beli
                    </a>
                </div>
            </div>

            <!-- Optional Footer Text -->
            <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="400">
                <p class="text-gray-500 text-sm">
                    Koprotin – Menu sederhana untuk warga dan keluarga di lingkungan Masjid Al-Ikhlas.
                </p>
            </div>
        </section>
        <!-- end section Koprotin -->

        <!-- JS Quantity Selector & Update Pesan WhatsApp -->
        <script>
            // Fungsi untuk meng-handle penambahan jumlah
            document.querySelectorAll('.quantity-increase').forEach(btn => {
                btn.addEventListener('click', function() {
                    const qtyElem = this.parentElement.querySelector('.quantity-value');
                    let currentValue = parseInt(qtyElem.getAttribute('data-value')) || 0;
                    currentValue++;
                    qtyElem.setAttribute('data-value', currentValue);
                    qtyElem.textContent = currentValue;
                });
            });

            // Fungsi untuk meng-handle pengurangan jumlah
            document.querySelectorAll('.quantity-decrease').forEach(btn => {
                btn.addEventListener('click', function() {
                    const qtyElem = this.parentElement.querySelector('.quantity-value');
                    let currentValue = parseInt(qtyElem.getAttribute('data-value')) || 0;
                    if (currentValue > 0) currentValue--;
                    qtyElem.setAttribute('data-value', currentValue);
                    qtyElem.textContent = currentValue;
                });
            });

            // Update link tombol Beli agar pesan draft WhatsApp mencakup jumlah pembelian
            document.querySelectorAll('.buy-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const card = this.closest('.article-card');
                    const qtyElem = card.querySelector('.quantity-value');
                    const quantity = parseInt(qtyElem.getAttribute('data-value')) || 0;
                    const itemName = this.getAttribute('data-item') || '';

                    // Jika jumlah belum dipilih, mencegah pengiriman dan menampilkan alert
                    if (quantity === 0) {
                        e.preventDefault();
                        alert('Silakan pilih jumlah item yang ingin Anda beli!');
                        return;
                    }

                    // Format pesan draft misalnya: "Saya mau beli Roti Kukus & Bakar sebanyak 3 pcs."
                    const message = encodeURIComponent(`Saya mau beli ${itemName} sebanyak ${quantity} pcs.`);
                    const baseUrl = this.href.split('?')[0];
                    this.href = baseUrl + '?text=' + message;
                });
            });
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                once: true
            });
        </script>


        <!-- Inisialisasi AOS (Animate On Scroll) -->
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                once: true
            });
        </script>


        <!-- Style tambahan untuk marquee -->
        <style>
            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .animate-marquee {
                display: inline-block;
                animation: marquee 10s linear infinite;
            }
        </style>

        <!-- Inisialisasi AOS (Animate On Scroll) -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                once: true
            });
        </script>


        <!-- Script AOS (Pastikan AOS sudah ter-load di layout, contohnya via CDN) -->
        <script>
            AOS.init({
                duration: 800,
                once: true
            });
        </script>

        <!-- Script JS untuk interaksi -->
        <script>
            // Fungsi toggle untuk deskripsi artikel, aktifkan hanya jika teks lebih dari 100 karakter
            function toggleDescription(btn) {
                const desc = btn.parentElement.querySelector('.desc');
                if (desc.textContent.trim().length <= 100) return; // Jika kurang dari 100 karakter, jangan lakukan apa-apa
                if (desc.classList.contains('line-clamp-3')) {
                    desc.classList.remove('line-clamp-3');
                    btn.textContent = "Tutup";
                } else {
                    desc.classList.add('line-clamp-3');
                    btn.textContent = "Baca Selengkapnya";
                }
            }

            // Tampilkan artikel ekstra dan reset form pencarian/filternya
            document.getElementById("show-more-btn").addEventListener("click", function() {
                // Tampilkan artikel ekstra
                const extraArticles = document.querySelectorAll('[id^="extra-article"]');
                extraArticles.forEach(article => article.classList.remove("hidden"));

                // Reset input search dan dropdown filter
                document.getElementById('search-input').value = "";
                document.getElementById('filter-kategori').selectedIndex = 0;
                document.getElementById('filter-penulis').selectedIndex = 0;

                // Scroll ke bagian artikel
                document.getElementById('articles-container').scrollIntoView({
                    behavior: 'smooth'
                });

                // Sembunyikan tombol show more
                this.classList.add("hidden");
            });
        </script>

        <!-- Script JS untuk Show More dan Toggle Description -->
        <script>
            // Fungsi untuk toggle deskripsi artikel (buka/tutup)
            function toggleDescription(btn) {
                const desc = btn.parentElement.querySelector('.desc');
                if (desc.classList.contains('line-clamp-3')) {
                    desc.classList.remove('line-clamp-3');
                    btn.textContent = "Tutup";
                } else {
                    desc.classList.add('line-clamp-3');
                    btn.textContent = "Baca Selengkapnya";
                }
            }

            // Tampilkan artikel ekstra saat tombol "Lihat Semua Artikel" ditekan
            const showMoreBtn = document.getElementById("show-more-btn");
            showMoreBtn.addEventListener("click", function() {
                const extraArticles = document.querySelectorAll('[id^="extra-article"]');
                extraArticles.forEach(article => article.classList.remove("hidden"));
                showMoreBtn.classList.add("hidden");
            });
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