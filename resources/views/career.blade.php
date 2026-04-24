@extends('layouts.marketing')

@section('title', 'Karier - PT Aro Baskara Esa')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

@section('content')
    @include('partials.marketing.navbar')

    {{-- CSS UNTUK BANNER ORANYE & PENCARIAN OVERLAP --}}
    <style>
        /* RESET NAVBAR UNDERLINE */
        header a, header button {
            text-decoration: none !important;
        }

        /* Reset & Background Global */
        .hero-career {
            background: linear-gradient(rgba(243, 112, 33, 0.9), rgba(229, 93, 10, 0.8)),
                url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-blend-mode: multiply;

            min-height: 85vh;
            display: flex;
            align-items: center;
            padding-top: 150px;
            padding-bottom: 150px;

            color: white;
            margin-top: 0;
            text-align: center;
        }

        /* Ukuran Font diperbesar sedikit agar seimbang dengan bannernya */
        .hero-career h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-career p {
            font-size: 1.3rem;
            max-width: 850px;
            margin: 0 auto;
            opacity: 1;
        }

        /* 2. SEARCH SECTION - EFEK OVERLAP (Masuk ke Banner) */

        .search-overlap {
            margin-top: -50px;
            position: relative;
            z-index: 10;
            margin-bottom: 40px;
        }

        .search-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .search-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            font-size: 1.25rem;
        }

        .search-row {
            display: flex;
            gap: 15px;
        }

        .search-input-group {
            flex: 1;
            position: relative;
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 5px 15px;
        }

        .search-input-group i {
            color: #f37021;
            margin-right: 10px;
        }

        .search-input-group input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 10px;
            outline: none;
            font-size: 15px;
        }

        .search-select-group {
            width: 300px;
        }

        .search-select-group select {
            width: 100%;
            border: 1px solid #e9ecef;
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
            outline: none;
            font-size: 15px;
            color: #555;
            cursor: pointer;
        }

        .search-btn {
            background: #f37021;
            color: white;
            border: none;
            padding: 0 40px;
            border-radius: 12px;
            font-weight: 600;
            transition: 0.3s;
        }

        .search-btn:hover {
            background: #d9641d;
            transform: translateY(-2px);
        }

        /* 2. KODE RESPONSIVE (MOBILE) - WAJIB DI PALING BAWAH */
        @media (max-width: 768px) {
            .search-overlap {
                margin-top: -30px !important;
                padding: 0 15px !important;
            }

            .search-wrapper {
                flex-direction: column !important;
                /* Paksa tumpuk ke bawah */
                border-radius: 20px !important;
                padding: 10px !important;
                gap: 10px !important;
            }

            .search-input-area {
                padding-left: 10px !important;
                width: 100% !important;
            }

            .search-btn {
                width: 100% !important;
                padding: 12px 0 !important;
                border-radius: 15px !important;
            }
        }

        /* 3. JOB LIST & SIDEBAR (Tetap Sesuai Kodemu) */
        .job-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #eee;
            padding: 22px 28px;
            margin-bottom: 18px;
            transition: 0.3s;
        }

        .job-card:hover {
            border-color: #f37021;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* Update pada class .job-name */
        .job-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #334155;
            /* Abu-abu gelap profesional (Slate 700) */
            margin-bottom: 6px;
            display: block;
            text-decoration: none;
            transition: 0.2s;
        }

        /* Berikan efek hover agar interaktif */
        .job-name:hover {
            color: #f37021;
            /* Berubah oranye saat diarahkan kursor */
        }

        /* Kunci agar info tetap satu baris */
        .info-bar {
            display: flex;
            flex-wrap: nowrap;
            /* Mencegah turun ke bawah */
            gap: 20px;
            align-items: center;
            color: #777;
            font-size: 14px;
            overflow: hidden;
        }

        /* Update Info Item: Teks Abu-abu & Ikon Oranye Kalem */
        .info-item {
            display: flex;
            align-items: center;
            white-space: nowrap;
            color: #757575;
            /* Teks abu-abu netral (tidak terlalu terang) */
            font-size: 14px;
        }

        .info-item i {
            color: #d9641d;
            /* Oranye yang lebih deep/tua (tidak terlalu neon/terang) */
            font-size: 15px;
            margin-right: 8px;
            opacity: 0.9;
            /* Sedikit transparansi agar lebih soft */
        }

        /* --- STYLE DASAR (DESKTOP & GLOBAL) --- */
        .action-group {
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: flex-end;
        }

        .btn-detail-outline {
            border: 2px solid #f37021 !important;
            color: #f37021 !important;
            background: white !important;
            padding: 8px 22px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-lamar-solid {
            background-color: #f37021 !important;
            color: white !important;
            border: none;
            padding: 10px 35px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }

        /* --- KHUSUS TAMPILAN HP (MOBILE) --- */
        @media (max-width: 768px) {

            /* Paksa baris card tidak turun ke bawah */
            .job-card .row {
                display: flex !important;
                flex-wrap: nowrap !important;
                align-items: flex-start;
            }

            /* Bagian Teks (Nama Job & Info) */
            .job-card .col-md-8 {
                flex: 1;
                padding-right: 10px;
            }

            /* Bagian Tombol (Tetap di Samping) */
            .job-card .col-md-4 {
                width: auto !important;
                flex: 0 0 auto !important;
                margin-top: 0 !important;
            }

            /* Buat Tombol Atas-Bawah tapi Ukuran Tetap Kecil */
            .action-group {
                flex-direction: column !important;
                gap: 8px !important;
                align-items: flex-end;
            }

            /* Ukuran Tombol di HP (Disesuaikan agar pas) */
            .btn-detail-outline,
            .btn-lamar-solid {
                width: 90px !important;
                /* Lebar tetap supaya rapi bertumpuk */
                padding: 6px 0 !important;
                font-size: 12px !important;
                text-align: center;
                display: block;
            }

            /* Info bar (lokasi, dll) agar tidak tabrakan */
            .info-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
                display: flex !important;
            }
        }





        .job-divider {
            margin: 20px 0;
            border-top: 1px dashed #ddd;
            display: none;
        }

        /* Custom Pagination Styling */
        .custom-pagination-wrapper {
            margin-top: 50px;
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
        }

        .custom-pagination-wrapper .pagination {
            gap: 10px;
            border: none;
        }

        .custom-pagination-wrapper .page-item {
            margin: 0;
        }

        .custom-pagination-wrapper .page-link {
            border-radius: 12px !important;
            border: 1px solid #e0e0e0;
            color: #f37021;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
        }

        .custom-pagination-wrapper .page-item.active .page-link {
            background-color: #f37021 !important;
            border-color: #f37021 !important;
            color: white !important;
            box-shadow: 0 4px 10px rgba(243, 112, 33, 0.3);
        }

        .custom-pagination-wrapper .page-item.disabled .page-link {
            background-color: #f0f2f5;
            color: #f37021;
            opacity: 0.6;
            border-color: #e0e0e0;
        }

        .custom-pagination-wrapper .page-link:hover:not(.disabled) {
            background-color: #fff5f0;
            border-color: #f37021;
            color: #f37021;
            transform: translateY(-2px);
        }

        .detail-expand-box {
            padding: 5px 0;
        }

        .detail-title {
            font-size: 15px;
            color: #003366;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .detail-text,
        .detail-list {
            font-size: 14px;
            color: #555;
            line-height: 1.7;
        }


        .filter-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #eee;
        }

        .filter-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .form-check-input:checked {
            background-color: #f37021;
            border-color: #f37021;
        }

        /* PAGINATION */
        .custom-pagination-wrapper {
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .custom-pagination-wrapper nav div:first-child {
            display: none !important;
        }

        .custom-pagination-wrapper svg {
            width: 20px !important;
        }

        .custom-pagination-wrapper .page-link {
            border-radius: 8px !important;
            margin: 0 2px;
            color: #f37021 !important;
            border: 1px solid #ddd !important;
        }

        .active .page-link {
            background-color: #f37021 !important;
            border-color: #f37021 !important;
            color: white !important;
        }

        /* CTA SECTION - THEMA ORANGE & NAVY */
        /* CTA SECTION - THEME FULL ORANGE (Lebih Nyambung) */
        .cta-career {
            background: linear-gradient(135deg, #f37021 0%, #ff9452 100%);
            /* Gradasi Oranye */
            border-radius: 20px;
            padding: 50px 40px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(243, 112, 33, 0.2);
            /* Shadow halus warna oranye */
        }

        /* Dekorasi Putih Transparan (Glass Effect) */
        .cta-career::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 250px;
            height: 250px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
        }

        .cta-career::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 5%;
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cta-career h2 {
            font-size: 2.2rem;
            font-weight: 800;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cta-career p {
            font-weight: 500;
            opacity: 0.95;
        }

        /* Tombol Putih Bersih */
        .cta-career .btn-light {
            background-color: #ffffff !important;
            color: #f37021 !important;
            /* Teks balik ke oranye */
            border: none;
            font-size: 1.1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .cta-career .btn-light:hover {
            transform: scale(1.05);
            background-color: #fff !important;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cta-career {
                padding: 40px 25px;
                text-align: center;
            }
        }

        /* BENEFITS SECTION */
        .benefit-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 30px;
            border: 1px solid #f8f9fa;
            transition: all 0.3s ease;
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .benefit-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .benefit-icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .benefit-icon-box img {
            width: 24px;
            height: 24px;
            object-fit: contain;
            filter: brightness(0) invert(1); /* Membuat ikon putih */
        }

        .benefit-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0;
            margin-left: 15px;
            line-height: 1.3;
        }

        .benefit-description {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #666;
            text-align: left;
            margin-bottom: 0;
        }

        .section-title-custom {
            color: #f37021;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 50px;
        }

        /* Styling Dropdown di Sidebar */
        .sidebar-select-career {
            border-radius: 10px;
            /* Tidak perlu terlalu lonjong karena di sidebar */
            border: 1px solid #ddd;
            padding: 12px 15px;
            font-size: 14px;
            color: #444;
            cursor: pointer;
            background-color: #fdfdfd;
            transition: all 0.3s ease;
        }

        .sidebar-select-career:focus {
            border-color: #f37021;
            box-shadow: 0 0 0 3px rgba(243, 112, 33, 0.1);
            background-color: #fff;
        }

        /* Memastikan filter box tetap rapi di mobile */
        @media (max-width: 991px) {
            .filter-box {
                margin-top: 20px;
                padding: 15px;
            }

            .filter-title {
                font-size: 15px;
                margin-bottom: 15px;
            }
        }
    </style>

    {{-- HERO BANNER SECTION (ORANGE STYLE) --}}
    <section class="hero-career">
        <div class="container">
            <h1 class="animate__animated animate__fadeInDown">Bangun Karier Anda <br> Bersama Kami</h1>
            <p class="animate__animated animate__fadeInUp">
                Jadilah bagian dari tim yang berkembang bersama dan menciptakan solusi yang berdampak bagi industri
                teknologi di Indonesia.
            </p>
        </div>
    </section>

    {{-- OVERLAP SEARCH AREA --}}
    <section class="search-overlap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="search-card">
                        <h5 class="search-title">Temukan peluang karier terbaik untukmu</h5>
                        <form action="{{ route('career') }}" method="GET" id="search-form">
                            <div class="search-row">
                                <div class="search-input-group">
                                    <i class="fas fa-search"></i>
                                    <input type="text" name="search" id="search-input"
                                        placeholder="Cari posisi yang kamu inginkan..." value="{{ request('search') }}"
                                        autocomplete="off">
                                </div>
                                <div class="search-select-group">
                                    <select name="category[]" id="category-select">
                                        <option value="">Semua Departemen</option>
                                        @foreach($jobCategories as $cat)
                                            <option value="{{ $cat->id }}" {{ is_array(request('category')) && in_array($cat->id, request('category')) ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Tombol dihapus karena sudah otomatis --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- MAIN CONTENT --}}
    <div class="container main-container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0" style="color: #333;">Posisi yang Tersedia</h5>
                    <p class="text-muted mb-0 fw-medium">Ditemukan {{ $vacancies->total() }} Lowongan</p>
                </div>


                <div id="job-list-container">
                    @include('partials.job_card_list')
                </div>

                {{-- Pagination --}}
                <div class="custom-pagination-wrapper">
                    {{ $vacancies->onEachSide(1)->links() }}
                </div>
            </div>

        </div>
    </div>


    {{-- SECTION CTA: AJAKAN BERGABUNG --}}
    <section class="pb-5">
        <div class="container">
            <div class="cta-career shadow-lg animate__animated animate__fadeInUp"
                style="padding: 40px; border-radius: 20px; background: linear-gradient(45deg, #f37021, #ff8c42); color: white;">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="fw-bold mb-3">Mulai Karier Anda Bersama Kami</h2>
                        <p class="mb-0 opacity-90" style="font-size: 1.2rem; font-style: italic;">
                            "Bergabunglah dengan PT Aro Baskara Esa dan jadilah bagian dari tim yang inovatif, dinamis, dan
                            suportif dalam membangun masa depan teknologi."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BENEFITS SECTION --}}
    <section class="py-5" style="background-color: #fcfcfc;">
        <div class="container py-4">
            <div class="text-center">
                <h2 class="section-title-custom">Kenapa Bergabung dengan Kami</h2>
            </div>

            @php
                $colors = ['#f37021', '#28a745', '#007bff', '#6f42c1', '#e83e8c'];
            @endphp

            <div class="row g-4 justify-content-center">
                @foreach($benefits as $benefit)
                    <div class="col-md-6 col-lg-4">
                        <div class="benefit-card">
                            <div class="benefit-header">
                                <div class="benefit-icon-box" style="background-color: {{ $colors[$loop->index % count($colors)] }};">
                                    <img src="{{ asset('storage/' . $benefit->icon) }}" alt="{{ $benefit->title }}">
                                </div>
                                <h6 class="benefit-title">
                                    {{ $benefit->title }}
                                </h6>
                            </div>
                            <p class="benefit-description">
                                {{ $benefit->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- MODAL APPLY --}}
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        {{-- Container dikecilkan dari modal-lg ke modal-md --}}
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content overflow-hidden" style="border-radius: 20px; border: none;">

                {{-- Header: Padding dikurangi dari 30px ke 20px --}}
                <div class="modal-header text-white"
                    style="background: linear-gradient(135deg, #003366 0%, #f37021 100%); padding: 20px 25px;">
                    <h6 class="modal-title fw-bold">Melamar sebagai <span id="vacancy_name_text"></span></h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Body: Padding dikurangi dari p-5 ke p-4 --}}
                    <div class="modal-body p-4">
                        <input type="hidden" name="job_vacancy_id" id="modal_job_vacancy_id">

                        {{-- Gutter (jarak antar kolom) dikecilkan ke g-2 agar lebih rapat --}}
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Nama Lengkap</label>
                                <input type="text" name="full_name" class="form-control form-control-sm"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Alamat Email</label>
                                <input type="email" name="email" class="form-control form-control-sm"
                                    placeholder="email@contoh.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Nomor WhatsApp</label>
                                <input type="text" name="phone_number" class="form-control form-control-sm"
                                    placeholder="0812..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Pendidikan Terakhir</label>
                                <select name="last_education" class="form-select form-select-sm" required>
                                    <option value="" selected disabled>Pilih Pendidikan</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/S1">D4/S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Pengalaman (Tahun)</label>
                                <input type="number" name="years_of_experience" class="form-control form-control-sm"
                                    placeholder="0" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Pekerjaan Sebelumnya</label>
                                <input type="text" name="previous_job" class="form-control form-control-sm"
                                    placeholder="Contoh: UI/UX Designer">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">LinkedIn URL</label>
                                <input type="url" name="linkedin_url" class="form-control form-control-sm"
                                    placeholder="https://linkedin.com/in/...">
                            </div>

                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">Cover Letter</label>
                                {{-- Rows dikurangi agar tidak terlalu tinggi --}}
                                <textarea name="cover_letter" class="form-control form-control-sm" rows="3"
                                    placeholder="Tuliskan alasan Anda tertarik..."></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">Upload Resume (PDF)</label>
                                <input type="file" name="resume" class="form-control form-control-sm"
                                    accept="application/pdf" required>
                            </div>

                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="confirmData" required
                                        style="transform: scale(0.9);">
                                    <label class="form-check-label text-muted" for="confirmData" style="font-size: 11px;">
                                        Saya menyatakan bahwa semua informasi di atas adalah benar.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer: Padding bawah dikurangi --}}
                    <div class="modal-footer border-0 pb-4 justify-content-center">
                        <button type="submit"
                            class="btn btn-orange px-5 rounded-pill shadow-sm py-2 btn-sm text-white fw-bold"
                            style="background-color: #f37021;">
                            Kirim Lamaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JAVASCRIPT --}}
    <script>
        function toggleJobDetail(id) {
            const detailDiv = document.getElementById(`detail-${id}`);
            const divider = document.getElementById(`divider-${id}`); // Ambil element garis
            const btnText = document.getElementById(`btn-text-${id}`);

            if (detailDiv.classList.contains('d-none')) {
                detailDiv.classList.remove('d-none');
                divider.style.display = 'block'; // Tampilkan garis
                btnText.innerText = 'Sembunyikan';
            } else {
                detailDiv.classList.add('d-none');
                divider.style.display = 'none'; // Sembunyikan garis
                btnText.innerText = 'Detail';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('search-form');
            const searchInput = document.getElementById('search-input');
            const categorySelect = document.getElementById('category-select');
            const jobListContainer = document.getElementById('job-list-container');
            const paginationContainer = document.querySelector('.custom-pagination-wrapper');
            const vacancyCount = document.querySelector('.text-muted.mb-0.fw-medium');

            let timeout = null;

            function performSearch() {
                const formData = new FormData(searchForm);
                const queryString = new URLSearchParams(formData).toString();
                const url = `{{ route('career') }}?${queryString}`;

                // Tambahkan efek loading jika perlu
                jobListContainer.style.opacity = '0.5';

                fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');

                        // Update list pekerjaan
                        const newList = doc.getElementById('job-list-container');
                        if (newList) {
                            jobListContainer.innerHTML = newList.innerHTML;
                        }

                        // Update pagination
                        const newPagination = doc.querySelector('.custom-pagination-wrapper');
                        if (newPagination && paginationContainer) {
                            paginationContainer.innerHTML = newPagination.innerHTML;
                        } else if (paginationContainer) {
                            paginationContainer.innerHTML = '';
                        }

                        // Update count
                        const newCount = doc.querySelector('.text-muted.mb-0.fw-medium');
                        if (newCount && vacancyCount) {
                            vacancyCount.innerHTML = newCount.innerHTML;
                        }

                        jobListContainer.style.opacity = '1';
                        
                        // Re-initialize any bootstrap tooltips or modals if needed
                    })
                    .catch(error => {
                        console.error('Error fetching jobs:', error);
                        jobListContainer.style.opacity = '1';
                    });
            }

            // Event listener untuk input pencarian (dengan debounce)
            searchInput.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(performSearch, 500);
            });

            // Event listener untuk select kategori
            categorySelect.addEventListener('change', performSearch);

            // Prevent default form submit
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                performSearch();
            });
            
            // Handle pagination clicks via AJAX
            document.addEventListener('click', function(e) {
                if (e.target.closest('.pagination a')) {
                    e.preventDefault();
                    const url = e.target.closest('a').href;
                    
                    jobListContainer.style.opacity = '0.5';
                    
                    fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        jobListContainer.innerHTML = doc.getElementById('job-list-container').innerHTML;
                        paginationContainer.innerHTML = doc.querySelector('.custom-pagination-wrapper').innerHTML;
                        window.scrollTo({ top: jobListContainer.offsetTop - 100, behavior: 'smooth' });
                        jobListContainer.style.opacity = '1';
                    });
                }
            });
        });

        function openApplyModal(id, name) {
            document.getElementById('vacancy_id').value = id;
            document.getElementById('vacancy_name_text').innerText = name;
                document.getElementById('search-form').submit();
            }
        });

    </script>

    @include("partials.marketing.footer")
@endsection
@push("scripts")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush