<footer class="bg-slate-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid md:grid-cols-4 gap-10">
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-10 w-auto">
                </div>
                <p class="mt-4 text-white/70 max-w-md">Membangun perusahaan yang adaptif, profesional, dan bertumbuh berkelanjutan melalui inovasi dan tata kelola yang kuat.</p>
            </div>

            <div>
                <div class="font-semibold">Perusahaan</div>
                <div class="mt-3 space-y-2 text-sm text-white/70">
                    <a href="{{ route('about') }}" class="block hover:text-white">Tentang</a>
                    <a href="{{ route('business') }}" class="block hover:text-white">Unit Bisnis</a>
                    <a href="{{ route('about') }}#nilai" class="block hover:text-white">Nilai Inti</a>
                </div>
            </div>

            <div>
                <div class="font-semibold">Hubungi</div>
                <div class="mt-3 space-y-2 text-sm text-white/70">
                    <a href="{{ route('contact') }}" class="block hover:text-white">Kontak</a>
                    <a href="{{ route('career') }}" class="block hover:text-white">Karir</a>
                    <a href="{{ route('news') }}" class="block hover:text-white">Berita</a>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row gap-3 items-center justify-between text-sm text-white/60">
            <div>&copy; {{ date('Y') }} ABE Group. All rights reserved.</div>
            <div class="text-white/40">Primary: Navy • Accent: Orange</div>
        </div>
    </div>
</footer>
