@extends('layouts.marketing')

@section('title', 'ABE Group')

@section('content')

    @include('partials.marketing.hero', [
        'heroImageUrl' => $heroImageUrl,
        'heroSubtitle' => $heroSubtitle,
    ])

    @include('partials.marketing.about', [
        'aboutTitle' => $aboutTitle,
        'aboutContent' => $aboutContent,
        'aboutImageUrl' => $aboutImageUrl,
        'aboutHighlights' => $aboutHighlights,
        'about_company' => $about_company,
    ])

    @include('partials.marketing.business', ['businesses' => $businesses])

    @include('partials.marketing.values', ['coreValues' => $coreValues])

    @include('partials.marketing.partners', ['companies' => $companies])

    {{-- Bottom Decorative Image --}}
    <section class="w-full">
        <div class="aspect-[21/7] w-full relative">
            <img src="{{ asset('bgimage.png') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/49"></div>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
