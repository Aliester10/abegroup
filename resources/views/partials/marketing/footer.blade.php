<footer class="bg-black text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            {{-- Logo and Info --}}
            <div class="md:col-span-4">
                <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-16 w-auto brightness-0 invert mb-6">
                <h3 class="font-bold text-lg mb-2">ABE GROUP</h3>
                <div class="text-white/60 text-sm leading-relaxed space-y-1">
                    <p>PT. ARO BASKARA ESA</p>
                    <p>PT. ABE INTEKNO INDONESIA</p>
                    <p>PT. AYO BELANJA INDONESIA</p>
                </div>
            </div>

            {{-- Links Column 1 --}}
            <div class="md:col-span-2 md:col-start-6">
                <h4 class="font-bold mb-6 text-sm uppercase tracking-widest">Navigation</h4>
                <ul class="space-y-4 text-sm text-white/50">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">Tentang</a></li>
                    <li><a href="{{ route('business') }}" class="hover:text-white transition">Bisnis</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-white transition">Berita</a></li>
                </ul>
            </div>

            {{-- Links Column 2 --}}
            <div class="md:col-span-2">
                <h4 class="font-bold mb-6 text-sm uppercase tracking-widest">Connect</h4>
                <ul class="space-y-4 text-sm text-white/50">
                    <li><a href="{{ route('career') }}" class="hover:text-white transition">Karir</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition">Hubungi Kami</a></li>
                </ul>
            </div>

            {{-- Social and Extras --}}
            <div class="md:col-span-3">
                <h4 class="font-bold mb-6 text-sm uppercase tracking-widest">Location</h4>
                <p class="text-white/50 text-sm mb-6">
                    Mangkuluhur City Tower One,<br>
                    Jl. Jend. Gatot Subroto No.1,<br>
                    Karet Semanggi, Jakarta Selatan
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white hover:text-black transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white hover:text-black transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white hover:text-black transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-20 pt-8 border-t border-white/10 text-center text-white/30 text-xs">
            <p>&copy; {{ date('Y') }} ABE GROUP. All Rights Reserved.</p>
        </div>
    </div>
</footer>
