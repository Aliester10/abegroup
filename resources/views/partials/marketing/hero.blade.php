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
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-widest uppercase max-w-5xl mx-auto font-poppins"
            data-aos="fade-up" data-aos-delay="300">
            {{ $heroSubtitle ?? 'MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN' }}
        </h1>
    </div>

    {{-- Bottom Scroll Indicator --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce hidden sm:block">
        <svg class="w-6 h-6 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
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
        background-color: rgba(0, 0, 0, 0.63);
    }
</style>
