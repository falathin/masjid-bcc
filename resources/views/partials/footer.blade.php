    @php
        // Ambil jadwal terbaru berdasarkan waktu dibuat
        use App\Models\JadwalJumat;
        $jadwal = JadwalJumat::latest('created_at')->first();
    @endphp

    <!-- Footer Section (Contoh: resources/views/partials/footer.blade.php) -->
    <footer class="bg-gray-900 text-white px-6 sm:px-12 py-12 overflow-x-hidden" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Profil Masjid -->
            <div data-aos="fade-right" data-aos-delay="100" data-aos-anchor-placement="top-bottom">
                <h3 class="font-bold text-3xl tracking-wide">Masjid Al-Ikhlas</h3>
                <p class="text-gray-400 mt-4 leading-relaxed">
                    Masjid Al-Ikhlas adalah pusat kegiatan keagamaan dan sosial yang berdiri sejak tahun 2022 di BCC.
                    Bergabunglah bersama kami dalam melaksanakan ibadah dan membangun komunitas yang harmonis.
                </p>

                {{-- <form class="flex items-center mt-6" action="#" method="POST">
                    @csrf
                    <div class="w-full">
                        <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                            for="email-subscribe">
                            Langganan Newsletter
                        </label>
                        <div class="relative">
                            <input id="email-subscribe" type="email" placeholder="Masukkan Email Anda"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                            <button type="submit"
                                class="bg-teal-500 hover:bg-teal-400 text-white px-4 py-2 text-sm font-bold rounded absolute top-0 right-0 my-2 mr-2 transition duration-300">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form> --}}
            </div>

            <!-- Navigasi Cepat -->
            <div data-aos="fade-up" data-aos-delay="200" data-aos-anchor-placement="top-bottom">
                <h5 class="uppercase tracking-wider font-semibold text-gray-400">Navigasi Cepat</h5>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="{{ route('home') }}"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="#pray"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Jadwal Sholat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bumm') }}"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            BUMM
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#infaq"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Infaq
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Kontak
                        </a>
                    </li>
                    <li>
                        <button onclick="openJumatModal()"
                            class="flex items-center text-gray-400 hover:text-teal-400 transition-colors duration-300 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Jadwal Jumat
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Kontak dan Media Sosial -->
            <div data-aos="fade-left" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
                <h5 class="uppercase tracking-wider font-semibold text-gray-400">Kontak</h5>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                        </svg>
                        <span class="ml-3 text-gray-400">
                            <a href="https://maps.app.goo.gl/SmmmniMrLkKib5N79">
                                Buahbatu, Kec. Bojongsoang, Kab. Bandung, Jawa Barat 40287
                            </a>
                        </span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697l-5.414-5.414L14.594,13.994z" />
                        </svg>
                        <span class="ml-3 text-gray-400">
                            +62 816-973-677
                        </span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-400" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                        </svg>
                        <span class="ml-3 text-gray-400">
                            contact@masjidalikhlasbcc.com
                        </span>
                    </li>
                </ul>

                <!-- Media Sosial -->
                <div class="mt-6 flex items-center space-x-4">
                    <a href="https://www.instagram.com/alikhlasbcc?igsh=eTNrMW9iYTN1NTVr" target="_blank"
                        rel="noopener noreferrer"
                        class="text-teal-400 hover:text-white transition-colors duration-300" title="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-6 h-6">
                            <path
                                d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5z" />
                            <path d="M12 7a5 5 0 100 10 5 5 0 000-10zm0 1.5a3.5 3.5 0 110 7 3.5 3.5 0 010-7z" />
                            <circle cx="17.5" cy="6.5" r="1.25" />
                        </svg>
                    </a>
                    <span class="ml-3 text-gray-400">@alikhlasbcc</span>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 mt-12 pt-6 text-center">
            <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Masjid Al-Ikhlas. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Jadwal Jumat Modal (Popup) -->
    <div id="jumatModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-60 backdrop-blur-sm">
        <div
            class="bg-gradient-to-br from-white via-green-50 to-white rounded-2xl shadow-2xl max-w-2xl w-full p-8 relative border border-green-200">
            <!-- Tombol close -->
            <button onclick="closeJumatModal()"
                class="absolute top-3 right-4 text-gray-600 hover:text-red-500 text-2xl focus:outline-none transition duration-200 ease-in-out">
                &times;
            </button>
            <!-- Judul Modal -->
            <h2 class="text-3xl font-semibold text-center text-green-800 mb-4 tracking-wide">
                Jadwal Jumat Minggu Ini
            </h2>
            <!-- Konten Jadwal -->
            @if (isset($jadwal))
                <div class="mt-6 bg-white rounded-2xl shadow-md p-6 border border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m0 0a4 4 0 004 4h2a4 4 0 004-4zm0 0v-2a4 4 0 014-4h2a4 4 0 014 4v2m0 0a4 4 0 01-4 4h-2a4 4 0 01-4-4z" />
                        </svg>
                        Jadwal Imam & Muadzin Jumat
                    </h2>
                    <p class="text-sm text-gray-500 mb-4">
                        {{ \Carbon\Carbon::parse($jadwal->tanggal)->format('l, d F Y') }}</p>
                    <ul class="space-y-3 text-gray-700 text-base">
                    <li class="flex items-center gap-3">
    <span class="text-green-600 font-medium">🕌 Imam:</span> {{ $jadwal->imam }}
</li>
<li class="flex items-center gap-3">
    <span class="text-blue-600 font-medium">📢 Muadzin & Bilal:</span> {{ $jadwal->muadzin }}
</li>
<li class="flex items-center gap-3">
    <span class="text-purple-600 font-medium">🎤 Khotib:</span> {{ $jadwal->khotib }}
</li>

                    </ul>
                </div>
            @else
                <div class="mt-6 text-center text-gray-500">
                    <p>Tidak ada data jadwal terbaru.</p>
                </div>
            @endif
            <div class="mt-6 text-center">
                <button onclick="closeJumatModal()"
                    class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition duration-300 shadow">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Script Modal Jadwal Jumat -->
    <script>
        function openJumatModal() {
            const modal = document.getElementById('jumatModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            // Optional: prevent background scrolling
            document.body.style.overflow = 'hidden';
        }

        function closeJumatModal() {
            const modal = document.getElementById('jumatModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    </script>