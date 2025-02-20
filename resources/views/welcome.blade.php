@extends('layouts.app')

@section('content')
<main class="main-content">
    <!-- Section untuk header -->
    <section class="header-gallery">
        <div class="header-image-row">
            <img class="main-header-image" src="{{ asset('assets/UntitledPage3/e219d07362486683403a2cb083b5ccdf.png') }}" alt="main image" />
            <img class="menu-icon" src="{{ asset('assets/UntitledPage3/menu_icon.svg') }}" alt="menu icon" />
        </div>
    </section>

    <!-- Section untuk menampilkan gallery atau produk -->
    <section class="fles flex-col align-items-center gallery-display mt-14">
        <div class="flex flex-col gap-8">
            <div class="min-h-[240px] min-w-full bg-gray-300 rounded-xl"></div>
            <div class="flex flex-col lg:flex-row gap-3">
                <div class="w-[460px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-[460px] min-h-[126px] bg-gray-300 rounded-xl"></div>
            </div>
            <div class="min-h-[240px] min-w-full bg-gray-300 rounded-xl"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 ">
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
                <div class="w-full lg:w-[260px] min-h-[126px] bg-gray-300 rounded-xl"></div>
            </div>
        </div>
    </section>

    <!-- Section untuk sticky footer navigation -->
    <section class="footer-navbar">
        <div class="footer-column">
            @include('partials.footer') <!-- Meng-include footer di sini -->
        </div>
    </section>
</main>
@endsection
