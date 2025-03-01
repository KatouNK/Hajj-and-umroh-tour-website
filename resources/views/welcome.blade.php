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

<main id="main" class="flex flex-col overflow-hidden lg:mx-auto bg-gray-300 pb-32 transition-all duration-300">
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
    <div class="container relative mx-auto px-4 md:px-8 lg:px-12 mt-20 max-w-[1000px] bg-[#f4f4f4]">
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
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <!-- Live Time Bandung and Mekkah -->
                <div class="flex flex-col lg:flex-row gap-3 justify-between">
                    <!-- Bandung Time -->
                    <div class="time-card w-full lg:w-[460px] min-h-[150px] bg-white rounded-xl shadow-xl flex justify-between items-center px-6 py-4">
                        <div class="flex flex-col text-left">
                            <h3 class="text-lg font-medium text-black">Bandung</h3>
                            <p id="bandung-date" class="text-md font-light text-gray-500"></p>
                        </div>
                        <div class="flex flex-col text-right">
                            <p id="bandung-time" class="text-4xl font-bold text-black"></p>
                        </div>
                    </div>

                    <!-- Mekkah Time -->
                    <div class="time-card w-full lg:w-[460px] min-h-[150px] bg-white rounded-xl shadow-xl flex justify-between items-center px-6 py-4">
                        <div class="flex flex-col text-left">
                            <h3 class="text-lg font-medium text-purple-500">Mekkah</h3>
                            <p id="mekkah-date" class="text-md font-light text-gray-500"></p>
                        </div>
                        <div class="flex flex-col text-right">
                            <p id="mekkah-time" class="text-4xl font-bold text-black"></p>
                        </div>
                    </div>
                </div>

                <!-- Placeholder for other sections -->
                <div class="min-h-[240px] min-w-full bg-gray-300 shadow-xl rounded-xl"></div>
                <div class="grid grid-cols-1 justify-between lg:grid-cols-3 gap-6">
                    <!-- Al-Quran Button -->
                    <a href="#" class="w-full lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-green-50 transition-all">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/alquran-icon.png') }}" alt="Al-Quran Icon">
                        <p class="text-lg font-medium text-gray-700">Al-Qur'an</p>
                        <p class="text-xs text-gray-500">30 Juz</p>
                    </a>

                    <!-- Doa Button -->
                    <a href="#" class="w-full lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-purple-50 transition-all">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/doa-icon.png') }}" alt="Doa Icon">
                        <p class="text-lg font-medium text-purple-600">Doa</p>
                        <p class="text-xs text-gray-500">Kumpulan Doa-doa</p>
                    </a>

                    <!-- Zikir Button -->
                    <a href="#" class="w-full lg:w-[285px] min-h-[126px] bg-white shadow-xl rounded-xl flex flex-col items-center justify-center p-4 hover:bg-blue-50 transition-all">
                        <img class="w-12 h-12 object-cover mb-2" src="{{ asset('assets/zikir-icon.png') }}" alt="Zikir Icon">
                        <p class="text-lg font-medium text-blue-500">Dzikir</p>
                        <p class="text-xs text-gray-500">Zikir Counter</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="footer-navbar fixed bottom-10 max-w-[1000px] w-full">
           
                @include('partials.footer') <!-- Meng-include footer yang telah dipisahkan -->
            
        </section>
    </div>
</main>

        <!-- Section untuk sticky footer navigation -->

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
