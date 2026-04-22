@extends('layouts.marketing')

@section('title', 'Unit Bisnis - ABE Group')

@section('content')
    @include('partials.marketing.navbar', ['companies' => $companies])

    <section class="py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="text-sm font-semibold text-orange-600">Unit Bisnis</p>
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Portofolio Kami</h1>
                <p class="mt-4 text-slate-600">Berbagai lini usaha yang dikelola untuk menciptakan nilai berkelanjutan.</p>
            </div>
        </div>
    </section>

    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($companies as $company)
                    <article class="group rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition">
                        <div class="aspect-[16/10] bg-slate-100">
                            <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-slate-900">{{ $company->name }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ Str::limit($company->description, 140) }}</p>
                            @if($company->website_url)
                                <div class="mt-5">
                                    <a href="{{ $company->website_url }}" target="_blank" class="inline-flex items-center gap-2 text-orange-600 hover:text-orange-500 font-semibold">
                                        Kunjungi Situs
                                        <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.22 3.22a.75.75 0 011.06 0l6 6a.75.75 0 010 1.06l-6 6a.75.75 0 11-1.06-1.06l4.72-4.72H3a.75.75 0 010-1.5h11.94l-4.72-4.72a.75.75 0 010-1.06z" clip-rule="evenodd"/></svg>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center text-slate-600">
                        Belum ada unit bisnis.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
