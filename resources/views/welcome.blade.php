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
    <section class="gallery-display">
        <div class="gallery-column">
            <div class="color-block"></div>
            <div class="image-tiles-row">
                <div class="color-tile"></div>
                <div class="color-tile-1"></div>
            </div>
            <div class="color-indicator"></div>
            <div class="color-grid">
                <div class="color-grid-item"></div>
                <div class="color-grid-item"></div>
                <div class="color-grid-item"></div>
                <div class="color-grid-item"></div>
                <div class="color-grid-item"></div>
                <div class="color-grid-item"></div>
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
