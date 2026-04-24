<section class="py-20 bg-[#38466B] relative overflow-hidden">
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        {{-- Header Section --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="flex items-center justify-center gap-2 mb-6">
                <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                <span class="text-white/80 font-normal tracking-wide text-sm">Unit Bisnis</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white tracking-tight leading-tight mb-6">
                Bisnis di Bawah <span class="text-orange-500">ABE Group</span>
            </h2>
            <p class="text-base sm:text-lg text-white/70 leading-relaxed max-w-2xl mx-auto">
                Dua entitas bisnis yang saling bersinergi untuk memberikan layanan terbaik bagi klien dan mitra di seluruh Indonesia.
            </p>
        </div>

        {{-- Business Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
            @forelse(($businesses ?? []) as $business)
                <a href="{{ route('business.show', $business->slug) }}" 
                   class="group relative bg-[#4a5a7a]/40 backdrop-blur-sm border border-white/5 rounded-2xl p-8 hover:bg-[#4a5a7a]/60 transition-all duration-300 flex flex-col min-h-[240px]">
                    
                    {{-- Arrow Icon --}}
                    <div class="absolute top-8 right-8 text-white/20 group-hover:text-white/40 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>

                    {{-- Content --}}
                    <div class="flex-1 flex flex-col justify-end">
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4 pr-12">
                            {{ $business->name }}
                        </h3>

                        <p class="text-white/60 text-sm sm:text-base leading-relaxed line-clamp-3">
                            {{ Str::limit(strip_tags($business->description), 150) }}
                        </p>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-16 bg-[#4a5a7a]/20 rounded-2xl border border-dashed border-white/10">
                    <p class="text-white/40 text-sm">Unit bisnis sedang dalam tahap pemeliharaan data.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>