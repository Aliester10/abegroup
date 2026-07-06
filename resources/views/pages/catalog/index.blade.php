@extends('layouts.marketing')
@section('title', 'Unduh Katalog - ABE Group')
@section('content')
<style>
/* =========================================
   BASE — override dark body
   ========================================= */
#cat-page {
    background: #f0f4f8;
    color: #111827;
    width: 100%;
    padding-bottom: 80px;
    /* navbar is fixed h-32 (128px); layout already adds pt-20 (80px) */
    padding-top: 48px;
}

/* =========================================
   HERO BAND
   ========================================= */
.hero-band {
    background: #fff;
    border-bottom: 1px solid #e8edf2;
    margin-bottom: 0;
}
.hero-inner {
    max-width: 1100px;
    margin: 0 auto;
    padding: 48px 24px 0;
    display: flex;
    align-items: flex-end;
    gap: 0;
    min-height: 260px;
}
.hero-text { flex: 1; padding-bottom: 40px; }
.hero-covers {
    width: 340px;
    flex-shrink: 0;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    gap: 12px;
    position: relative;
}
@media(max-width:768px){ .hero-covers { display:none; } }

/* =========================================
   TWO-COL LAYOUT
   ========================================= */
.page-inner {
    max-width: 1100px;
    margin: 0 auto;
    padding: 40px 24px 0;
    display: flex;
    gap: 28px;
    align-items: flex-start;
}
.col-left  { flex: 1; min-width: 0; }
.col-right { width: 380px; flex-shrink: 0; position: sticky; top: 140px; }
@media(max-width:1023px){
    .page-inner { flex-direction: column; }
    .col-right  { width: 100%; position: static; }
}

/* =========================================
   CATALOG ROW CARD
   ========================================= */
.cat-row {
    background: #fff;
    border: 2px solid #e8edf2;
    border-radius: 16px;
    display: flex;
    overflow: hidden;
    cursor: pointer;
    transition: border-color .2s, box-shadow .2s, transform .2s;
    box-shadow: 0 2px 8px rgba(15,23,42,.05);
    margin-bottom: 16px;
    min-height: 200px;
}
.cat-row:hover {
    border-color: #93c5fd;
    box-shadow: 0 8px 24px rgba(37,99,235,.12);
    transform: translateY(-2px);
}
.cat-row.is-selected {
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37,99,235,.12), 0 8px 24px rgba(37,99,235,.15);
}

/* Thumbnail: comfortable spacing, book-like display */
.cat-thumb {
    width: 220px;
    flex-shrink: 0;
    position: relative;
    background: #f8fafc;
    border-right: 1px solid #f1f5f9;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.cat-thumb img {
    width: 100%;
    height: 100%;
    max-height: 200px;
    object-fit: contain;
    border-radius: 6px;
    box-shadow: 0 4px 14px rgba(15,23,42,0.12);
    display: block;
    transition: transform .4s ease, box-shadow .4s ease;
}
.cat-row:hover .cat-thumb img { 
    transform: translateY(-4px) scale(1.02); 
    box-shadow: 0 12px 24px rgba(15,23,42,0.15);
}
.cat-thumb-placeholder {
    width: 100%;
    height: 100%;
    min-height: 160px;
    border-radius: 6px;
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 14px rgba(15,23,42,0.12);
}

