<header class="absolute top-0 left-0 w-full z-50 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-32">
            {{-- LOGO AREA --}}
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-20 w-auto object-contain brightness-0 invert">
            </a>

            {{-- DESKTOP NAV - Business Units Only --}}
            <nav class="hidden md:flex items-center gap-12">
                @foreach(($businesses ?? []) as $business)
                    <a href="{{ $business->website_link ?: route('business.show', $business->slug) }}" 
                       class="text-white font-medium font-poppins text-sm tracking-widest hover:text-orange-400 transition-colors duration-300 no-underline uppercase">
                        {{ $business->name }}
                    </a>
                @endforeach
            </nav>

            {{-- MOBILE MENU BUTTON --}}
            <button type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-xl text-white" data-mobile-menu-button>
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    {{-- MOBILE NAV --}}
    <div class="md:hidden hidden" data-mobile-menu>
        <div class="bg-abe-navy/95 backdrop-blur-md px-4 py-6 space-y-2">
            @foreach(($businesses ?? []) as $business)
                <a href="{{ $business->website_link ?: route('business.show', $business->slug) }}" 
                   class="block px-4 py-3 text-white font-medium font-poppins hover:bg-white/10 transition-all uppercase text-sm tracking-wider">
                    {{ $business->name }}
                </a>
            @endforeach
        </div>
    </div>
</header>
