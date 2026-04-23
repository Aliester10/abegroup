<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - ABE Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-50 to-blue-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-8 w-auto">
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('auth.login') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                        Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                Selamat Datang di ABE Group
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Sistem manajemen modern untuk kebutuhan bisnis Anda. Kelola semuanya dengan mudah melalui dashboard admin kami.
            </p>
            
            <!-- CTA Button -->
            <div class="mb-16">
                <a href="{{ route('auth.login') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    Masuk ke Dashboard Admin
                </a>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-3 gap-8 mt-16">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Manajemen Mudah</h3>
                <p class="text-gray-600">Dashboard intuitif untuk mengelola semua aspek bisnis Anda dengan efisien.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Kontrol Penuh</h3>
                <p class="text-gray-600">Kendali penuh atas data dan operasi dengan sistem keamanan yang terpercaya.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Performa Cepat</h3>
                <p class="text-gray-600">Sistem yang dioptimalkan untuk memberikan pengalaman pengguna yang cepat dan responsif.</p>
            </div>
        </div>

        
        <!-- Business Section -->
        <section class="py-20 bg-[#38466B] relative overflow-hidden -mx-4 sm:-mx-6 lg:-mx-8 mt-16">
            <!-- Decorative Background Elements -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-orange-400/5 rounded-full blur-3xl"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <!-- Header Section -->
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

                <!-- Business Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
                    <!-- ABE Intekno Indonesia -->
                    <a href="#" class="group relative bg-[#4a5a7a]/40 backdrop-blur-sm border border-white/5 rounded-2xl p-8 hover:bg-[#4a5a7a]/60 transition-all duration-300 flex flex-col min-h-[240px]">
                        <!-- Arrow Icon -->
                        <div class="absolute top-8 right-8 text-white/20 group-hover:text-white/40 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 flex flex-col justify-end">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4 pr-12">
                                ABE Intekno Indonesia
                            </h3>
                            <p class="text-white/60 text-sm sm:text-base leading-relaxed">
                                ABE Intekno Indonesia adalah perusahaan teknologi yang menyediakan solusi digital inovatif, sistem integrasi, dan layanan IT profesional.
                            </p>
                        </div>
                    </a>

                    <!-- ARO Baskara Esa -->
                    <a href="#" class="group relative bg-[#4a5a7a]/40 backdrop-blur-sm border border-white/5 rounded-2xl p-8 hover:bg-[#4a5a7a]/60 transition-all duration-300 flex flex-col min-h-[240px]">
                        <!-- Arrow Icon -->
                        <div class="absolute top-8 right-8 text-white/20 group-hover:text-white/40 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 flex flex-col justify-end">
                            <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4 pr-12">
                                ARO Baskara Esa
                            </h3>
                            <p class="text-white/60 text-sm sm:text-base leading-relaxed">
                                ARO Baskara Esa menyediakan perusahaan yang bergerak di bidang konstruksi, infrastruktur, dan pengembangan proyek fisik berkualitas tinggi.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Admin Access Card -->
        <div class="mt-16 bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Akses Admin</h2>
                <p class="text-gray-600 mb-6">
                    Untuk mengakses dashboard admin, silakan login menggunakan kredensial yang telah disediakan.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('auth.login') }}" class="px-6 py-3 bg-purple-600 text-white font-medium rounded-lg hover:bg-purple-700 transition-colors duration-200">
                        Login Admin
                    </a>
                    <a href="{{ route('auth.register') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-lg hover:bg-gray-200 transition-colors duration-200">
                        Daftar Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-600">
                <p>&copy; 2024 ABE Group. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
