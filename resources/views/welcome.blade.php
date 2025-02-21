@extends('layouts.app')

@section('content')
<main class=" flex flex-col overflow-hidden bg-[#f4f4f4] pb-32">
    <!-- Section untuk header -->
    <section class="bg-white">
        <div class=" container-sm mx-8 md:mx-auto flex justify-between items-center max-w-[85%] w-[925px]">
            <img class="main-header-image" src="{{ asset('assets/UntitledPage3/e219d07362486683403a2cb083b5ccdf.png') }}" alt="main image" />
            <img class="menu-icon" src="{{ asset('assets/UntitledPage3/menu_icon.svg') }}" alt="menu icon" />
        </div>
    </section>

    <!-- Section untuk menampilkan gallery atau produk -->
    <section class="fles flex-col align-items-center container-sm mx-8 md:mx-auto mt-14">
        <div class="flex flex-col gap-8">
            <div class="min-h-[240px] min-w-full bg-gray-300 rounded-xl"></div>
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-[460px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[460px] min-h-[126px] bg-gray-300 rounded-xl"></div>
            </div>
            <div class="min-h-[240px] min-w-full bg-gray-300 rounded-xl"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full md:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
            </div>
        </div>
    </section>

    <!-- Section untuk sticky footer navigation -->
    <section class="footer-navbar">
        <div class="footer-colum mt-14 min-h-20 w-full fixed bottom-0">
            @include('partials.footer') <!-- Meng-include footer di sini -->
        </div>
    </section>
</main>
@endsection
