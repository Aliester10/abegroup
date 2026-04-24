<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - ABE Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('styles')
</head>

<body class="bg-gray-50 dark:bg-gray-900 h-screen overflow-hidden" x-data="data()" x-init="init()">
    <div class="flex h-full bg-gray-50 dark:bg-gray-900">
        <!-- Mobile sidebar backdrop -->
        <div x-show="isSideMenuOpen" 
             x-transition:enter="transition ease-in-out duration-150" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100" 
             x-transition:leave="transition ease-in-out duration-150" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0" 
             class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center lg:hidden"
             @click="closeSideMenu"></div>

        <!-- Sidebar -->
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 lg:static lg:block lg:mt-0"
               :class="isSideMenuOpen ? 'block' : 'hidden'">
            <div class="h-full px-3 py-4 flex flex-col">
                <!-- Logo -->
                <div class="mb-8">
                    <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-8 w-auto">
                </div>

                <!-- Navigation -->
                <nav class="space-y-1 flex-1 overflow-y-auto">
                    <!-- Menu Utama -->
                    <div class="px-4 pt-2 pb-1 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Menu Utama
                    </div>
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>

                    <!-- Konten Beranda -->
                    <div class="px-4 pt-4 pb-1 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Konten Beranda
                    </div>
                    <a href="{{ route('admin.banner') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.banner*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Banner
                    </a>
                    <a href="{{ route('admin.home-stats.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.home-stats*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        Statistik Home
                    </a>
                    <a href="{{ route('admin.core-values.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.core-values*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17a4 4 0 100-8 4 4 0 000 8zm0 0v2m0-10V7m6.364 10.364l1.414 1.414M4.222 4.222l1.414 1.414m12.728 0l-1.414 1.414M5.636 18.364l-1.414 1.414"></path>
                        </svg>
                        Home Values
                    </a>
                    <a href="{{ route('admin.testimonials.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.testimonials*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h6m-9 8h16a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Testimonial
                    </a>

                    <!-- Profil & Bisnis -->
                    <div class="px-4 pt-4 pb-1 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Profil & Bisnis
                    </div>
                    <!-- About Us Module -->
                    <div x-data="{ open: {{ request()->routeIs('admin.about*') || request()->routeIs('admin.timelines*') || request()->routeIs('admin.visi_misi*') || request()->routeIs('admin.company_values*') ? 'true' : 'false' }} }" class="space-y-1">
                        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                About Us
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="pl-8 space-y-1">
                            <a href="{{ route('admin.about.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.about*') ? 'font-bold text-orange-500' : '' }}">
                                Tentang Kami
                            </a>
                            <a href="{{ route('admin.visi_misi.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.visi_misi*') ? 'font-bold text-orange-500' : '' }}">
                                Visi & Misi
                            </a>
                            <a href="{{ route('admin.company_values.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.company_values*') ? 'font-bold text-orange-500' : '' }}">
                                Nilai Perusahaan
                            </a>
                            <a href="{{ route('admin.timelines.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.timelines*') ? 'font-bold text-orange-500' : '' }}">
                                Timeline
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('admin.business.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.business*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"></path>
                        </svg>
                        Unit Bisnis
                    </a>
                    <a href="{{ route('admin.sustainability.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.sustainability*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19c4-8 12-8 16-4-4 8-12 8-16 4zM12 12l4-4M12 12l-4 4"/>
                        </svg>
                        Sustainability
                    </a>
                    <a href="{{ route('admin.highlights.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.highlights*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Company Highlights
                    </a>
                    <a href="{{ route('admin.partner') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.partner*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Partner
                    </a>

                    <!-- Informasi & Karir -->
                    <div class="px-4 pt-4 pb-1 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Informasi & Karir
                    </div>
                    <a href="{{ route('admin.news') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.news*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM7 8h10M7 12h6"></path>
                        </svg>
                        Berita
                    </a>
                    <!-- Career Module -->
                    <div x-data="{ open: {{ request()->routeIs('admin.job-*') || request()->routeIs('admin.benefits*') ? 'true' : 'false' }} }" class="space-y-1">
                        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m-4 4h16v10a2 2 0 01-2 2H6a2 2 0 01-2-2V10z"></path>
                                </svg>
                                Karir
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="pl-8 space-y-1">
                            <a href="{{ route('admin.job_vacancies.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.job_vacancies*') ? 'font-bold text-orange-500' : '' }}">
                                Vacancies
                            </a>
                            <a href="{{ route('admin.job_categories.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.job_categories*') ? 'font-bold text-orange-500' : '' }}">
                                Categories
                            </a>
                            <a href="{{ route('admin.benefits.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.benefits*') ? 'font-bold text-orange-500' : '' }}">
                                Benefits
                            </a>
                            <a href="{{ route('admin.applications.index') }}" class="block px-4 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white {{ request()->routeIs('admin.applications*') ? 'font-bold text-orange-500' : '' }}">
                                Applications
                            </a>
                        </div>
                    </div>

                    <!-- Komunikasi -->
                    <div class="px-4 pt-4 pb-1 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Komunikasi
                    </div>
                    <a href="{{ route('admin.contacts.index') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 {{ request()->routeIs('admin.contacts*') ? 'bg-gray-100 dark:bg-gray-700 font-medium' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Pesan Masuk
                    </a>
                </nav>
                <!-- Logout Button -->
                <div class="mt-4">
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col h-full">
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 flex-shrink-0 sticky top-0 z-30">
                <div class="px-4 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <!-- Mobile hamburger -->
                            <button @click="toggleSideMenu" class="p-2 mr-4 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 lg:hidden">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path x-show="!isSideMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    <path x-show="isSideMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                            <!-- Logo (Mobile only) -->
                            <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-6 w-auto lg:hidden mr-4">
                            <h1 class="text-lg font-semibold text-gray-900 dark:text-white">@yield('title', 'Dashboard')</h1>
                        </div>
                        <div class="flex items-center space-x-4">
                            <!-- Theme Toggle Button -->
                            <button @click="toggleTheme()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                                <svg x-show="!dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <svg x-show="dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                </svg>
                            </button>
                            <span class="text-sm text-gray-600 dark:text-gray-400 hidden sm:inline">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Alpine.js data function
        function data() {
            return {
                dark: false,
                isSideMenuOpen: false,
                isNotificationsMenuOpen: false,
                isProfileMenuOpen: false,
                isPagesMenuOpen: false,
                toggleTheme() {
                    this.dark = !this.dark;

                    if (this.dark) {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    }
                },
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen;
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false;
                },
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false;
                },
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen;
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false;
                },
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen;
                },
                init() {
                    // Check for saved theme preference or default to light mode
                    const savedTheme = localStorage.getItem('theme');
                    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        this.dark = true;
                        document.documentElement.classList.add('dark');
                    }
                }
            }
        }
    </script>
@stack("scripts")
</body>

</html>