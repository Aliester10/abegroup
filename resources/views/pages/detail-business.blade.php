@extends('layouts.marketing')

@section('content')

{{-- HERO --}}
<section class="business-hero">

    {{-- 🔥 BACK BUTTON --}}
    <a href="{{ route('business') }}" class="back-btn">
        ← Kembali
    </a>

    <img src="{{ asset('storage/' . $business->image) }}" class="hero-bg">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>{{ $business->name }}</h1>
        <p>{{ $business->category }}</p>
    </div>
</section>


{{-- CONTENT --}}
<section class="business-content">
    <div class="container">

        <div class="business-card">

            <h2>{{ strtoupper($business->name) }}</h2>
            <p class="category">{{ $business->category }}</p>

            {{-- ✅ LINK ATAS (CUMA 1 - WEBSITE) --}}
            @if($business->website_link)
            <p class="link">
                <strong>Kunjungi Perusahaan:</strong><br>
                <a href="{{ $business->website_link }}" target="_blank">
                    {{ $business->website_link }}
                </a>
            </p>
            @endif

            <div class="description">
                <p>{{ $business->description }}</p>
            </div>

            {{-- ✅ BOX CUMA 1 (ECOMMERCE SAJA) --}}
            @if($business->ecomerce_link)
            <div class="business-box">

                <div class="icon">🛒</div>

                <div>
                    <h4>Official Store</h4>
                    <p>Beli produk kami langsung melalui marketplace resmi.</p>

                    <a href="{{ $business->ecomerce_link }}" target="_blank" class="btn">
                        Kunjungi Toko
                    </a>
                </div>

            </div>
            @endif

        </div>

    </div>
</section>

@endsection
<style>
    /* ================= GLOBAL & LAYOUT ================= */
    .back-btn {
        position: absolute;
        top: 30px;
        left: 30px;
        z-index: 10;
        background: rgba(255, 255, 255, 0.9);
        color: #1e3a8a;
        padding: 10px 18px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        backdrop-filter: blur(6px);
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .back-btn:hover {
        background: white;
        transform: translateX(-4px);
    }

    /* ================= HERO (BANNER) ================= */
    .business-hero {
        position: relative;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center; /* Menjaga konten tetap di tengah banner secara horizontal */
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(30, 58, 138, 0.7),
                rgba(30, 58, 138, 0.9));
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        padding: 0 20px;
        width: 100%;
        max-width: 800px; /* Batasi lebar agar teks tidak meluber ke pinggir */
        text-align: left; /* 🔥 PERBAIKAN: Tulisan banner rata kiri, bukan center */
    }

    .hero-content h1 {
        /* 🔥 PERBAIKAN: Ukuran font dikurangi (Min 22px, Ideal 4vw, Max 32px) */
        font-size: clamp(22px, 4vw, 32px); 
        font-weight: 800;
        letter-spacing: 0.5px;
        line-height: 1.2;
        word-wrap: break-word; /* Cegah teks panjang nembus layar */
        overflow-wrap: break-word;
    }

    .hero-content p {
        margin-top: 12px;
        /* 🔥 PERBAIKAN: Ukuran font p juga disesuaikan */
        font-size: clamp(14px, 1.8vw, 16px);
        color: rgba(255, 255, 255, 0.85);
    }

    /* ================= CONTENT SECTION ================= */
    .business-content {
        background: #f1f5f9;
        padding-bottom: 100px;
        display: flex;
        justify-content: center; /* 🔥 Pastikan container di tengah horizontal */
    }

    .container {
        width: 100%;
        max-width: 700px; /* Ukuran ideal untuk card di tengah */
        padding: 0 20px;
        margin: 0 auto; /* 🔥 Pastikan margin otomatis kiri kanan */
    }

    /* ================= CARD ================= */
    .business-card {
        background: white;
        border-radius: 20px;
        padding: clamp(20px, 5vw, 40px); /* Padding responsif */
        margin-top: -100px; /* Floating effect */
        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 5;
        transition: 0.3s ease;
        text-align: left; /* Konten di dalam card tetap rata kiri */
    }

    .business-card:hover {
        transform: translateY(-5px);
    }

    .business-card h2 {
        font-size: clamp(20px, 4vw, 28px);
        font-weight: 800;
        color: #0f172a;
        line-height: 1.3;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .category {
        color: #64748b;
        font-size: 14px;
        margin-top: 6px;
        display: block;
    }

    .link {
        display: inline-block;
        margin-top: 15px;
        color: #2563eb;
        font-size: 14px;
        text-decoration: none;
        word-break: break-all; /* Agar link panjang tidak rusak di mobile */
    }

    .link:hover {
        text-decoration: underline;
    }

    /* ================= DESCRIPTION ================= */
    .description {
        margin-top: 28px;
        font-size: 15px;
        line-height: 1.8;
        color: #475569;
        border-top: 1px solid #f1f5f9;
        padding-top: 20px;
    }

    .description p {
        margin-bottom: 18px;
        overflow-wrap: break-word;
    }

    /* ================= MARKETPLACE BOX ================= */
    .business-box {
        margin-top: 36px;
        background: linear-gradient(135deg, #1e3a8a, #3b82f6);
        color: white;
        padding: 24px;
        border-radius: 16px;
        display: flex;
        gap: 16px;
        align-items: center;
    }

    .business-box .icon {
        font-size: 24px;
        background: rgba(255, 255, 255, 0.2);
        padding: 12px;
        border-radius: 12px;
        flex-shrink: 0;
    }

    .business-box h4 {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
    }

    .business-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
        margin: 4px 0 12px;
    }

    .btn {
        display: inline-block;
        background: white;
        color: #1e3a8a;
        padding: 10px 20px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.2s;
    }

    .btn:hover {
        background: #f1f5f9;
        transform: scale(1.05);
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .back-btn {
            top: 20px;
            left: 20px;
            padding: 8px 14px;
            font-size: 12px;
        }

        .business-hero {
            height: 400px;
        }

        /* 🔥 Di mobile, kita kembalikan ke center agar lebih rapi secara visual */
        .hero-content {
            text-align: center;
        }

        .business-card {
            margin-top: -80px;
            padding: 24px;
        }

        .business-box {
            flex-direction: column;
            text-align: center;
        }

        .business-box .icon {
            margin: 0 auto;
        }
    }
</style>