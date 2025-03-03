@extends('layouts.app')

@section('content')
<!-- Sidebar -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden transition-opacity duration-300 z-40"></div>
<section class="sidebar">
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="p-4">
            <div class="flex justify-between">
                <h2 class="text-lg font-semibold">Sudah punya akun?</h2>
                <button id="close-sidebar" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <button class="mt-2 w-full bg-green-500 text-white py-2 rounded">Masuk</button>
        </div>
        <div class="mt-6 px-4">
            <h3 class="text-md font-semibold">TENTANG KAMI</h3>
            <ul class="space-y-2 mt-2">
                <li class="flex items-center"><a href="#">Profil</a></li>
                <li class="flex items-center"><a href="#">Layanan</a></li>
                <li class="flex items-center"><a href="#">Galeri</a></li>
                <li class="flex items-center"><a href="#">Kontak</a></li>
            </ul>
        </div>
    </div>
</section>

<main id="main" class="flex flex-col overflow-hidden lg:mx-auto bg-[#f4f4f4] pb-32 transition-all duration-300">

    <!-- Section untuk header -->
    <section class="bg-white fixed w-full max-w-[1000px] z-20">
        <div class="flex max-w-[1000px] justify-between mx-auto items-center w-full">
            <img class="main-header-image" src="{{ asset('assets/UntitledPage3/e219d07362486683403a2cb083b5ccdf.png') }}" alt="main image" />
            <button id="hamburger" class="p-4">
                <img class="menu-icon" src="{{ asset('assets/UntitledPage3/menu_icon.svg') }}" alt="menu icon" />
            </button>
        </div>
    </section>

    <!-- Container for content -->
    <div class="container relative mx-auto px-4 md:px-8 lg:px-12 mt-20 max-w-[1000px]">
        <!-- Section untuk menampilkan gallery atau produk -->
        <section class="flex flex-col align-items-center mt-14">
            <div class="flex flex-col gap-8">

                <!-- Carousel Section -->
                <div id="default-carousel" class="relative w-full overflow-hidden shadow-xl" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-[400px] overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="carousel-item absolute inset-0 transition-all duration-700 ease-in-out transform hidden" data-carousel-item>
                            <img src="{{ asset('assets/arab-people-with-camel-caravan.jpg') }}" class="w-full h-full object-cover" alt="carousel image 1">
                        </div>
                        <!-- Item 2 -->
                        <div class="carousel-item absolute inset-0 transition-all duration-700 ease-in-out transform hidden" data-carousel-item>
                            <img src="{{ asset('assets/business-partners-team-walking-down-discussing-work.jpg') }}" class="w-full h-full object-cover" alt="carousel image 2">
                        </div>
                        <!-- Item 3 -->
                        <div class="carousel-item absolute inset-0 transition-all duration-700 ease-in-out transform hidden" data-carousel-item>
                            <img src="{{ asset('assets/women-wearing-hijab-having-good-time.jpg') }}" class="w-full h-full object-cover" alt="carousel image 3">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                </div>

                <!-- Live Time Bandung and Mekkah -->
                <div class="flex flex-col lg:flex-row gap-6 justify-between"> <!-- Adjusted gap -->
                    <!-- Bandung Time -->
                    <div class="time-card w-full lg:w-[460px] min-h-[150px] bg-white rounded-xl shadow-xl flex justify-between items-center px-6 py-4">
                        <div class="flex flex-col text-left">
                            <h3 class="text-2xl font-bold text-black">Bandung</h3>
                            <p id="bandung-date" class="text-md font-light text-gray-500"></p>
                        </div>
                        <div class="flex flex-col text-right">
                            <p id="bandung-time" class="text-4xl font-bold text-black"></p>
                        </div>
                    </div>

                    <!-- Mekkah Time -->
                    <div class="time-card w-full lg:w-[460px] min-h-[150px] bg-white rounded-xl shadow-xl flex justify-between items-center px-6 py-4">
                        <div class="flex flex-col text-left">
                            <h3 class="text-2xl font-bold text-black-500">Mekkah</h3>
                            <p id="mekkah-date" class="text-md font-light text-gray-500"></p>
                        </div>
                        <div class="flex flex-col text-right">
                            <p id="mekkah-time" class="text-4xl font-bold text-black"></p>
                        </div>
                    </div>
                </div>

                <!-- Login Selection Container -->
                <div class="min-h-[120px] min-w-full bg-white shadow-xl rounded-xl p-4 flex items-center justify-between">
                    <!-- Left Section: Text and "Masuk disini" -->
                    <div class="flex flex-col items-start space-y-0">
                        <p class="text-purple-600 text-md font-semibold">Sudah punya akun?</p>
                        <p class="text-3xl font-bold text-gray-600">Masuk disini</p>
                    </div>

                    <!-- Right Section: Button -->
                    <a href="#" class="bg-green-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-600 transition-all">
                        Masuk
                    </a>
                </div>

                <!-- Fitur Lainnya Section -->
                <section class="text-left">
                    <h3 class="text-xl font-semibold text-gray-800">Fitur Lainnya</h3>
                </section>

                <!-- Placeholder for other sections -->
                <div class="flex flex-wrap justify-between sm:justify-start gap-6 lg:gap-2 mt-1">
                    <!-- Al-Quran Button -->
                    <a href="#" class="w-full sm:w-[48%] lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-white-50 transition-all transform hover:scale-105">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/quran.png') }}" alt="Al-Quran Icon">
                        <p class="text-lg font-medium text-gray-700">Al-Qur'an</p>
                        <p class="text-xs text-gray-500">30 Juz</p>
                    </a>

                    <!-- Doa Button -->
                    <a href="#" class="w-full sm:w-[48%] lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-white-50 transition-all transform hover:scale-105">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/praying.png') }}" alt="Doa Icon">
                        <p class="text-lg font-medium text-black-600">Doa</p>
                        <p class="text-xs text-gray-500">Kumpulan Doa-doa</p>
                    </a>

                    <!-- Zikir Button -->
                    <a href="#" class="w-full sm:w-[48%] lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-white-50 transition-all transform hover:scale-105">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/tasbih.png') }}" alt="Zikir Icon">
                        <p class="text-lg font-medium text-black-500">Dzikir</p>
                        <p class="text-xs text-gray-500">Zikir Counter</p>
                    </a>
                </div>

                <h3 class="text-xl font-semibold text-gray-800"> Paket Haji & jadwal keberangkatan</h3>

                <div class="">
                    <h2 class="text-2xl font-semibold mb-2">Pilih Jadwal Keberangkatan</h2>
                    <p class="text-gray-600 mb-6">Sesuaikan dengan keinginan anda untuk melihat paket tersedia</p>
                
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Bulan -->
                        <div class="relative">
                            <button id="month-button" class="block w-full p-3 border border-gray-300 rounded-md bg-[#aaaa] text-white text-left focus:outline-none">
                                <div class="flex justify-between">
                                    <span>Bulan</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </div>
                            </button>
                            <div id="month-drawer" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20">
                                <ul class="max-h-60 overflow-y-auto">
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="januari">Januari</li>
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="februari">Februari</li>
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="maret">Maret</li>
                                </ul>
                            </div>
                        </div>
                
                        <!-- Paket -->
                        <div class="relative">
                            <button id="package-button" class="block w-full p-3 border border-gray-300 rounded-md bg-[#aaaa] text-white text-left focus:outline-none">
                                <div class="flex justify-between">
                                    <span>Paket</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </div>
                            </button>
                            <div id="package-drawer" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20">
                                <ul class="max-h-60 overflow-y-auto">
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="paket1">Paket 1</li>
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="paket2">Paket 2</li>
                                </ul>
                            </div>
                        </div>
                
                        <!-- Lokasi -->
                        <div class="relative">
                            <button id="location-button" class="block w-full p-3 border border-gray-300 rounded-md bg-[#aaaa] text-white text-left focus:outline-none">
                                <div class="flex justify-between">
                                    <span>Lokasi</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </div>
                            </button>
                            <div id="location-drawer" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20">
                                <ul class="max-h-60 overflow-y-auto">
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="lokasi1">Lokasi 1</li>
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="lokasi2">Lokasi 2</li>
                                </ul>
                            </div>
                        </div>
                
                        <!-- Jumlah Hari -->
                        <div class="relative">
                            <button id="days-button" class="block w-full p-3 border border-gray-300 rounded-md bg-[#aaaa] text-white text-left focus:outline-none">
                                <div class="flex justify-between">
                                    <span>Jumlah Hari</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </div>
                            </button>
                            <div id="days-drawer" class="absolute left-0 right-0 mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden z-20">
                                <ul class="max-h-60 overflow-y-auto">
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="1">1 Hari</li>
                                    <li class="p-3 hover:bg-gray-100 cursor-pointer" data-value="2">2 Hari</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                             

                <!-- Packages Section -->
                <div class="space-y-6">
                    <!-- Package 1 -->
                    <div class="bg-white shadow-md rounded-xl mt-4 p-4 flex gap-4">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/package1.jpg') }}" alt="Package Image" class="w-[120px] h-[100px] object-cover rounded-md" />
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold text-gray-800">LCU UMROH HEMAT PASTI BERANGKAT 16D INDIGO SPECIAL LAILATUL QADR</h3>
                            <p class="text-sm text-gray-500 mt-2">Berangkat 20 Maret 2025</p>
                            <p class="text-lg font-bold text-purple-700 mt-2">Rp. 35,9 Jt</p>
                            <p class="text-sm text-gray-500">Sisa 1 Seat Lagi</p>
                        </div>
                    </div>

                    <!-- Package 2 -->
                    <div class="bg-white shadow-md rounded-xl mt-4 p-4 flex gap-4">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/package2.jpg') }}" alt="Package Image" class="w-[120px] h-[100px] object-cover rounded-md" />
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold text-gray-800">PROVEN 16D WY SPESIAL LAILATUL QADR</h3>
                            <p class="text-sm text-gray-500 mt-2">Berangkat 20 Maret 2025</p>
                            <p class="text-lg font-bold text-purple-700 mt-2">Rp. 44,9 Jt</p>
                            <p class="text-sm text-gray-500">Sisa 2 Seat Lagi</p>
                        </div>
                    </div>
                </div>



                <h3 class="text-xl font-semibold text-gray-800">Artikel Terbaru</h3>

                <!-- Berita Terbaru Section (Simplified as Blocks) -->
                <div class="mt-2">
                    <!-- Article 1 -->
                    <div class="bg-white shadow-xl rounded-lg p-4 mb-4">
                        <div class="flex flex-col items-left">
                            <img src="{{ asset('assets/artikel1.jpg') }}" alt="Article Image" class="w-full object-cover rounded-lg mb-4">
                            <div class="w-2/3 text-left">
                                <h4 class="text-lg font-semibold text-black">Umur 2 Bulan Sudah Haji? Kini Saudi Larang Anak Ikut Berhaji</h4>
                                <p class="text-sm text-gray-500">14 Februari 2025</p>
                                <a href="#" class="text-sm text-blue-500 hover:underline">Klik untuk membaca</a>
                            </div>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="bg-white shadow-xl rounded-lg p-4 mb-4 mt-4">
                        <div class="flex flex-col items-left">
                            <div class="w-2/3 text-left">
                                <h4 class="text-lg font-semibold text-black">Saudi Umumkan Aturan Baru Haji 2025</h4>
                                <p class="text-sm text-gray-500">1 Maret 2025</p>
                                <a href="#" class="text-sm text-blue-500 hover:underline">Klik untuk membaca</a>
                            </div>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="bg-white shadow-xl rounded-lg p-4 mb-4 mt-4">
                        <div class="flex flex-col items-left">
                            <div class="w-2/3 text-left">
                                <h4 class="text-lg font-semibold text-black">Saudi Umumkan Aturan Baru Haji 2025</h4>
                                <p class="text-sm text-gray-500">1 Maret 2025</p>
                                <a href="#" class="text-sm text-blue-500 hover:underline">Klik untuk membaca</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-navbar fixed bottom-10 max-w-[1000px] w-full">
            @include('partials.footer') 
        </section>
    </div>
</main>

<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('[data-carousel-item]');
    const totalItems = items.length;

    // Function to move to the next item
    function moveToNext() {
        items[currentIndex].classList.add('hidden');
        currentIndex = (currentIndex + 1) % totalItems;
        items[currentIndex].classList.remove('hidden');
    }

    setInterval(moveToNext, 3000);

    // Update Live Time for Bandung and Mekkah
    function updateTime() {
        // Bandung (UTC+7)
        let bandungTime = new Date().toLocaleTimeString("en-US", { timeZone: "Asia/Jakarta", hour: '2-digit', minute: '2-digit' });
        let bandungDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Jakarta", weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        document.getElementById("bandung-time").innerText = bandungTime;
        document.getElementById("bandung-date").innerText = bandungDate;

        // Mekkah (UTC+3)
        let mekkahTime = new Date().toLocaleTimeString("en-US", { timeZone: "Asia/Riyadh", hour: '2-digit', minute: '2-digit' });
        let mekkahDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Riyadh", weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        document.getElementById("mekkah-time").innerText = mekkahTime;
        document.getElementById("mekkah-date").innerText = mekkahDate;
    }

    setInterval(updateTime, 1000);
    updateTime();
</script>

@endsection
