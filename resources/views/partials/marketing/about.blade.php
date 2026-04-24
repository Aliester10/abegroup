@if(isset($aboutSection) && $aboutSection)
<section class="py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl overflow-hidden ring-1 ring-slate-200 shadow-lg">
                    <img src="{{ $aboutSection->image_url ? (Str::startsWith($aboutSection->image_url, 'http') ? $aboutSection->image_url : asset($aboutSection->image_url)) : asset('assets/img/login-office.jpeg') }}" alt="{{ $aboutSection->title ?? 'Tentang ABE Group' }}" class="w-full h-full object-cover" />
                </div>
                <div class="absolute -bottom-6 -right-6 w-40 h-40 rounded-3xl bg-gradient-to-br from-slate-950 to-slate-800 hidden sm:block"></div>
                <div class="absolute -bottom-4 -right-4 w-40 h-40 rounded-3xl bg-gradient-to-br from-orange-500 to-orange-400 hidden sm:block"></div>
            </div>

            <div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    {!! $aboutSection->title !!}
                </h2>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    {!! $aboutSection->description !!}
                </p>
                @if($aboutSection->description_2)
                <p class="mt-4 text-slate-600 leading-relaxed">
                    {!! $aboutSection->description_2 !!}
                </p>
                @endif

                <div class="mt-6 flex flex-wrap gap-3">
                    @if($aboutSection->point_1)
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">{{ $aboutSection->point_1 }}</span>
                    </div>
                    @endif
                    @if($aboutSection->point_2)
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">{{ $aboutSection->point_2 }}</span>
                    </div>
                    @endif
                    @if($aboutSection->point_3)
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">{{ $aboutSection->point_3 }}</span>
                    </div>
                    @endif
                </div>

                @if($aboutSection->button_text && $aboutSection->button_link)
                <div class="mt-8">
                    <a href="{{ Str::startsWith($aboutSection->button_link, 'http') ? $aboutSection->button_link : route($aboutSection->button_link) }}" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-slate-950 hover:bg-slate-900 text-white font-semibold transition">
                        {{ $aboutSection->button_text }}
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@else
<!-- Fallback to hardcoded content if no database entry exists -->
<section class="py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl overflow-hidden ring-1 ring-slate-200 shadow-lg">
                    <img src="{{ asset('assets/img/login-office.jpeg') }}" alt="Tentang ABE Group" class="w-full h-full object-cover" />
                </div>
                <div class="absolute -bottom-6 -right-6 w-40 h-40 rounded-3xl bg-gradient-to-br from-slate-950 to-slate-800 hidden sm:block"></div>
                <div class="absolute -bottom-4 -right-4 w-40 h-40 rounded-3xl bg-gradient-to-br from-orange-500 to-orange-400 hidden sm:block"></div>
            </div>

            <div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Mengenal <span class="text-orange-600">ABE Group</span>
                </h2>

                <p class="mt-4 text-slate-600 leading-relaxed">
                    Didirikan dengan semangat membangun ekosistem bisnis yang kuat, <span class="font-bold">ABE Group</span> hadir sebagai entitas induk yang mengintegrasikan berbagai sektor usaha untuk menciptakan sinergi yang optimal.
                </p>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Dengan portofolio yang mencakup layanan teknik & teknologi, serta platform e-commerce, ABE Group berkomitmen untuk memberikan solusi bisnis terbaik bagi mitra dan klien di seluruh Indonesia.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">Pertumbuhan Berkelanjutan</span>
                    </div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">Integritas & Kepercayaan</span>
                    </div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-slate-100 border border-slate-200">
                        <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-slate-700">Kemitraan Strategis</span>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{ route('business') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-slate-950 hover:bg-slate-900 text-white font-semibold transition">
                        Lihat Perusahaan Kami
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
