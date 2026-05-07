<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-abe-blue font-bold text-3xl md:text-4xl uppercase tracking-[0.2em]" style="margin-bottom: 60px !important;">
            MITRA TERPERCAYA
        </h2>
        <div style="height: 60px;"></div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8">
            @forelse(($companies ?? []) as $company)
                <div class="flex items-center justify-center p-6 sm:p-8 bg-slate-50/50 rounded-2xl hover:bg-white hover:shadow-xl transition-all duration-500 group border border-transparent hover:border-slate-100">
                    @if($company->logo)
                        @php
                            $logoUrl = (Str::startsWith($company->logo, 'http')) 
                                ? $company->logo 
                                : (Str::startsWith($company->logo, 'assets/') ? asset($company->logo) : asset('storage/' . $company->logo));
                        @endphp
                        <img src="{{ $logoUrl }}" 
                             alt="{{ $company->name }}" 
                             class="h-10 md:h-14 lg:h-16 w-auto object-contain transition-all duration-500 group-hover:scale-110"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        
                        {{-- Minimalist fallback if image fails --}}
                        <span class="hidden text-slate-400 font-bold text-xs uppercase tracking-widest text-center">{{ $company->name }}</span>
                    @else
                        <span class="text-slate-400 font-bold text-xs uppercase tracking-widest text-center">{{ $company->name }}</span>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-slate-400 font-medium">
                    Belum ada data mitra terpercaya.
                </div>
            @endforelse
        </div>
    </div>
</section>
