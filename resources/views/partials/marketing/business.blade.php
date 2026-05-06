<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach(($businesses ?? []) as $index => $business)
                <div class="{{ $index === 2 ? 'md:col-span-2' : '' }} relative group overflow-hidden rounded-2xl aspect-[16/10] {{ $index === 2 ? 'md:aspect-[21/9]' : '' }}"
                     data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 200 }}">
                    {{-- Background Image --}}
                    @php
                        $imagePath = $business->image ?? 'assets/img/login-office.jpeg';
                        $bgImage = \Illuminate\Support\Str::startsWith($imagePath, 'assets/') ? asset($imagePath) : asset('storage/' . $imagePath);
                    @endphp
                    <img src="{{ $bgImage }}" alt="{{ $business->name }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    
                    {{-- Custom Gradient Overlay (Top to Bottom) --}}
                    {{-- Color 1: #101828 (100%), Color 2: #39558E (31%) --}}
                    <div class="absolute inset-0 transition-opacity duration-500 group-hover:opacity-90" 
                         style="background: linear-gradient(to bottom, #101828 0%, rgba(57, 85, 142, 0.31) 100%);">
                    </div>
                    
                    {{-- Content --}}
                    <div class="absolute inset-0 p-8 flex flex-col justify-between">
                        <div>
                            {{-- Logo Placeholder or Business Specific Logo --}}
                            <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="Logo" class="h-10 w-auto brightness-0 invert opacity-80">
                        </div>
                        
                        <div class="max-w-xl">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-3">
                                {{ $business->name }}
                            </h3>
                            <p class="text-white/90 text-sm sm:text-base leading-relaxed mb-6 line-clamp-3">
                                {{ strip_tags($business->description) }}
                            </p>
                            <a href="{{ route('business.show', $business->slug) }}" class="inline-flex items-center text-white border border-white/50 rounded-full px-6 py-2 hover:bg-white hover:text-abe-navy transition-all duration-300">
                                Lihat Selengkapnya
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>