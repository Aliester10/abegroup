@extends('layouts.marketing')

@section('title', 'Berita Terkini - ABE Group')

@section('content')
    @include('partials.marketing.navbar')

    <!-- Header Section -->
    <section class="py-8 sm:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="text-sm font-semibold text-orange-600">Berita Terkini</p>
                <h1 class="mt-2 text-3xl sm:text-2xl font-extrabold text-slate-800">Aktivitas & Informasi</h1>
            </div>
        </div>
    </section>

    

<!-- Featured News Section -->
@if($latestNews)
<section class="pb-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            
            <div class="flex flex-col lg:flex-row">

                <!-- IMAGE -->
                <div class="lg:w-2/5 h-29 sm:h-20 lg:h-[120px]">
                    @if($latestNews->image)
                        <img 
                            src="{{ asset('storage/' . $latestNews->image) }}" 
                            alt="{{ $latestNews->title }}"
                            class="w-full h-full object-cover rounded-l-2xl"
                        >
                    @else
                        <img 
                            src="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa"
                            class="w-full h-full object-cover rounded-l-2xl"
                        >
                    @endif
                </div>

                <!-- CONTENT -->
                <div class="lg:w-1/2 bg-slate-100 p-6 sm:p-8 flex flex-col justify-center">
                    
                    <!-- META -->
                    <div class="flex items-center gap-3 mb-3 flex-wrap">
                        <span class="bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full">
                            Teknologi
                        </span>

                        <div class="flex items-center gap-1 text-sm text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" d="M8 7V3m8 4V3m-9 8h10"/>
                            </svg>
                            {{ $latestNews->created_at->format('d F Y') }}
                        </div>

                        <div class="flex items-center gap-1 text-sm text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" d="M12 8v4l3 3"/>
                            </svg>
                            8 min
                        </div>
                    </div>

                    <!-- TITLE -->
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight mb-3">
                        {{ $latestNews->title }}
                    </h2>

                    <!-- DESC -->
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                        {{ Str::limit($latestNews->excerpt ?? $latestNews->content, 140) }}
                    </p>

                    <!-- BUTTON -->
                    <div>
                        <a href="{{ route('news.show', $latestNews->slug) }}"
                           class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition">
                            Baca Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
@endif


    <!-- Search Section -->
    <section class="mt-8 pb-11">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <form class="w-full max-w-2xl" action="{{ route('news') }}" method="GET">
                    <div class="relative flex items-center">
                        <input 
                            type="text" 
                            name="search" 
                            value="{{ request('search') }}"
                            placeholder="Cari berita..." 
                            class="w-full pl-4 pr-16 py-3 text-slate-900 bg-white border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-8 pointer-events-none">
                            <svg class="h-5 w-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Semua Aktivitas Section -->
    <section class="mt-8 pb-11">
    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Semua Aktivitas</h2>
            
            <!-- Kategori Navigasi -->
            <div class="border-b border-slate-200 mb-8">
                <nav class="flex space-x-8 overflow-x-auto" aria-label="Tabs">
                    <button class="py-2 px-1 border-b-2 border-orange-500 text-orange-600 font-medium text-sm whitespace-nowrap">
                        Semua
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Pencapaian
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Keberlanjutan
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Penghargaan
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Berita
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Cerita Inovasi
                    </button>
                    <button class="py-2 px-1 border-b-2 border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 font-medium text-sm whitespace-nowrap">
                        Pengumuman
                    </button>
                </nav>
            </div>
            
            <!-- Grid Berita -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($otherNews as $item)
                    <article class="group">
                        <!-- Gambar -->
                        <div class="aspect-[16/10] bg-slate-100 rounded-lg overflow-hidden mb-4">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200"></div>
                            @endif
                        </div>
                        
                        <!-- Konten -->
                        <div class="space-y-2">
                            <div class="text-sm text-slate-500">
                                {{ $item->created_at->format('d M Y') }}
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 group-hover:text-orange-600 transition-colors">
                                <a href="{{ route('news.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ Str::limit($item->excerpt ?? $item->content, 100) }}
                            </p>
                            <div class="pt-2">
                                <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center gap-1 text-orange-600 hover:text-orange-500 font-semibold text-sm">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.22 3.22a.75.75 0 011.06 0l6 6a.75.75 0 010 1.06l-6 6a.75.75 0 11-1.06-1.06l4.72-4.72H3a.75.75 0 010-1.5h11.94l-4.72-4.72a.75.75 0 010-1.06z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center text-slate-600 py-12">
                        <div class="max-w-md mx-auto">
                            <svg class="w-12 h-12 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                            <p>Belum ada aktivitas untuk ditampilkan.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($otherNews->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $otherNews->links() }}
                </div>
            @endif
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
