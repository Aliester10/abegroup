<header class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- LOGO AREA --}}
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-12 w-auto object-contain">
            </a>

            {{-- DESKTOP NAV --}}
            <nav class="hidden md:flex items-center gap-10"> {{-- Spacing lebih lega --}}
                @php
                    $navItems = [
                        ['route' => 'home', 'label' => 'Beranda'],
                        ['route' => 'about', 'label' => 'Tentang'],
                    ];
                @endphp

                @foreach($navItems as $item)
                    <a href="{{ route($item['route']) }}" 
                       class="text-[#1B3A6B] font-semibold font-poppins text-[15px] tracking-wide hover:text-[#f37021] transition-colors duration-300">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                {{-- DROPDOWN BISNIS --}}
                <div class="relative group">
                    <button class="flex items-center gap-1.5 text-[#1B3A6B] font-semibold font-poppins text-[15px] tracking-wide hover:text-[#f37021] transition-colors duration-300">
                        Bisnis
                        <svg class="w-4 h-4 mt-0.5 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>

                    <div class="absolute left-0 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="w-72 rounded-2xl bg-white shadow-2xl ring-1 ring-black/5 overflow-hidden p-2 border border-gray-100">
                            @forelse(($businesses ?? []) as $business)
                                <a href="{{ $business->website_url ?: route('business.show', $business->slug) }}" 
                                   class="block px-4 py-2.5 rounded-xl hover:bg-slate-50 transition-colors group/item">
                                    <div class="font-semibold text-[#1B3A6B] group-hover/item:text-[#f37021] text-sm transition-colors">
                                        {{ $business->name }}
                                    </div>
                                </a>
                            @empty
                                <div class="px-4 py-2 text-sm text-gray-400">Belum ada unit bisnis.</div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <a href="{{ route('career') }}" 
                   class="text-[#1B3A6B] font-semibold font-poppins text-[15px] tracking-wide hover:text-[#f37021] transition-colors duration-300">
                    Karir
                </a>

                <a href="{{ route('news') }}" 
                   class="text-[#1B3A6B] font-semibold font-poppins text-[15px] tracking-wide hover:text-[#f37021] transition-colors duration-300">
                    Berita Terkini
                </a>

                {{-- CTA BUTTON --}}
                <a href="{{ route('contact') }}" 
                   class="ml-4 px-8 py-3 text-white font-bold font-poppins text-[15px] transition-all duration-300 hover:brightness-110 active:scale-95 shadow-md hover:shadow-lg" 
                   style="background-color: #f37021 !important; border-radius: 15px !important;">
                    Hubungi Kami
                </a>
            </nav>

            {{-- MOBILE MENU BUTTON --}}
            <button type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-xl text-[#1B3A6B] hover:bg-gray-100 transition-colors" data-mobile-menu-button>
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    {{-- MOBILE NAV --}}
    <div class="md:hidden hidden" data-mobile-menu>
        <div class="bg-white border-t border-gray-100 px-4 py-6 space-y-2">
            <a href="{{ route('home') }}" class="block px-4 py-3 rounded-xl text-[#1B3A6B] font-semibold font-poppins hover:bg-slate-50 transition-all">Beranda</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 rounded-xl text-[#1B3A6B] font-semibold font-poppins hover:bg-slate-50 transition-all">Tentang</a>
            <a href="{{ route('business') }}" class="block px-4 py-3 rounded-xl text-[#1B3A6B] font-semibold font-poppins hover:bg-slate-50 transition-all">Bisnis</a>
            <a href="{{ route('career') }}" class="block px-4 py-3 rounded-xl text-[#1B3A6B] font-semibold font-poppins hover:bg-slate-50 transition-all">Karir</a>
            <a href="{{ route('news') }}" class="block px-4 py-3 rounded-xl text-[#1B3A6B] font-semibold font-poppins hover:bg-slate-50 transition-all">Berita Terkini</a>
            <div class="pt-4 px-2">
                <a href="{{ route('contact') }}" class="block w-full py-4 text-white font-bold font-poppins text-center shadow-md" style="background-color: #f37021 !important; border-radius: 15px !important;">Hubungi Kami</a>
            </div>
        </div>
    </div>
</header>
