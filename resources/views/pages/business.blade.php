@extends('layouts.marketing')

@section('title', 'Unit Bisnis - ABE Group')

@section('content')


{{-- HERO SECTION --}}
{{-- HERO SECTION --}}
<section class="hero-bisnis">

    {{-- Background Image --}}
    <img
        src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1920&auto=format&fit=crop"
        alt="Business Building"
        class="hero-bg">

    {{-- Overlay --}}
    <div class="hero-overlay"></div>

    {{-- CONTENT --}}
    <div class="hero-content">
        <h1>Unit Bisnis Kami</h1>

        <p>
            Portofolio bisnis yang kuat dan beragam, memberikan solusi terbaik di berbagai sektor industri.
        </p>

        <a href="#unit-bisnis" class="hero-btn">
            Lihat Detail Bisnis
        </a>
    </div>

</section>

{{-- 2. HIGHLIGHTS SECTION --}}
{{-- 2. HIGHLIGHTS SECTION --}}
<section class="highlight-section">
    <div class="highlight-container">

        @if($highlight)
        @php
        $words = explode(' ', $highlight->title);
        $lastTwo = count($words) > 2 ? implode(' ', array_slice($words, -2)) : $highlight->title;
        $prefix = count($words) > 2 ? implode(' ', array_slice($words, 0, -2)) : '';
        @endphp

        <div class="highlight-grid">

            {{-- TEKS --}}
            <div class="highlight-text">
                <span class="highlight-badge">
                    {{ $highlight->badge ?? 'Portofolio Kuat' }}
                </span>

                <h2 class="highlight-title">
                    {{ $prefix }}
                    <span>{{ $lastTwo }}</span>
                </h2>

                <p class="highlight-desc">
                    {{ $highlight->description_top }}
                </p>
            </div>

            {{-- GAMBAR --}}
            <div class="highlight-image">
                <div class="image-wrapper">
                    <img src="{{ asset('storage/' . $highlight->image) }}"
                        alt="{{ $highlight->title }}">

                    <div class="image-overlay"></div>
                </div>
            </div>

        </div>

        @else
        <p class="highlight-empty">Belum ada data highlight.</p>
        @endif

    </div>
</section>

<!-- UNIT BISNIS -->
<section id="unit-bisnis" class="unit-section">
    <div class="unit-container">

        {{-- Header --}}
        <div class="unit-header">
            <p class="unit-subtitle">Unit Bisnis</p>
            <h2 class="unit-title">
                Perusahaan di Bawah <span>ABE Group</span>
            </h2>
            <p class="unit-desc">
                Entitas bisnis yang saling bersinergi untuk memberikan layanan terbaik.
            </p>
        </div>

        @php
        $count = count($businesses);
        @endphp

        {{-- Grid --}}
        <div class="unit-grid">

            @foreach($businesses as $business)

            <div class="
                    @if($count == 1)
                        col-1
                    @elseif($count == 2)
                        col-2
                    @elseif($count == 3)
                        col-3
                    @else
                        col-4
                    @endif
                ">

                <article class="unit-card">

                    {{-- Gambar --}}
                    <div class="unit-image">
                        @if($business->image)
                        <img src="{{ asset('storage/' . $business->image) }}"
                            alt="{{ $business->name }}">
                        @else
                        <div class="no-image">No Image</div>
                        @endif
                    </div>

                    {{-- Konten --}}
                    <div class="unit-content">
                        <h3>{{ $business->name }}</h3>
                        <p>{{ $business->description }}</p>

                        <a href="{{ route('business.show', $business->slug) }}" class="unit-btn">
                            Pelajari Selengkapnya
                        </a>
                    </div>

                </article>

            </div>

            @endforeach

        </div>

    </div>
</section>


