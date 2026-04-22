<section class="relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ $heroImageUrl ?? asset('assets/img/create-account-office.jpeg') }}" alt="ABE Group" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-slate-950/70"></div>
        <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-slate-950/70 to-orange-500/10"></div>
    </div>

    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="min-h-[78vh] flex items-center justify-center py-16">
                <div class="max-w-3xl text-center">
                    <p class="inline-flex items-center gap-2 text-white/70 text-sm mb-4">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        Corporate Group • Indonesia
                    </p>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                        Membangun Masa Depan
                        <span class="block text-orange-400">Bersama ABE Group</span>
                    </h1>

                    <p class="mt-5 text-base sm:text-lg text-white/75 max-w-2xl">
                        {{ $heroSubtitle ?? 'ABE Group adalah grup perusahaan yang berfokus pada pertumbuhan berkelanjutan, inovasi, dan tata kelola yang kuat untuk menciptakan dampak positif.' }}
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                        <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-white hover:bg-gray-100 text-gray-900 font-semibold transition">
                            Tentang Kami
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 ml-2">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-transparent hover:bg-white/10 text-white font-semibold border border-white transition">
                            Hubungi Kami
                        </a>
                    </div>

                    <div class="mt-12 flex justify-center">
                        <div class="inline-flex items-center gap-2 text-white/60 text-xs">
                            <span class="animate-pulse">Scroll</span>
                            <span class="w-5 h-9 rounded-full border border-white/25 flex items-start justify-center p-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-white/70 animate-bounce"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
