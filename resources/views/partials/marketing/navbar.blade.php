<header class="sticky top-0 z-50">
    <div class="bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/90 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="flex items-center gap-3 text-gray-900">
                    <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-20">
                </a>

                <nav class="hidden md:flex items-center gap-1 text-sm">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 transition font-bold font-poppins">Beranda</a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 transition font-bold font-poppins">Tentang</a>

                    <div class="relative group">
                        <button type="button" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 transition inline-flex items-center gap-2 font-bold font-poppins">
                            Bisnis
                            <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </button>
                        <div class="absolute left-0 top-full pt-2 hidden group-hover:block">
                            <div class="w-72 rounded-xl bg-white shadow-xl ring-1 ring-black/5 overflow-hidden">
                                <div class="p-2">
                                    @forelse(($companies ?? []) as $company)
                                        <a href="{{ $company->website_url ?: route('business') }}" class="block px-3 py-2 rounded-lg hover:bg-slate-50 transition">
                                            <div class="font-medium text-slate-900">{{ $company->name }}</div>
                                            <div class="text-xs text-slate-500">{{ Str::limit($company->description, 60) }}</div>
                                        </a> 
                                    @empty
                                        <a href="{{ route('business') }}" class="block px-3 py-2 rounded-lg hover:bg-slate-50 transition">
                                            <div class="font-medium text-slate-900">Unit Bisnis</div>
                                            <div class="text-xs text-slate-500">Lihat portofolio bisnis ABE Group.</div>
                                        </a>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('career') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 transition font-bold font-poppins">Karir</a>
                    <a href="{{ route('news') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 transition font-bold font-poppins">Berita Terkini</a>
                </nav>

                <div class="hidden md:flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-[#FF6900] hover:bg-orange-600 text-white font-semibold transition">
                        Hubungi Kami
                    </a>
                </div>

                <button type="button" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-gray-700 hover:bg-gray-100" data-mobile-menu-button aria-label="Open menu">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden hidden" data-mobile-menu>
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
                <div class="flex flex-col gap-1 text-sm">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 font-bold font-poppins">Beranda</a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 font-bold font-poppins">Tentang</a>
                    <a href="{{ route('business') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 font-bold font-poppins">Bisnis</a>
                    <a href="{{ route('career') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 font-bold font-poppins">Karir</a>
                    <a href="{{ route('news') }}" class="px-3 py-2 rounded-md text-[#1B3A6B] hover:bg-gray-100 font-bold font-poppins">Berita Terkini</a>
                    <a href="{{ route('contact') }}" class="mt-2 inline-flex items-center justify-center px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
