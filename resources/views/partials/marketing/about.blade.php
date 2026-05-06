@php
    $displayAbout = $about_company ?? $aboutSection ?? null;
@endphp

@if($displayAbout)
<section class="pt-32 sm:pt-44 pb-0 bg-abe-navy overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white uppercase tracking-wider mb-8"
            data-aos="fade-up">
            {!! $displayAbout->title ?? 'TENTANG KAMI' !!}
        </h2>

        <div class="max-w-4xl mx-auto">
            <p class="text-white/80 leading-relaxed text-lg sm:text-xl"
               data-aos="fade-up" data-aos-delay="200">
                {!! $displayAbout->content ?? $displayAbout->description ?? $displayAbout->deskripsi ?? '' !!}
            </p>
            
            @if(isset($displayAbout->description_2))
            <p class="mt-6 text-white/80 leading-relaxed text-lg sm:text-xl"
               data-aos="fade-up" data-aos-delay="400">
                {!! $displayAbout->description_2 !!}
            </p>
            @endif
        </div>
    </div>

    <div class="mt-16 w-full">
        <div class="aspect-[21/9] overflow-hidden">
            @php
                $imageUrl = asset('assets/img/login-office.jpeg');
                if (isset($displayAbout->image_url)) {
                    $imageUrl = Str::startsWith($displayAbout->image_url, 'http') ? $displayAbout->image_url : asset($displayAbout->image_url);
                } elseif (isset($displayAbout->gambar)) {
                    $imageUrl = asset('storage/' . $displayAbout->gambar);
                }
            @endphp
            <img src="{{ $imageUrl }}" 
                 alt="Tentang ABE Group" 
                 class="w-full h-full object-cover" />
        </div>
    </div>
</section>
@endif
