<section class="py-24 relative overflow-hidden">
    {{-- Background Image with Dark Overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/create-account-office.jpeg') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-abe-blue/90 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-abe-blue/50 to-abe-blue/90"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Keunggulan ABE Group
        </h2>
        <p class="text-white/70 max-w-2xl mx-auto mb-16">
            Prinsip yang memandu keputusan kami dan membentuk budaya perusahaan
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
            @foreach(($coreValues ?? []) as $index => $value)
                <div class="flex flex-col items-center group" 
                     data-aos="zoom-in" data-aos-delay="{{ ($index + 1) * 150 }}">
                    {{-- Icon Container: White Rounded Box --}}
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-abe-blue text-2xl mb-6 shadow-xl transition-transform duration-300 group-hover:scale-110">
                        {!! $value['icon'] !!}
                    </div>
                    
                    <h3 class="text-white font-bold text-lg mb-3">
                        {{ $value['title'] }}
                    </h3>
                    
                    <p class="text-white/60 text-sm leading-relaxed">
                        {{ $value['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
