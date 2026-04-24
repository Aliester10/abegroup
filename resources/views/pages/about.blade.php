@extends('layouts.marketing')

@section('title', 'Tentang Kami - ABE Group')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/80 to-blue-900/90"></div>
        <!-- Diagonal Shape Overlay -->
        <div class="absolute inset-0 bg-gradient-to-tl from-transparent via-transparent to-blue-950/50 transform -skew-y-12 origin-bottom"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <!-- Label -->
        <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-6 border border-white/20">
            Profil Perusahaan
        </span>

        <!-- Title -->
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Tentang <span class="text-orange-500">ABE Group</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
            Memimpin transformasi digital dengan inovasi berkelanjutan dan komitmen terhadap keunggulan dalam setiap solusi yang kami berikan.
        </p>

        <!-- CTA Button -->
        <a href="#overview" class="inline-flex items-center px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            Jelajahi Lebih Lanjut
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<section class="about-section">
    <div class="container">

        @if($about)
        <div class="about-wrapper">

            <div class="about-text">
                <h2 class="about-title">
                    @php
                    $words = explode(' ', $about->nama);
                    $totalWords = count($words);

                    if ($totalWords > 2) {
                    // Ambil kata-kata awal (semua kecuali 2 terakhir)
                    $firstPart = implode(' ', array_slice($words, 0, $totalWords - 2));
                    // Ambil 2 kata terakhir
                    $lastPart = implode(' ', array_slice($words, -2));

                    echo $firstPart . ' <span style="color: #D35400;">' . $lastPart . '</span>';
                    } else {
                    // Jika kata kurang dari atau sama dengan 2, warnai semua
                    echo '<span style="color: #D35400;">' . $about->nama . '</span>';
                    }
                    @endphp
                </h2>

                <div class="about-description">
                    {{ $about->deskripsi }}
                </div>

                <div class="about-values">
                    @php
                    $listValues = explode(', ', $about->value);
                    @endphp

                    @foreach($listValues as $item)
                    <div class="value-item">
                        <div class="value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="value-text">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="about-image-wrapper">
                <div class="image-bg"></div>
                <img
                    src="{{ asset('storage/' . $about->gambar) }}"
                    alt="{{ $about->nama }}"
                    class="about-image">
            </div>

        </div>
        @else
        <p class="text-center text-gray-500">Data about belum tersedia</p>
        @endif

    </div>
</section>


@endsection

<style>
    .about-section {
        /* Menambah jarak luar ke atas (banner) */
        margin-top: 2rem;

        /* Padding dalam tetap 4rem */
        padding: 4rem 0;
        background-color: #fff;
    }

    /* Tambahkan ini agar di HTML kamu cukup panggil class ini */
    .text-orange-dark {
        color: #D35400;
        /* Warna orange gelap (Pumpkin) */
    }

    /* Sisa CSS kamu tetap sama */
    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .about-wrapper {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    @media (min-width: 1024px) {
        .about-wrapper {
            flex-direction: row;
            align-items: flex-start;
        }
    }

    .about-text {
        flex: 1;
    }

    .about-title {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.1rem;
        line-height: 1.2;
    }

    @media (min-width: 1024px) {
        .about-title {
            font-size: 2.5rem;
        }
    }

    .about-description {
        color: #4b5563;
        line-height: 1.4;
        margin-bottom: 1rem;
        text-align: justify;
        white-space: pre-line;
    }

    .about-values {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    @media (min-width: 640px) {
        .about-values {
            grid-template-columns: 1fr 1fr;
        }
    }

    .value-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .value-icon {
        background-color: #f97316;
        border-radius: 9999px;
        padding: 0.25rem;
        flex-shrink: 0;
    }

    .icon {
        width: 0.75rem;
        height: 0.75rem;
        color: #fff;
    }

    .value-text {
        color: #374151;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .about-image-wrapper {
        flex: 1;
        position: relative;
        width: 100%;
    }

    .image-bg {
        position: absolute;
        inset: -12px;
        background-color: #f3f4f6;
        border-radius: 1rem;
        z-index: -1;
    }

    .about-image {
        width: 100%;
        height: 420px;
        /* lebih kecil, proporsional */
        object-fit: cover;
        border-radius: 1rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    @media (min-width: 1024px) {
        .about-image {
            height: 500px;
            /* versi desktop */
        }
    }
</style>