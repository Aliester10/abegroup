<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-abe-blue font-bold text-xl uppercase tracking-widest mb-16">
            MITRA TERPERCAYA
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-y-12 gap-x-8 items-center">
            @forelse(($companies ?? []) as $company)
                <div class="flex flex-col items-center justify-center group px-4">
                    @if($company->logo)
                        @php
                            $logoUrl = (Str::startsWith($company->logo, 'http')) 
                                ? $company->logo 
                                : (Str::startsWith($company->logo, 'assets/') ? asset($company->logo) : asset('storage/' . $company->logo));
                        @endphp
                        <img src="{{ $logoUrl }}" 
                             alt="{{ $company->name }}" 
                             class="h-8 md:h-12 w-auto object-contain transition-all duration-300 group-hover:scale-110"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        
                        {{-- Fallback text if image fails to load --}}
                        <span class="hidden mt-2 text-gray-400 font-semibold text-sm uppercase tracking-tighter">{{ $company->name }}</span>
                    @else
                        <span class="text-gray-400 font-semibold text-sm uppercase tracking-tighter">{{ $company->name }}</span>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-center text-gray-300 italic">
                    Belum ada data mitra terpercaya.
                </div>
            @endforelse
        </div>
    </div>
</section>
