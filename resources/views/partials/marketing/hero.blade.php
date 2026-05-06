<section class="relative overflow-hidden min-h-screen flex items-center justify-center">
    {{-- Hero Media (Image or Video) --}}
    <div class="absolute inset-0" id="parallax-bg">
        @php
            $mediaUrl = $heroImageUrl ?? asset('assets/img/create-account-office.jpeg');
            $isVideo = false;
            $videoExtensions = ['mp4', 'webm', 'ogg', 'mov'];
            $extension = pathinfo($mediaUrl, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $videoExtensions)) {
                $isVideo = true;
            }
        @endphp

        <div class="w-full h-full will-change-transform">
            @if($isVideo)
                <video autoplay muted loop playsinline class="w-full h-full object-cover">
                    <source src="{{ $mediaUrl }}" type="video/{{ $extension === 'mov' ? 'mp4' : $extension }}">
                </video>
            @else
                <img src="{{ $mediaUrl }}" alt="ABE Group" class="w-full h-full object-cover" />
            @endif
        </div>
        
        {{-- Custom Overlay: Black (#000000) at 54% Opacity --}}
        <div class="absolute inset-0 bg-black/54"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-20">
        {{-- Elegant Badge --}}
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8"
             data-aos="fade-down" data-aos-delay="200">
            <span class="text-xs sm:text-sm font-medium text-white tracking-[0.3em] uppercase">Leading with Innovation</span>
        </div>

        {{-- Main Title with Mixed Weights --}}
        <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-light text-white leading-[1.1] tracking-tight max-w-6xl mx-auto mb-10"
            data-aos="fade-up" data-aos-delay="400">
            @php
                $fullText = $heroSubtitle ?? 'MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN';
                // Try to make it elegant by making some words bold if it's the default
                if ($fullText == 'MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN') {
                    echo 'Mengintegrasikan <span class="font-bold">Teknologi</span> & <span class="font-bold text-orange-400">Inovasi</span>';
                } else {
                    echo $fullText;
                }
            @endphp
        </h1>

        {{-- Sub-headline / Description --}}
        <p class="text-lg sm:text-xl text-white/70 max-w-2xl mx-auto mb-12 leading-relaxed font-light"
           data-aos="fade-up" data-aos-delay="600">
            @if(($heroSubtitle ?? '') == 'MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN' || !isset($heroSubtitle))
                Mendorong pertumbuhan bisnis yang berkelanjutan melalui solusi digital terintegrasi dan ekosistem inovasi masa depan.
            @endif
        </p>

        {{-- Glassmorphism Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6" data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="group relative px-8 py-4 bg-white text-abe-navy font-bold rounded-full overflow-hidden transition-all duration-300 hover:shadow-[0_0_30px_rgba(255,255,255,0.3)]">
                <span class="relative z-10">Pelajari Selengkapnya</span>
            </a>
            <a href="#business" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/30 text-white font-bold rounded-full hover:bg-white/20 transition-all duration-300">
                Unit Bisnis Kami
            </a>
        </div>
    </div>

    {{-- Bottom Scroll Indicator --}}
    <a href="#about" class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-3 no-underline group">
        <span class="text-[10px] text-white/40 tracking-[0.4em] uppercase group-hover:text-white/80 transition-colors">Scroll Down</span>
        <div class="w-[1px] h-12 bg-gradient-to-b from-white/60 to-transparent"></div>
    </a>
</section>

<script>
    window.addEventListener('scroll', function() {
        const parallax = document.getElementById('parallax-bg');
        if (parallax) {
            let offset = window.pageYOffset;
            parallax.style.transform = 'translateY(' + (offset * 0.5) + 'px)';
        }
    });
</script>

<style>
    .bg-black\/54 {
        background-color: rgba(0, 0, 0, 0.55);
    }
    h1 {
        text-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
</style>
