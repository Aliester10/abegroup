@extends('layouts.marketing')

@section('title', 'ABE Group')

@section('content')
    @include('partials.marketing.navbar', ['businesses' => $businesses])

    @include('partials.marketing.hero', [
        'heroImageUrl' => $heroImageUrl,
        'heroSubtitle' => $heroSubtitle,
    ])

    @include('partials.marketing.stats', ['stats' => $stats])

    @include('partials.marketing.about', [
        'aboutTitle' => $aboutTitle,
        'aboutContent' => $aboutContent,
        'aboutImageUrl' => $aboutImageUrl,
        'aboutHighlights' => $aboutHighlights,
    ])

    @include('partials.marketing.business', ['businesses' => $businesses])

    @include('partials.marketing.values', ['coreValues' => $coreValues])

    @include('partials.marketing.sustainability', [
        'sustainabilityPoints' => $sustainabilityPoints,
        'sustainabilityImageUrl' => $sustainabilityImageUrl,
    ])

    @include('partials.marketing.cta')

    @include('partials.marketing.footer')
@endsection