{{-- 4. TESTIMONIAL SECTION --}}
<section class="testimonial-section">
    <div class="container">

        <div class="section-header">
            <span class="badge">Testimoni</span>
            <h2>Kata Klien Kami</h2>
        </div>

        <div class="testimonial-grid">
            @foreach($testimonials as $item)
            <div class="testimonial-card">
                <div>
                    <div class="stars">
                        @for($i = 0; $i < 5; $i++)
                            <span class="{{ $i < ($item->rating ?? 5) ? 'active' : '' }}">★</span>
                            @endfor
                    </div>

                    <p class="testimonial-text">
                        "{{ $item->testimonial_text }}"
                    </p>
                </div>

                <div class="profile">
                    <div class="avatar">
                        @if($item->profile_image)
                        <img src="{{ asset('storage/' . $item->profile_image) }}"
                            alt="{{ $item->client_name }}">
                        @else
                        {{ strtoupper(substr($item->client_name, 0, 1)) }}
                        @endif
                    </div>
                    <div class="info">
                        <p class="name">{{ $item->client_name }}</p>
                        <p class="role">{{ $item->position }} - {{ $item->company }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<style>
    /* hero section */
    /* ================= HERO ================= */
    .hero-bisnis {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;

        margin-bottom: 100px;
        /* 🔥 JARAK KE KONTEN */
    }

    /* BACKGROUND */
    .hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.1);
        /* 🔥 cinematic */
    }

    /* 🔥 OVERLAY GELAP KEBIRUAN */
    .hero-overlay {
        position: absolute;
        inset: 0;

        background: linear-gradient(to bottom,
                rgba(15, 23, 42, 0.8),
                /* navy gelap */
                rgba(30, 58, 138, 0.8),
                /* biru */
                rgba(2, 6, 23, 0.95)
                /* hampir hitam */
            );
    }

    /* CONTENT */
    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 900px;
        padding: 0 20px;
    }

    /* TITLE */
    .hero-content h1 {
        font-size: clamp(3rem, 6vw, 5rem);
        font-weight: 800;
        color: #fff;
    }

    /* TEXT */
    .hero-content p {
        margin-top: 20px;
        font-size: 18px;
        color: #cbd5f5;
        line-height: 1.6;
    }

    /* BUTTON */
    .hero-btn {
        margin-top: 40px;
        display: inline-block;
        padding: 14px 32px;
        background: white;
        color: #1e3a8a;
        border-radius: 999px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }

    .hero-btn:hover {
        background: #e2e8f0;
    }


    /* unit bisnis */
    /* ================= SECTION ================= */
    .unit-section {
        padding: 60px 20px;
        background: #f8fafc;
    }

    /* ================= CONTAINER ================= */
    .unit-container {
        max-width: 900px;
        margin: auto;
    }

    /* ================= HEADER ================= */
    .unit-header {
        text-align: center;
        max-width: 520px;
        margin: 0 auto 40px;
    }

    .unit-subtitle {
        color: #f97316;
        font-weight: 600;
        font-size: 14px;
    }

    .unit-title {
        font-size: 26px;
        font-weight: 800;
        line-height: 1.3;
    }

    .unit-title span {
        color: #f97316;
    }

    .unit-desc {
        margin-top: 10px;
        color: #64748b;
        font-size: 14px;
    }

    /* ================= GRID (ASLI - TIDAK DIHAPUS) ================= */
    .unit-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 380px));
        gap: 24px;

        justify-content: center;
    }

    /* tablet */
    @media (min-width: 640px) {
        .unit-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* desktop */
    @media (min-width: 1024px) {
        .unit-grid {
            grid-template-columns: repeat(2, 380px);
            justify-content: center;
        }
    }

    /* ================= WRAPPER ================= */
    .unit-card-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    /* ================= CARD ================= */
    .unit-card {
        width: 100%;
        max-width: 380px;
        background: white;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #f1f5f9;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;

        display: flex;
        flex-direction: column;
    }

    .unit-card:hover {
        transform: translateY(-6px) scale(1.01);
    }

    /* ================= IMAGE ================= */
    .unit-image {
        height: 150px;
        overflow: hidden;
    }

    .unit-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* fallback */
    .no-image {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e2e8f0;
        font-size: 14px;
    }

    /* ================= CONTENT ================= */
    .unit-content {
        padding: 16px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }



    .unit-content h3 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .unit-content p {
        font-size: 13px;
        color: #64748b;
        line-height: 1.5;
        margin-bottom: 12px;

        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 🔥 BATASI 3 BARIS */
        -webkit-box-orient: vertical;
        overflow: hidden;

        word-break: break-word;
        /* 🔥 fix text panjang */
    }

    /* ================= BUTTON ================= */
    .unit-btn {
        margin-top: auto;
        display: block;
        text-align: center;
        padding: 10px;
        background: #2563eb;
        color: white;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.2s;
    }

    .unit-btn:hover {
        background: #1d4ed8;
    }

    /* ===================================================== */
    /* 🔥 TAMBAHAN LOGIC (TIDAK MENGHAPUS YANG ATAS) */
    /* ===================================================== */

    /* override grid jadi fleksibel kalau pakai col-* */
    .unit-grid {
        display: flex !important;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* wrapper dari blade */
    .unit-grid>div {
        display: flex;
        justify-content: center;
    }

    /* ================= LOGIC JUMLAH ================= */

    /* 1 item */
    .unit-grid .col-1 {
        width: 520px;
        /* 🔥 lebih besar */
    }

    /* 2 item */
    .unit-grid .col-2 {
        width: 400px;
        /* 🔥 lebih lega */
    }

    /* 3 item */
    .unit-grid .col-3 {
        width: 360px;
        /* 🔥 tidak kecil lagi */
    }

    /* 4+ item */
    .unit-grid .col-4 {
        width: 300px;
        /* 🔥 masih enak dilihat */
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .unit-grid>div {
            width: 100% !important;
        }
    }

    /* highlight*/
    /* ================= SECTION ================= */
    .highlight-section {
        padding: 80px 20px;
        margin-top: -100px;
        /* 🔥 naik ke atas */
        /* border-radius: 40px 40px 0 0; */
        box-shadow: 0 -10px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
    }

    /* ================= CONTAINER ================= */
    .highlight-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* ================= GRID ================= */
    .highlight-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
        align-items: center;
    }

    /* DESKTOP */
    @media (min-width: 1024px) {
        .highlight-grid {
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }
    }

    /* ================= TEXT ================= */
    .highlight-text {
        padding: 0 10px;
    }

    .highlight-badge {
        display: inline-block;
        background: #fff7ed;
        color: #ea580c;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 20px;
        overflow-wrap: break-word; /* Mematahkan kata hanya jika meluap */
        word-break: break-word; 
    }

    .highlight-title {
        font-size: 36px;
        font-weight: 800;
        color: #0f172a;
        line-height: 1.3;
        overflow-wrap: break-word; /* Mematahkan kata hanya jika meluap */
        word-break: break-word; 
    }

    .highlight-title span {
        color: #ea580c;
    }

    .highlight-desc {
        margin-top: 20px;
        font-size: 16px;
        color: #475569;
        line-height: 1.7;
        overflow-wrap: break-word; /* Mematahkan kata hanya jika meluap */

    }

    /* ================= IMAGE ================= */
    .highlight-image {
        display: flex;
        justify-content: center;
    }

    .image-wrapper {
        position: relative;
        width: 100%;
        max-width: 600px;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        transition: 0.3s;
    }

    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s;
    }

    .image-wrapper:hover img {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.3), transparent);
    }

    /* ================= EMPTY ================= */
    .highlight-empty {
        text-align: center;
        color: #94a3b8;
    }


    /* ================= SECTION ================= */
    .testimonial-section {
        padding: 6rem 0;
        background: linear-gradient(to bottom, #f8fafc, #eef2ff);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* ================= HEADER ================= */
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header .badge {
        display: inline-block;
        background: linear-gradient(135deg, #ff6900, #ff8c00);
        color: white;
        padding: 6px 16px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 12px;
        box-shadow: 0 4px 10px rgba(255, 105, 0, 0.3);
    }

    .section-header h2 {
        font-size: 36px;
        font-weight: 800;
        color: #1e293b;
    }

    /* ================= GRID ================= */
    .testimonial-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
    }

    /* ================= CARD ================= */
    .testimonial-card {
        background: #fff;
        padding: 28px;
        border-radius: 16px;
        border: 1px solid #f1f5f9;

        width: 100%;
        max-width: 320px;

        display: flex;
        flex-direction: column;
        justify-content: space-between;

        /* 🔥 SHADOW HALUS */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);

        /* 🔥 ANIMASI */
        transition: all 0.35s ease;
    }

    .testimonial-card>div:first-child {
        text-align: center;
    }

    /* 🔥 HOVER TIMBUL */
    .testimonial-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        border-color: #e0e7ff;
    }

    /* ================= STARS ================= */
    .stars {
        display: flex;
        justify-content: center;
        /* 🔥 center bintang */
        margin-bottom: 15px;
    }

    .stars span {
        color: #cbd5f5;
        font-size: 18px;
    }

    .stars .active {
        color: #f97316;
    }

    /* ================= TEXT ================= */
    .testimonial-text {
        font-size: 14px;
        color: #475569;
        margin-bottom: 25px;
        line-height: 1.7;
        font-style: italic;
    }

    /* ================= PROFILE ================= */
    .profile {
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: flex-start;
        /* 🔥 INI KUNCI */
        text-align: left;
    }

    /* 🔥 AVATAR UPGRADE */
    /* AVATAR BULAT */
    .avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        /* 🔥 bikin bulat */
        overflow: hidden;
        /* 🔥 potong gambar biar ikut bulat */

        display: flex;
        align-items: center;
        justify-content: center;

        background: linear-gradient(135deg, #1e3a8a, #3b82f6);
        color: white;
        font-weight: 600;
        font-size: 16px;

        flex-shrink: 0;
    }

    /* FOTO IKUT BULAT */
    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* 🔥 biar ga gepeng */
    }

    /* ================= TEXT PROFILE ================= */
    .name {
        font-weight: 600;
        color: #0f172a;
        margin: 0;
        font-size: 14px;
    }

    .role {
        font-size: 12px;
        color: #64748b;
        margin: 0;
    }

    /* FOTO */


    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .testimonial-card {
            max-width: 100%;
        }
    }
</style>

@include('partials.marketing.footer')
@endsection