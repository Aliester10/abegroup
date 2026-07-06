@php
    $companyInfo = \App\Models\CompanyInfo::where('is_active', true)->first();
    $footerBg = $companyInfo && $companyInfo->footer_bg_color ? $companyInfo->footer_bg_color : null;
    $footerText = $companyInfo && $companyInfo->footer_text_color ? $companyInfo->footer_text_color : null;
    $footerStyle = '';
    if ($footerBg) $footerStyle .= 'background-color: ' . $footerBg . ' !important; ';
    if ($footerText) $footerStyle .= 'color: ' . $footerText . ' !important; ';
@endphp
<footer class="bg-black text-white py-24" {!! $footerStyle ? 'style="' . trim($footerStyle) . '"' : '' !!}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-8 items-start">
            {{-- Left: Logo & Address --}}
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-28 w-auto brightness-0 invert mb-12">
                
                <div class="space-y-4">
                    <h4 class="font-bold text-xs uppercase tracking-widest opacity-40 text-center md:text-left">ALAMAT</h4>
                    <div class="opacity-70 text-sm leading-relaxed font-light text-center md:text-left">
                        <p>Jl. TM. Slamet Riyadi Raya No. 9 RT.1</p>
                        <p>RW. 4 Kb. Manggis, Kec. Matraman,</p>
                        <p>Daerah Khusus Ibukota Jakarta 13150</p>
                    </div>
                </div>
            </div>

            {{-- Center: Links --}}
            <div class="flex flex-col items-start pt-2">
                <ul class="space-y-4 text-sm font-light text-left">
                    <li><a href="{{ route('home') }}" class="hover:text-abe-blue transition duration-300">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-abe-blue transition duration-300">Tentang</a></li>
                    <li><a href="{{ route('business') }}" class="hover:text-abe-blue transition duration-300">Bisnis</a></li>
                    <li><a href="{{ route('career') }}" class="hover:text-abe-blue transition duration-300">Karir</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-abe-blue transition duration-300">Berita</a></li>
                    <li><a href="{{ route('catalog.index') }}" class="hover:text-abe-blue transition duration-300">Katalog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-abe-blue transition duration-300">Hubungi kami</a></li>
                </ul>
            </div>

            {{-- Right: Group & Socials --}}
            <div class="flex flex-col items-start pt-2">
                <div class="mb-12 flex flex-col items-start">
                    <h4 class="font-bold text-xs uppercase tracking-widest opacity-40 mb-6">GROUP</h4>
                    <div class="text-sm space-y-3 font-light text-left">
                        <a href="https://arobaskaraesa.com/" target="_blank" class="block opacity-70 hover:opacity-100 transition duration-300">PT. ARO BASKARA ESA</a>
                        <a href="https://abe-group.id/bisnis/abe-intekno-indonesia" target="_blank" class="block opacity-70 hover:opacity-100 transition duration-300">PT. ABE INTEKNO INDONESIA</a>
                    </div>
                </div>

                <div class="flex gap-6 items-center">
                    @php
                        $companyInfo = \App\Models\CompanyInfo::where('is_active', true)->first();
                    @endphp
                    @if($companyInfo && $companyInfo->facebook)
                    <a href="{{ $companyInfo->facebook }}" target="_blank" class="text-xl opacity-50 hover:opacity-100 transition duration-300">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    @endif
                    @if($companyInfo && $companyInfo->instagram)
                    <a href="{{ $companyInfo->instagram }}" target="_blank" class="text-xl opacity-50 hover:opacity-100 transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    @if($companyInfo && $companyInfo->linkedin)
                    <a href="{{ $companyInfo->linkedin }}" target="_blank" class="text-xl opacity-50 hover:opacity-100 transition duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-24 pt-8 border-t border-white/5 text-center opacity-20 text-[10px] tracking-[0.2em] uppercase">
            <p>&copy; {{ date('Y') }} ABE GROUP. ALL RIGHTS RESERVED.</p>
        </div>
    </div>
</footer>
