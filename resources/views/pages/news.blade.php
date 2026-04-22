@extends('layouts.marketing')

@section('title', 'Berita Terkini - ABE Group')

@section('content')
    @include('partials.marketing.navbar')

    <section class="py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="text-sm font-semibold text-orange-600">Berita Terkini</p>
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Aktivitas & Update</h1>
                <p class="mt-4 text-slate-600">Kabar terbaru dari ABE Group dan inisiatif yang sedang berjalan.</p>
            </div>
        </div>
    </section>

    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($activities as $activity)
                    <article class="group rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition">
                        <div class="aspect-[16/10] bg-slate-100">
                            @if($activity->image)
                                <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" class="w-full h-full object-cover" />
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200"></div>
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="text-xs text-slate-500">
                                {{ optional($activity->date)->format('d M Y') }}
                                @if($activity->location)
                                    <span class="mx-2">·</span>{{ $activity->location }}
                                @endif
                            </div>
                            <h3 class="mt-2 font-semibold text-slate-900">{{ $activity->title }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ Str::limit($activity->description, 120) }}</p>
                            <div class="mt-4">
                                <a href="{{ route('news.show', $activity) }}" class="inline-flex items-center gap-2 text-orange-600 hover:text-orange-500 font-semibold">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.22 3.22a.75.75 0 011.06 0l6 6a.75.75 0 010 1.06l-6 6a.75.75 0 11-1.06-1.06l4.72-4.72H3a.75.75 0 010-1.5h11.94l-4.72-4.72a.75.75 0 010-1.06z" clip-rule="evenodd"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center text-slate-600">
                        Belum ada berita untuk ditampilkan.
                    </div>
                @endforelse
            </div>

            @if($activities->hasPages())
                <div class="mt-10 flex justify-center">
                    {{ $activities->links() }}
                </div>
            @endif
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