.cat-body {
    flex: 1;
    padding: 20px 22px 18px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-width: 0;
}
.cat-edition {
    display: inline-block;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    padding: 2px 10px;
    border-radius: 99px;
    margin-bottom: 10px;
}
.cat-title {
    font-size: 16px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 4px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.cat-desc  { font-size: 13px; color: #64748b; line-height: 1.55; margin-bottom: 2px; }
.cat-bullets {
    list-style: none;
    margin: 10px 0 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5px 12px;
}
.cat-bullets li {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #475569;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.cat-foot  {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 14px;
    padding-top: 12px;
    border-top: 1px solid #f1f5f9;
}
.cat-pdf-label { display: flex; align-items: center; gap: 5px; font-size: 11px; color: #94a3b8; }
.btn-select {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 18px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 700;
    border: 2px solid #2563eb;
    color: #2563eb;
    background: #fff;
    cursor: pointer;
    transition: background .2s, color .2s;
    white-space: nowrap;
}
.btn-select:hover, .cat-row.is-selected .btn-select {
    background: #2563eb;
    color: #fff;
}

/* =========================================
   PRIVACY BANNER
   ========================================= */
.privacy-banner {
    background: #fff;
    border: 1px solid #dbeafe;
    border-radius: 16px;
    padding: 20px 24px;
    display: flex;
    align-items: center;
    gap: 18px;
    margin-top: 16px;
    box-shadow: 0 2px 8px rgba(15,23,42,.04);
}
.privacy-icon {
    width: 52px; height: 52px;
    background: #2563eb;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 14px rgba(37,99,235,.3);
}

/* =========================================
   FORM CARD
   ========================================= */
.form-card {
    background: #fff;
    border-radius: 18px;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    box-shadow: 0 6px 32px rgba(15,23,42,.09);
}
.form-head {
    background: linear-gradient(135deg, #1e40af, #2563eb);
    padding: 22px 24px;
    display: flex;
    align-items: center;
    gap: 14px;
}
.form-head-icon {
    width: 44px; height: 44px;
    background: rgba(255,255,255,.15);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.form-body { padding: 24px; }
.f-group { margin-bottom: 16px; }
.f-label {
    display: block;
    font-size: 10px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: #64748b;
    margin-bottom: 6px;
}
.f-input {
    display: block;
    width: 100%;
    padding: 11px 14px;
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    font-size: 14px;
    color: #0f172a;
    outline: none;
    transition: border-color .18s, box-shadow .18s, background .18s;
    appearance: none;
    box-sizing: border-box;
}
.f-input:focus { background: #fff; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59,130,246,.1); }
.f-input::placeholder { color: #94a3b8; }
.f-select-wrap { position: relative; }
.f-select-wrap svg { position: absolute; right: 12px; top: 50%; transform: translateY(-50%); pointer-events: none; color: #94a3b8; }
.btn-submit {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 13px 20px;
    background: #2563eb;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background .2s, transform .15s;
    box-shadow: 0 4px 14px rgba(37,99,235,.25);
}
.btn-submit:hover { background: #1d4ed8; }
.btn-submit:active { transform: scale(.98); }
.f-privacy { display: flex; align-items: center; justify-content: center; gap: 5px; font-size: 11px; color: #94a3b8; margin-top: 14px; }
.f-error { font-size: 11px; color: #ef4444; margin-top: 4px; }

/* =========================================
   ALERT BANNERS
   ========================================= */
.alert-success { background:#ecfdf5; border:1px solid #a7f3d0; color:#065f46; border-radius:10px; padding:12px 14px; font-size:13px; display:flex; gap:10px; margin-bottom:16px; }
.alert-error   { background:#fef2f2; border:1px solid #fecaca; color:#991b1b; border-radius:10px; padding:12px 14px; font-size:13px; display:flex; gap:10px; margin-bottom:16px; }
</style>

<div id="cat-page">

{{-- ══════════════════ HERO BAND ══════════════════ --}}
<div class="hero-band">
    <div class="hero-inner">
        {{-- Left text --}}
        <div class="hero-text">
            <span style="display:inline-flex;align-items:center;gap:6px;background:#eff6ff;color:#1d4ed8;font-size:10px;font-weight:800;letter-spacing:.12em;text-transform:uppercase;padding:5px 14px;border-radius:99px;border:1px solid #bfdbfe;margin-bottom:16px;">
                <svg width="12" height="12" fill="currentColor" viewBox="0 0 20 20"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/></svg>
                Katalog Produk
            </span>
            <h1 style="font-size:clamp(26px,4vw,40px);font-weight:900;color:#0f172a;line-height:1.2;margin:0 0 12px;">
                Temukan Solusi Terbaik<br>
                <span style="color:#2563eb;">bersama ABE Group</span>
            </h1>
            <p style="font-size:14px;color:#64748b;line-height:1.7;margin:0 0 24px;max-width:420px;">
                Pilih katalog yang Anda butuhkan, isi data, dan unduh secara gratis.
                Data Anda aman dan tidak disebarluaskan.
            </p>
            {{-- Inline trust strip --}}
            <div style="display:flex;flex-wrap:wrap;gap:20px;">
                @php $strips = [['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','Data Aman','Dijamin kerahasiaannya'],['M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4','Unduh Gratis','Tanpa biaya apapun'],['M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','Informasi Lengkap','Detail produk komprehensif'],['M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z','Dukungan Profesional','Tim siap membantu Anda']]; @endphp
                @foreach($strips as $s)
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:34px;height:34px;background:#eff6ff;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="{{ $s[0] }}"/></svg>
                    </div>
                    <div>
                        <div style="font-size:12px;font-weight:700;color:#0f172a;line-height:1.2;">{{ $s[1] }}</div>
                        <div style="font-size:11px;color:#94a3b8;line-height:1.3;">{{ $s[2] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- Right: floating catalog covers --}}
        <div class="hero-covers">
            @if($catalogs->count() > 0)
                @if($catalogs->count() > 1)
                <div style="width:148px;height:200px;border-radius:12px;overflow:hidden;box-shadow:0 20px 40px rgba(0,0,0,0.3);flex-shrink:0;transform:rotate(4deg) translateY(10px);">
                    @if($catalogs[1]->cover_image)
                        <img src="{{ asset('storage/'.$catalogs[1]->cover_image) }}" style="width:100%;height:100%;object-fit:cover;object-position:top;" alt="">
                    @else
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#f59e0b,#d97706);"></div>
                    @endif
                </div>
                @endif
                <div style="width:148px;height:200px;border-radius:12px;overflow:hidden;box-shadow:0 20px 40px rgba(0,0,0,0.3);flex-shrink:0;transform:rotate(-3deg) translateY(0px);position:relative;z-index:2;">
                    @if($catalogs[0]->cover_image)
                        <img src="{{ asset('storage/'.$catalogs[0]->cover_image) }}" style="width:100%;height:100%;object-fit:cover;object-position:top;" alt="">
                    @else
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#1d4ed8,#2563eb);"></div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>{{-- /hero-band --}}

{{-- ══════════════════ TWO-COL MAIN ══════════════════ --}}
<div class="page-inner">

    {{-- ── LEFT COLUMN ── --}}
    <div class="col-left">

        {{-- Section header --}}
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
            <h2 style="font-size:20px;font-weight:800;color:#0f172a;margin:0;">Pilih Katalog</h2>
            <span style="font-size:12px;font-weight:600;color:#2563eb;background:#eff6ff;border:1px solid #bfdbfe;padding:4px 14px;border-radius:99px;">
                {{ $catalogs->count() }} katalog tersedia
            </span>
        </div>

        {{-- Catalog cards --}}
        @if($catalogs->count() > 0)
            @php
                $bulletSets = [
                    ['Perangkat Komputer','Laptop & Aksesoris','Komponen & Sparepart','Audio Visual'],
                    ['Peralatan Listrik','Peralatan Tangan','Alat Berat & Teknik','Perlengkapan Safety'],
                    ['Produk Berkualitas','Harga Terjangkau','Pengiriman Cepat','Garansi Resmi'],
                    ['Solusi Terpadu','Konsultasi Gratis','Support 24/7','Partner Terpercaya'],
                ];
            @endphp

            @foreach($catalogs as $i => $cat)
            @php $bullets = $bulletSets[$i % count($bulletSets)]; @endphp
            <div id="card-{{ $cat->id }}" class="cat-row" onclick="selectCatalog('{{ $cat->id }}')">

                {{-- Thumbnail --}}
                <div class="cat-thumb">
                    @if($cat->cover_image)
                        <img src="{{ asset('storage/'.$cat->cover_image) }}"
                             alt="{{ $cat->title }}">
                    @else
                        <div class="cat-thumb-placeholder">
                            <svg width="36" height="36" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                    @endif
                </div>

                {{-- Body --}}
                <div class="cat-body">
                    <div>
                        <span class="cat-edition">Edisi {{ $i + 1 }}</span>
                        <div class="cat-title">{{ $cat->title }}</div>
                        <div class="cat-desc">Katalog lengkap untuk kebutuhan bisnis dan profesional Anda.</div>
                        <ul class="cat-bullets">
                            @foreach($bullets as $b)
                            <li>
                                <svg width="14" height="14" fill="#2563eb" viewBox="0 0 20 20" style="flex-shrink:0;"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>{{ $b }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="cat-foot">
                        <span class="cat-pdf-label">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            PDF
                        </span>
                        <button type="button" class="btn-select"
                                onclick="event.stopPropagation(); selectCatalog('{{ $cat->id }}')">
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Pilih Katalog
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        @else
            <div style="background:#fff;border-radius:14px;padding:56px 24px;text-align:center;border:1px solid #e8edf2;">
                <div style="width:56px;height:56px;background:#f1f5f9;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
                    <svg width="26" height="26" fill="none" stroke="#cbd5e1" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <p style="font-size:15px;font-weight:700;color:#374151;margin:0 0 4px;">Belum Ada Katalog</p>
                <p style="font-size:13px;color:#9ca3af;margin:0;">Katalog sedang dalam proses pembaruan.</p>
            </div>
        @endif

        {{-- Privacy banner --}}
        <div class="privacy-banner">
            <div class="privacy-icon">
                <svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <div style="flex:1;">
                <div style="font-size:14px;font-weight:700;color:#0f172a;margin-bottom:4px;">Data Anda 100% Aman</div>
                <div style="font-size:13px;color:#64748b;line-height:1.6;">
                    Kami berkomitmen untuk menjaga kerahasiaan data pribadi Anda.
                    Informasi yang Anda berikan tidak akan disebarluaskan kepada pihak ketiga.
                </div>
            </div>
            <div style="flex-shrink:0;opacity:.07;">
                <svg width="72" height="72" fill="#2563eb" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
            </div>
        </div>

    </div>{{-- /col-left --}}

    {{-- ── RIGHT COLUMN: Form ── --}}
    <div class="col-right">
        <div class="form-card">

            {{-- Header --}}
            <div class="form-head">
                <div class="form-head-icon">
                    <svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </div>
                <div>
                    <div style="font-size:15px;font-weight:700;color:#fff;line-height:1.3;">Unduh Katalog Sekarang</div>
                    <div style="font-size:12px;color:rgba(255,255,255,.7);margin-top:2px;">Isi data di bawah untuk mendapatkan katalog Anda</div>
                </div>
            </div>

            {{-- Body --}}
            <div class="form-body">

                @if(session('success'))
                <div class="alert-success">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="flex-shrink:0;margin-top:1px;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
                @endif
                @if(session('error'))
                <div class="alert-error">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="flex-shrink:0;margin-top:1px;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('error') }}</span>
                </div>
                @endif

                <form action="{{ route('catalog.download') }}" method="POST">
                    @csrf

                    <div class="f-group">
                        <label class="f-label">Pilih Katalog <span style="color:#ef4444;">*</span></label>
                        <div class="f-select-wrap">
                            <select id="catalog_select" name="catalog_id" required class="f-input" style="padding-right:36px;">
                                <option value="">-- Pilih Katalog --</option>
                                @foreach($catalogs as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                        @error('catalog_id')<div class="f-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="f-group">
                        <label class="f-label">Nama Lengkap <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="name" required class="f-input" placeholder="Contoh: Budi Santoso">
                        @error('name')<div class="f-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="f-group">
                        <label class="f-label">Email Valid <span style="color:#ef4444;">*</span></label>
                        <input type="email" name="email" required class="f-input" placeholder="contoh@perusahaan.com">
                        @error('email')<div class="f-error">{{ $message }}</div>@enderror
                    </div>

                    <div class="f-group">
                        <label class="f-label">No. Telepon / WhatsApp <span style="color:#94a3b8;font-weight:400;text-transform:none;letter-spacing:0;">(Opsional)</span></label>
                        <input type="text" name="phone" class="f-input" placeholder="0812-3456-7890">
                        @error('phone')<div class="f-error">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn-submit">
                        <svg width="16" height="16" fill="none" stroke="#fff" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Unduh Katalog Sekarang
                    </button>
                </form>

                <div class="f-privacy">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    Kami menjaga kerahasiaan data Anda
                </div>

            </div>{{-- /form-body --}}
        </div>{{-- /form-card --}}
    </div>{{-- /col-right --}}

</div>{{-- /page-inner --}}
</div>{{-- #cat-page --}}

<script>
function selectCatalog(id) {
    document.querySelectorAll('.cat-row').forEach(function(c) {
        c.classList.remove('is-selected');
    });
    var card = document.getElementById('card-' + id);
    if (card) {
        card.classList.add('is-selected');
        if (window.innerWidth < 1024) {
            document.querySelector('.form-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
    document.getElementById('catalog_select').value = id;
}
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('catalog_select').addEventListener('change', function () {
        if (this.value) {
            selectCatalog(this.value);
        } else {
            document.querySelectorAll('.cat-row').forEach(function(c) { c.classList.remove('is-selected'); });
        }
    });
});
</script>
@endsection
