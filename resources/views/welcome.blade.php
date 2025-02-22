@extends('layouts.app')

@section('content')
<main class="flex flex-col overflow-hidden bg-[#f4f4f4] pb-32">
    <!-- Section untuk header -->
    <section class="bg-white">
        <div class="container-sm mx-8 md:mx-auto flex justify-between items-center max-w-[85%] w-[925px]">
            <img class="main-header-image" src="{{ asset('assets/UntitledPage3/e219d07362486683403a2cb083b5ccdf.png') }}" alt="main image" />
            <img class="menu-icon" src="{{ asset('assets/UntitledPage3/menu_icon.svg') }}" alt="menu icon" />
        </div>
    </section>

    <!-- Section untuk menampilkan gallery atau produk -->
    <section class="flex flex-col align-items-center container-sm mx-8 md:mx-auto mt-14">
        <div class="flex flex-col gap-8">
            <!-- Carousel Section -->
            <div id="default-carousel" class="relative w-full overflow-hidden" data-carousel="slide">
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
            <div class="flex flex-col md:flex-row gap-3 justify-between">
                <!-- Bandung Time -->
                <div class="time-card w-full md:w-[460px] min-h-[150px] bg-white rounded-xl shadow-lg flex justify-between items-center px-6 py-4">
                    <div class="flex flex-col text-left">
                        <h3 class="text-lg font-medium text-black">Bandung</h3>
                        <p id="bandung-date" class="text-md font-light text-gray-500"></p>
                    </div>
                    <div class="flex flex-col text-right">
                        <p id="bandung-time" class="text-4xl font-bold text-black"></p>
                    </div>
                </div>

                <!-- Mekkah Time -->
                <div class="time-card w-full md:w-[460px] min-h-[150px] bg-white rounded-xl shadow-lg flex justify-between items-center px-6 py-4">
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
            <div class="min-h-[240px] min-w-full bg-gray-300 rounded-xl"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
            </div>
        </div>
    </section>

    <!-- Section untuk sticky footer navigation -->
    <section class="footer-navbar">
    <div class="footer-colum mt-14 min-h-20 w-full fixed bottom-0">
            @include('partials.footer') <!-- Meng-include footer yang telah dipisahkan -->
        </div>
    </section>

</main>

<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('[data-carousel-item]');
    const totalItems = items.length;

    // Function to move to the next item
    function moveToNext() {
        // Remove 'active' class from current item
        items[currentIndex].classList.add('hidden');
        
        // Move to the next item, loop back to the first item if we're at the last one
        currentIndex = (currentIndex + 1) % totalItems;
        
        // Show the next item
        items[currentIndex].classList.remove('hidden');
    }

    // Automatically move to the next item every 3 seconds (3000ms)
    setInterval(moveToNext, 3000);

    // Update Live Time for Bandung and Mekkah
    function updateTime() {
        // Bandung (UTC+7)
        let bandungTime = new Date().toLocaleTimeString("en-US", { timeZone: "Asia/Jakarta", hour: '2-digit', minute: '2-digit' });
        let bandungDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Jakarta", weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        document.getElementById("bandung-time").innerText = bandungTime; // Display only time (HH:MM)
        document.getElementById("bandung-date").innerText = bandungDate; // Display date

        // Mekkah (UTC+3)
        let mekkahTime = new Date().toLocaleTimeString("en-US", { timeZone: "Asia/Riyadh", hour: '2-digit', minute: '2-digit' });
        let mekkahDate = new Date().toLocaleDateString("en-US", { timeZone: "Asia/Riyadh", weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
        document.getElementById("mekkah-time").innerText = mekkahTime; // Display only time (HH:MM)
        document.getElementById("mekkah-date").innerText = mekkahDate; // Display date
    }

    // Update time every second
    setInterval(updateTime, 1000);

    // Initial call to set the time immediately
    updateTime();
</script>

@endsection
