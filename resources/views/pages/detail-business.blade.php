@extends('layouts.marketing')

@section('title', $business->name . ' - ABE Group')

@section('content')

{{-- 1. HERO SECTION --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Background Image from Admin --}}
    @php
        $heroImage = $business->image ? asset('storage/' . $business->image) : asset('assets/img/login-office.jpeg');
    @endphp
    <img src="{{ $heroImage }}" alt="{{ $business->name }}" class="absolute inset-0 w-full h-full object-cover">
    
    {{-- Overlay with 59% transparency --}}
    <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.59);"></div>

    {{-- Content: Logo positioned on the left side like in reference --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-md">
            @php
                $companyInfo = \App\Models\CompanyInfo::where('is_active', true)->first();
                $groupLogo = ($companyInfo && $companyInfo->logo) ? asset('storage/' . $companyInfo->logo) : asset('assets/img/LOGO ABE GROUP-02.png');
                $businessLogo = $business->logo ? asset('storage/' . $business->logo) : $groupLogo;
            @endphp
            <div class="flex flex-col items-start">
                <img src="{{ $businessLogo }}" alt="{{ $business->name }}" class="h-32 md:h-64 w-auto object-contain brightness-0 invert drop-shadow-2xl">
            </div>
        </div>
    </div>
</section>

{{-- 2. ABOUT SECTION --}}
<section class="text-white py-24 md:py-40" style="background-color: #2C596B !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-12 md:gap-20 items-start">
            {{-- Left: Name --}}
            <div class="w-full md:w-[30%] shrink-0">
                <h2 class="text-3xl md:text-4xl font-bold uppercase tracking-wide leading-tight">
                    {{ $business->name }}
                </h2>
            </div>
            {{-- Right: Description --}}
            <div class="w-full md:w-[70%]">
                <div class="text-white/90 text-base md:text-lg leading-relaxed space-y-6 font-light">
                    {!! nl2br(e($business->description)) !!}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. VISUAL BREAK 1 --}}
<section class="w-full">
    <img src="{{ asset('assets/img/gambar1bisnis.png') }}" alt="Visual Break" class="w-full h-auto object-cover">
</section>

{{-- 4. PARTNER & PRINCIPALS SECTION --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center font-bold text-2xl md:text-3xl uppercase tracking-[0.4em]" style="color: #2C596B !important; margin-bottom: 80px !important;">
            PARTNER & PRINCIPALS
        </h2>

        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20">
            @forelse(($companies ?? []) as $partner)
                <div class="flex items-center justify-center shrink-0">
                    @if($partner->logo)
                        @php
                            $logoUrl = (Str::startsWith($partner->logo, 'http')) 
                                ? $partner->logo 
                                : (Str::startsWith($partner->logo, 'assets/') ? asset($partner->logo) : asset('storage/' . $partner->logo));
                        @endphp
                        <img src="{{ $logoUrl }}" 
                             alt="{{ $partner->name }}" 
                             class="h-8 md:h-12 w-auto object-contain transition-all duration-500 hover:scale-110">
                    @else
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-widest">{{ $partner->name }}</span>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-slate-400 font-medium">
                    Belum ada data partner.
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- 5. VISUAL BREAK 2 --}}
<section class="w-full">
    <img src="{{ asset('assets/img/gambar2bisnis.png') }}" alt="Visual Break" class="w-full h-auto object-cover">
</section>

@include('partials.marketing.footer')

@endsection

@push('styles')
<style>
    /* Prevent any overlap issues */
    .business-hero img {
        pointer-events: none;
    }
</style>
@endpush