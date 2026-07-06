<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center font-sans font-extrabold text-3xl md:text-5xl tracking-tight text-gray-900" style="margin-bottom: 20px;">
            Mitra Terpercaya
        </h2>
        <p class="text-center text-gray-500 max-w-2xl mx-auto mb-16 text-lg">
            Kami bekerja sama dengan berbagai perusahaan terkemuka untuk memberikan solusi terbaik.
        </p>

<style>
    .partner-card {
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    .partner-card:hover {
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        transform: translateY(-5px);
    }
</style>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8">
            @forelse(($companies ?? []) as $company)
                <div class="bg-white rounded-2xl p-6 flex items-center justify-center group border border-gray-50 h-32 partner-card">
                    @if($company->logo)
                        @php
                            $logoUrl = (Str::startsWith($company->logo, 'http')) 
                                ? $company->logo 
                                : (Str::startsWith($company->logo, 'assets/') ? asset($company->logo) : asset('storage/' . $company->logo));
                        @endphp
                        <img src="{{ $logoUrl }}" 
                             alt="{{ $company->name }}" 
                             class="max-h-full max-w-full object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-105"
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
