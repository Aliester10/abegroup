@extends('layouts.marketing')

@section('title', 'Karir - ABE Group')

@section('content')

    <section class="py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="text-sm font-semibold text-orange-600">Karir</p>
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Bergabung Bersama Kami</h1>
                <p class="mt-4 text-slate-600">Temukan peluang untuk berkembang dan berkontribusi di ABE Group.</p>
            </div>
        </div>
    </section>

    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-4">
                @forelse($careers as $career)
                    <div class="rounded-2xl border border-slate-200 p-6 hover:shadow-md transition">
                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-slate-900">{{ $career->title }}</h3>
                                @if($career->description)
                                    <p class="mt-2 text-sm text-slate-600">{{ Str::limit($career->description, 200) }}</p>
                                @endif
                                <div class="mt-3 text-xs text-slate-500">
                                    {{ $career->location ?: 'Indonesia' }}
                                    @if($career->type)
                                        <span class="mx-2">·</span>{{ $career->type }}
                                    @endif
                                </div>
                            </div>
                            @if($career->apply_url)
                                <a href="{{ $career->apply_url }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-orange-500 hover:bg-orange-400 text-slate-950 font-semibold transition">
                                    Apply
                                    <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.22 3.22a.75.75 0 011.06 0l6 6a.75.75 0 010 1.06l-6 6a.75.75 0 11-1.06-1.06l4.72-4.72H3a.75.75 0 010-1.5h11.94l-4.72-4.72a.75.75 0 010-1.06z" clip-rule="evenodd"/></svg>
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center text-slate-600 py-12">
                        Belum ada lowongan aktif.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
