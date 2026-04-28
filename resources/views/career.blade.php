@extends('layouts.marketing')

@section('title', 'Karier - PT Aro Baskara Esa')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

@section('content')

<div id="career-page-wrapper">
    <style>
        #career-page-wrapper .hero-career {
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
        #career-page-wrapper .hero-career h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.2);
        }
        #career-page-wrapper .hero-career p {
            font-size: 1.3rem;
            max-width: 850px;
            margin: 0 auto;
        }
        #career-page-wrapper .search-overlap {
            margin-top: -50px;
            position: relative;
            z-index: 10;
            margin-bottom: 40px;
        }
        #career-page-wrapper .search-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }
        #career-page-wrapper .search-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            font-size: 1.25rem;
        }
        #career-page-wrapper .search-row {
            display: flex;
            gap: 15px;
        }
        #career-page-wrapper .search-input-group {
            flex: 1;
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 5px 15px;
        }
        #career-page-wrapper .search-input-group i {
            color: #f37021;
            margin-right: 10px;
        }
        #career-page-wrapper .search-input-group input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 10px;
            outline: none;
            font-size: 15px;
        }
        #career-page-wrapper .search-select-group {
            width: 300px;
        }
        #career-page-wrapper .search-select-group select {
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
        @media (max-width: 768px) {
            #career-page-wrapper .search-overlap { margin-top: -30px !important; padding: 0 15px !important; }
            #career-page-wrapper .search-row { flex-direction: column; }
            #career-page-wrapper .search-select-group { width: 100%; }
        }
        #career-page-wrapper .job-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #eee;
            padding: 22px 28px;
            margin-bottom: 18px;
            transition: 0.3s;
        }
        #career-page-wrapper .job-card:hover {
            border-color: #f37021;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        #career-page-wrapper .job-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
            display: block;
            text-decoration: none;
            transition: 0.2s;
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            text-align: left;
        }
        #career-page-wrapper .job-name:hover { color: #f37021; }
        #career-page-wrapper .info-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            margin-top: 15px;
        }
        #career-page-wrapper .info-item {
            display: flex;
            align-items: center;
            padding: 6px 14px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 100px;
            color: #475569;
            font-size: 13px;
            font-weight: 500;
            transition: 0.2s;
        }
        #career-page-wrapper .info-item i {
            color: #f37021;
            font-size: 12px;
            margin-right: 8px;
        }
        #career-page-wrapper .info-item:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }
        #career-page-wrapper .action-group {
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: flex-end;
        }
        #career-page-wrapper .btn-detail-outline {
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
            cursor: pointer;
        }
        #career-page-wrapper .btn-lamar-solid {
            background-color: #f37021 !important;
            color: white !important;
            border: none;
            padding: 10px 35px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .job-card { padding: 24px !important; border-radius: 16px !important; }
            .job-card .row { flex-direction: column !important; align-items: stretch !important; }
            .job-card .col-md-8 { padding-right: 0 !important; margin-bottom: 20px !important; }
            .job-card .col-md-4 { width: 100% !important; margin-top: 5px !important; border-top: 1px dashed #e2e8f0; padding-top: 20px !important; }
            .action-group { flex-direction: row !important; gap: 12px !important; justify-content: center !important; }
            .btn-detail-outline, .btn-lamar-solid { 
                width: 100% !important; 
                flex: 1 !important; 
                padding: 12px 0 !important; 
                font-size: 14px !important; 
                border-radius: 12px !important;
                display: flex !important;
                align-items: center;
                justify-content: center;
                height: 48px;
            }
            .info-bar { gap: 8px !important; margin-top: 12px !important; }
            .info-item { 
                padding: 4px 12px !important; 
                font-size: 12px !important; 
                background: #f1f5f9 !important;
                border: none !important;
            }
            .job-name { font-size: 1.2rem !important; margin-bottom: 8px !important; }
        }
        .job-divider { margin: 20px 0; border-top: 1px dashed #ddd; display: none; }
        .custom-pagination-wrapper {
            margin-top: 40px;
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
        }
        .custom-pagination-wrapper nav div:first-child { display: none !important; }
        .custom-pagination-wrapper svg { width: 20px !important; }
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
        .detail-expand-box { padding: 5px 0; }
        .detail-title { font-size: 15px; color: #003366; font-weight: 700; margin-bottom: 8px; }
        .detail-text, .detail-list { font-size: 14px; color: #555; line-height: 1.7; }
        .cta-career {
            background: linear-gradient(135deg, #f37021 0%, #ff9452 100%);
            border-radius: 20px;
            padding: 50px 40px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(243, 112, 33, 0.2);
        }
        .cta-career::before {
            content: '';
            position: absolute;
            top: -50px; right: -50px;
            width: 250px; height: 250px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
        }
        .cta-career::after {
            content: '';
            position: absolute;
            bottom: -20px; left: 5%;
            width: 120px; height: 120px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        .cta-career h2 { font-size: 2.2rem; font-weight: 800; text-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        @media (max-width: 768px) { .cta-career { padding: 40px 25px; text-align: center; } }
        .benefit-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 30px;
            border: 1px solid #f8f9fa;
            transition: all 0.3s ease;
            height: 100%;
        }
        .benefit-card:hover { transform: translateY(-5px); box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1); }
        .benefit-header { display: flex; align-items: center; margin-bottom: 20px; }
        .benefit-icon-box { width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .benefit-icon-box img { width: 24px; height: 24px; object-fit: contain; filter: brightness(0) invert(1); }
        .benefit-title { font-size: 1.15rem; font-weight: 700; color: #333; margin-bottom: 0; margin-left: 15px; line-height: 1.3; }
        .benefit-description { font-size: 0.95rem; line-height: 1.6; color: #666; text-align: left; margin-bottom: 0; }
        .section-title-custom { color: #f37021; font-size: 2.5rem; font-weight: 800; margin-bottom: 50px; }
    </style>

    {{-- HERO --}}
    <section class="hero-career">
        <div class="container">
            <h1 class="animate__animated animate__fadeInDown">Bangun Karier Anda <br> Bersama Kami</h1>
            <p class="animate__animated animate__fadeInUp">
                Jadilah bagian dari tim yang berkembang bersama dan menciptakan solusi yang berdampak bagi industri
                teknologi di Indonesia.
            </p>
        </div>
    </section>

    {{-- SEARCH OVERLAP --}}
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
                                        placeholder="Cari posisi yang kamu inginkan..."
                                        value="{{ request('search') }}" autocomplete="off">
                                </div>
                                <div class="search-select-group">
                                    <select name="category[]" id="category-select">
                                        <option value="">Semua Departemen</option>
                                        @foreach($jobCategories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ is_array(request('category')) && in_array($cat->id, request('category')) ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- JOB LIST --}}
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0" style="color: #333;">Posisi yang Tersedia</h5>
                    <p id="vacancy-count" class="text-muted mb-0 fw-medium">Ditemukan {{ $vacancies->total() }} Lowongan</p>
                </div>
                <div id="job-list-container">
                    @include('partials.job_card_list')
                </div>
                <div class="custom-pagination-wrapper">
                    {{ $vacancies->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>

    
    {{-- BENEFITS --}}
    <section class="py-5" style="background-color: #fcfcfc;">
        <div class="container py-4">
            <div class="text-center">
                <h2 class="section-title-custom">Kenapa Bergabung dengan Kami</h2>
            </div>
            @php $colors = ['#f37021', '#28a745', '#007bff', '#6f42c1', '#e83e8c']; @endphp
            <div class="row g-4 justify-content-center">
                @foreach($benefits as $benefit)
                    <div class="col-md-6 col-lg-4">
                        <div class="benefit-card">
                            <div class="benefit-header">
                                <div class="benefit-icon-box" style="background-color: {{ $colors[$loop->index % count($colors)] }};">
                                    <img src="{{ asset('storage/' . $benefit->icon) }}" alt="{{ $benefit->title }}">
                                </div>
                                <h6 class="benefit-title">{{ $benefit->title }}</h6>
                            </div>
                            <p class="benefit-description">{{ $benefit->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- MODAL APPLY --}}
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content overflow-hidden" style="border-radius: 20px; border: none;">
                <div class="modal-header text-white"
                     style="background: linear-gradient(135deg, #003366 0%, #f37021 100%); padding: 20px 25px;">
                    <h6 class="modal-title fw-bold">Melamar sebagai <span id="vacancy_name_text"></span></h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <input type="hidden" name="job_vacancy_id" id="modal_job_vacancy_id">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Nama Lengkap</label>
                                <input type="text" name="full_name" class="form-control form-control-sm" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Alamat Email</label>
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="email@contoh.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Nomor WhatsApp</label>
                                <input type="text" name="phone_number" class="form-control form-control-sm" placeholder="0812..." required>
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
                                <input type="number" name="years_of_experience" class="form-control form-control-sm" placeholder="0" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold mb-1">Pekerjaan Sebelumnya</label>
                                <input type="text" name="previous_job" class="form-control form-control-sm" placeholder="Contoh: UI/UX Designer">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">LinkedIn URL</label>
                                <input type="url" name="linkedin_url" class="form-control form-control-sm" placeholder="https://linkedin.com/in/...">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">Cover Letter</label>
                                <textarea name="cover_letter" class="form-control form-control-sm" rows="3" placeholder="Tuliskan alasan Anda tertarik..."></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold mb-1">Upload Resume (PDF)</label>
                                <input type="file" name="resume" class="form-control form-control-sm" accept="application/pdf" required>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="confirmData" required>
                                    <label class="form-check-label text-muted" for="confirmData" style="font-size: 11px;">
                                        Saya menyatakan bahwa semua informasi di atas adalah benar.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pb-4 justify-content-center">
                        <button type="submit" class="btn px-5 rounded-pill shadow-sm py-2 btn-sm text-white fw-bold"
                                style="background-color: #f37021;">Kirim Lamaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.marketing.footer')
</div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleJobDetail(id) {
            const detailDiv = document.getElementById('detail-' + id);
            const divider   = document.getElementById('divider-' + id);
            const btnText   = document.getElementById('btn-text-' + id);
            if (detailDiv.classList.contains('d-none')) {
                detailDiv.classList.remove('d-none');
                divider.style.display = 'block';
                btnText.innerText = 'Sembunyikan';
            } else {
                detailDiv.classList.add('d-none');
                divider.style.display = 'none';
                btnText.innerText = 'Detail';
            }
        }
        function setVacancyData(id, name) {
            document.getElementById('modal_job_vacancy_id').value = id;
            document.getElementById('vacancy_name_text').textContent = name;
        }
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput    = document.getElementById('search-input');
            const categorySelect = document.getElementById('category-select');
            const jobContainer   = document.getElementById('job-list-container');
            const paginationWrap = document.querySelector('.custom-pagination-wrapper');
            const countEl        = document.getElementById('vacancy-count');
            let debounceTimer;
            function fetchJobs(page) {
                const params = new URLSearchParams();
                if (searchInput.value)    params.set('search', searchInput.value);
                if (categorySelect.value) params.append('category[]', categorySelect.value);
                if (page)                 params.set('page', page);
                fetch('{{ route('career') }}?' + params.toString(), {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(r => r.json())
                .then(data => {
                    jobContainer.innerHTML   = data.html;
                    paginationWrap.innerHTML = data.pagination;
                    if (countEl) countEl.textContent = 'Ditemukan ' + data.total + ' Lowongan';
                    bindPaginationLinks();
                });
            }
            function bindPaginationLinks() {
                if (!paginationWrap) return;
                paginationWrap.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function (e) {
                        e.preventDefault();
                        const page = new URL(this.href).searchParams.get('page');
                        if (page) fetchJobs(page);
                    });
                });
            }
            searchInput.addEventListener('input', function () {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => fetchJobs(1), 400);
            });
            categorySelect.addEventListener('change', () => fetchJobs(1));
            bindPaginationLinks();
        });
    </script>
@endpush
