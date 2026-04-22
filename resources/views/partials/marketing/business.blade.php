<section class="py-16 sm:py-20 bg-gradient-to-br from-[#38466B] via-[#1B3A6B] to-navy-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <p class="text-sm font-semibold text-orange-400">Bisnis di Bawah ABE Group</p>
            <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold text-white">Unit Bisnis</h2>
            <p class="mt-4 text-white/70">Portofolio perusahaan yang terus berkembang untuk memperkuat nilai dan dampak.</p>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-2 gap-6 justify-center mx-auto">
            @forelse(($companies ?? []) as $company)
                <a href="{{ $company->website_url ?: '#' }}" class="group relative rounded-2xl bg-white ring-1 ring-white/10 p-6 hover:bg-gray-800 hover:-translate-y-1 transition text-center block">
                    <div class="absolute top-6 right-6 text-gray-400 group-hover:text-white transition-colors">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="mb-4">
                        <img src="{{ asset('assets/img/logoaro.png') }}" alt="ARO Logo" class="w-16 h-16 mx-auto">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 group-hover:text-white text-center">{{ $company->name }}</h3>
                    <p class="mt-2 text-sm text-gray-600 group-hover:text-white/70 text-center">{{ Str::limit($company->description, 140) }}</p>
                </a>
            @empty
                <div class="md:col-span-2 lg:col-span-3 text-center text-white/70">
                    Unit bisnis belum tersedia.
                </div>
            @endforelse
        </div>
    </div>
</section>
