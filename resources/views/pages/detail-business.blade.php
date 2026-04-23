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
    /* back */
    /* BACK BUTTON */
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
    }

    .back-btn:hover {
        background: white;
        transform: translateX(-4px);
    }

    /* ================= HERO ================= */
    .business-hero {
        position: relative;
        height: 520px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
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
    }

    .hero-content h1 {
        font-size: 48px;
        font-weight: 800;
        letter-spacing: 0.5px;
    }

    .hero-content p {
        margin-top: 12px;
        font-size: 18px;
        color: rgba(255, 255, 255, 0.85);
    }


    /* ================= CONTENT ================= */
    .business-content {
        background: #f1f5f9;
        padding-bottom: 100px;
    }

    /* 🔥 CONTAINER DIPERKECIL BIAR ELEGAN */
    .container {
        max-width: 620px;
        /* 🔥 lebih kecil */
    }


    /* ================= CARD ================= */
    .business-card {
        background: white;
        border-radius: 20px;
        padding: 36px;

        max-width: 1000px;
        /* 🔥 batasi lebar biar ga kepanjangan */
        margin: -150px auto 0;
        /* 🔥 center + floating */

        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.08);
        /* 🔥 depth premium */
        position: relative;
        z-index: 5;

        transition: 0.3s;
    }


    .business-card:hover {
        transform: translateY(-4px);
    }

    .business-card h2 {
        font-size: 24px;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: 0.5px;
    }

    .category {
        color: #64748b;
        font-size: 14px;
        margin-top: 6px;
    }

    /* LINK */
    .link {
        display: inline-block;
        margin-top: 12px;
        color: #2563eb;
        font-size: 14px;
        text-decoration: none;
    }

    .link:hover {
        text-decoration: underline;
    }


    /* ================= DESCRIPTION ================= */
    .description {
        width: 100%;
        /* 🔥 ikut parent (card) */
        margin-top: 28px;

        padding: 0 4px;
        /* 🔥 kasih nafas dikit tanpa nabrak */

        font-size: 15px;
        line-height: 1.9;
        color: #475569;
    }

    .description p {
        margin-bottom: 18px;

        word-break: break-word;
        /* 🔥 WAJIB */
        overflow-wrap: break-word;
        /* 🔥 WAJIB */
    }

    /* ================= BOX ================= */
    .business-box {
        margin-top: 36px;
        background: linear-gradient(135deg, #5b6f8f, #475a78);
        color: white;
        padding: 22px;
        border-radius: 16px;
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .business-box .icon {
        font-size: 20px;
        background: rgba(255, 255, 255, 0.2);
        padding: 12px;
        border-radius: 10px;
    }

    .business-box h4 {
        margin: 0;
        font-size: 16px;
        font-weight: 700;
    }

    .business-box p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.85);
        margin: 6px 0;
    }


    /* ================= BUTTON ================= */
    .btn {
        display: inline-block;
        margin-top: 12px;
        background: white;
        color: #475a78;
        padding: 8px 16px;
        border-radius: 999px;
        /* 🔥 pill style */
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.2s;
    }

    .btn:hover {
        background: #e2e8f0;
    }


    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {

        .business-hero {
            height: 420px;
        }

        .hero-content h1 {
            font-size: 30px;
        }

        .hero-content p {
            font-size: 15px;
        }

        .business-card {
            margin-top: -120px;
            padding: 24px;
        }

        .business-box {
            flex-direction: column;
        }

    }
</style>