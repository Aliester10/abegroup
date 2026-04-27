@extends('layouts.marketing')

@section('title', 'Berita Terkini - ABE Group')

@section('content')

    <!-- Header Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-3 sm:px-4 py-1.5 bg-orange-50 text-orange-600 text-xs sm:text-sm font-bold rounded-full tracking-wider uppercase mb-4">
                    Update Terkini
                </span>
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                    Aktivitas & Informasi <span class="text-orange-500">Terbaru</span>
                </h1>
                <p class="mt-4 sm:mt-6 text-sm sm:text-base lg:text-lg text-slate-600 leading-relaxed">
                    Dapatkan berita terbaru seputar kegiatan, inovasi, dan perkembangan terkini dari seluruh unit bisnis ABE Group.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured News Section -->
    @if($latestNews)
    <section class="pb-6 sm:pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl lg:rounded-[2rem] shadow-2xl shadow-slate-200/60 overflow-hidden border border-slate-100">
                <div class="flex flex-col lg:flex-row min-h-[400px] lg:min-h-[450px]">
                    
                    <!-- Left: Image -->
                    <div class="lg:w-1/2 relative bg-slate-900 min-h-[250px] sm:min-h-[300px] lg:min-h-full">
                        @if($latestNews->image)
                            <img 
                                src="{{ asset('storage/' . $latestNews->image) }}" 
                                alt="{{ $latestNews->title }}"
                                class="absolute inset-0 w-full h-full object-cover"
                            >
                        @else
                            <div class="absolute inset-0 bg-slate-900 grid place-items-center">
                                <span class="text-slate-800 font-black text-4xl sm:text-6xl italic opacity-20 transform -rotate-12">ABE</span>
                            </div>
                        @endif
                    </div>

                    <!-- Right: Content -->
                    <div class="lg:w-1/2 p-6 sm:p-8 lg:p-12 xl:p-16 flex flex-col justify-center">
                        
                        <!-- Meta Info -->
                        <div class="flex items-center gap-3 sm:gap-4 mb-4 sm:mb-6 flex-wrap">
                            <span class="bg-orange-50 text-orange-600 text-[10px] sm:text-xs font-bold px-2 sm:px-3 py-1 rounded-md uppercase tracking-widest border border-orange-100">
                                Teknologi
                            </span>
                            
                            <div class="flex items-center gap-1.5 text-xs font-bold text-slate-400">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-xs">{{ $latestNews->created_at->format('d M Y') }}</span>
                            </div>

                            <div class="flex items-center gap-1.5 text-xs font-bold text-slate-400">
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>8 min</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <h2 class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl font-black text-slate-900 leading-[1.1] mb-4 sm:mb-6">
                            {{ $latestNews->title }}
                        </h2>

                        <!-- Excerpt -->
                        <p class="text-slate-500 text-sm sm:text-base lg:text-lg leading-relaxed mb-6 sm:mb-10 line-clamp-3">
                            {{ Str::limit($latestNews->excerpt ?? $latestNews->content, 150) }}
                        </p>

                        <!-- Action -->
                        <div>
                            <a href="{{ route('news.show', $latestNews->slug) }}"
                               class="inline-flex items-center gap-2 sm:gap-3 bg-[#FF6900] hover:bg-slate-900 text-white text-xs sm:text-sm font-bold px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 rounded-xl transition-all duration-300 shadow-xl shadow-orange-500/20">
                                Baca Selengkapnya
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Search Section -->
    <section class="pb-6 sm:pb-10">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative group">
                <form action="{{ route('news') }}" method="GET">
                    <div class="relative flex items-center">
                        <input 
                            type="text" 
                            name="search" 
                            value="{{ request('search') }}"
                            placeholder="Cari berita atau artikel..." 
                            class="w-full pl-10 sm:pl-14 pr-4 sm:pr-6 py-3 sm:py-4 text-sm sm:text-base text-slate-900 bg-white border border-slate-200 rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl shadow-slate-200/40 focus:outline-none focus:ring-2 focus:ring-orange-500/20 focus:border-orange-500 transition-all duration-300">
                        <div class="absolute inset-y-0 left-3 sm:left-5 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 sm:h-6 sm:w-6 text-slate-400 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Semua Aktivitas Section -->
    <section class="pb-16 sm:pb-20 lg:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Title -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 tracking-tight mb-6 sm:mb-8">Semua <span class="text-slate-900">Berita</span></h2>

            <!-- Category Tabs -->
            <div class="mb-8 sm:mb-10 border-b border-slate-200">
                <nav class="flex flex-wrap gap-x-1 -mb-px overflow-x-auto" aria-label="Kategori Berita">
                    <a href="{{ route('news', array_merge(request()->only('search'), [])) }}" 
                       class="px-3 sm:px-4 py-3 text-xs sm:text-sm font-semibold transition-colors duration-200 border-b-2 whitespace-nowrap {{ !$category ? 'text-orange-600 border-orange-500' : 'text-slate-500 border-transparent hover:text-slate-700 hover:border-slate-300' }}">
                        Semua
                    </a>
                    @foreach($categories as $key => $label)
                        <a href="{{ route('news', array_merge(request()->only('search'), ['category' => $key])) }}" 
                           class="px-3 sm:px-4 py-3 text-xs sm:text-sm font-semibold transition-colors duration-200 border-b-2 whitespace-nowrap {{ $category == $key ? 'text-orange-600 border-orange-500' : 'text-slate-500 border-transparent hover:text-slate-700 hover:border-slate-300' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <!-- Grid Berita -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @forelse($otherNews as $item)
                    <article class="group bg-white rounded-2xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-400 flex flex-col h-full overflow-hidden">
                        <!-- Gambar -->
                        <div class="aspect-[16/10] overflow-hidden relative bg-slate-100">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Konten -->
                        <div class="p-4 sm:p-5 lg:p-6 flex flex-col flex-1">
                            <!-- Tanggal -->
                            <div class="flex items-center gap-1.5 text-xs text-slate-400 mb-2 sm:mb-3">
                                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ $item->created_at->format('d M Y') }}</span>
                            </div>

                            <!-- Judul -->
                            <h3 class="text-sm sm:text-base lg:text-lg font-bold text-slate-900 leading-snug mb-3 sm:mb-4 line-clamp-2 group-hover:text-slate-700 transition-colors duration-200">
                                <a href="{{ route('news.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h3>

                            <!-- Link Baca Selengkapnya -->
                            <div class="mt-auto">
                                <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center gap-1.5 text-orange-600 hover:text-orange-700 font-bold text-xs sm:text-sm transition-colors duration-200">
                                    Baca Selengkapnya
                                    <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 group-hover:translate-x-0.5 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.22 3.22a.75.75 0 011.06 0l6 6a.75.75 0 010 1.06l-6 6a.75.75 0 11-1.06-1.06l4.72-4.72H3a.75.75 0 010-1.5h11.94l-4.72-4.72a.75.75 0 010-1.06z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center text-slate-500 py-20 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                        <svg class="w-16 h-16 text-slate-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <p class="text-lg font-medium">Belum ada berita untuk kategori ini.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($otherNews->hasPages())
                <div class="mt-12 flex justify-center">
                    <nav class="inline-flex items-center gap-1">
                        {{-- Previous Page Link --}}
                        @if($otherNews->onFirstPage())
                            <span class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </span>
                        @else
                            <a href="{{ $otherNews->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </a>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach($otherNews->getUrlRange(1, $otherNews->lastPage()) as $page => $url)
                            @if($page == $otherNews->currentPage())
                                <span class="w-10 h-10 flex items-center justify-center rounded-lg bg-orange-500 text-white font-bold text-sm">{{ $page }}</span>
                            @else
                                @if($otherNews->lastPage() > 7 && $page > 3 && $page < $otherNews->lastPage() - 1 && abs($page - $otherNews->currentPage()) > 1)
                                    @if($page == 4 || $page == $otherNews->lastPage() - 2)
                                        <span class="w-10 h-10 flex items-center justify-center text-slate-400 text-sm">...</span>
                                    @endif
                                @else
                                    <a href="{{ $url }}" class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 font-medium text-sm border border-slate-200 transition-colors">{{ $page }}</a>
                                @endif
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if($otherNews->hasMorePages())
                            <a href="{{ $otherNews->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        @else
                            <span class="w-10 h-10 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </span>
                        @endif
                    </nav>
                </div>
            @endif
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
