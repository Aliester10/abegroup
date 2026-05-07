<header id="main-navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="navbar-container" class="flex items-center justify-between h-32 transition-all duration-500">
            {{-- LOGO AREA --}}
            <a href="{{ route('home') }}" class="flex items-center">
                @php
                    $companyInfo = \App\Models\CompanyInfo::where('is_active', true)->first();
                    $logoPath = ($companyInfo && $companyInfo->logo) ? asset('storage/' . $companyInfo->logo) : asset('assets/img/LOGO ABE GROUP-02.png');
                @endphp
                <img id="navbar-logo" src="{{ $logoPath }}" alt="ABE Group Logo" class="h-20 w-auto object-contain brightness-0 invert transition-all duration-500">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('main-navbar');
        const container = document.getElementById('navbar-container');
        const logo = document.getElementById('navbar-logo');

        function handleScroll() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-abe-navy/95', 'backdrop-blur-md', 'shadow-2xl', 'border-b', 'border-white/10');
                navbar.classList.remove('bg-transparent');
                container.classList.remove('h-32');
                container.classList.add('h-20');
                logo.classList.remove('h-20');
                logo.classList.add('h-12');
            } else {
                navbar.classList.remove('bg-abe-navy/95', 'backdrop-blur-md', 'shadow-2xl', 'border-b', 'border-white/10');
                navbar.classList.add('bg-transparent');
                container.classList.add('h-32');
                container.classList.remove('h-20');
                logo.classList.remove('h-12');
                logo.classList.add('h-20');
            }
        }

        window.addEventListener('scroll', handleScroll);
        // Run once on load to handle refresh at scrolled position
        handleScroll();
    });
</script>
