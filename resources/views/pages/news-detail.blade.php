@extends('layouts.marketing')

@section('title', $news->title . ' - ABE Group')

@push('styles')
<style>
    .news-content {
        text-align: justify;
        text-justify: inter-word;
        hyphens: auto;
        line-height: 1.7;
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-word;
    }
    
    @media (max-width: 640px) {
        .news-content {
            line-height: 1.6;
            text-align: justify;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
        }
    }
</style>
@endpush

@section('content')

    <section class="py-8 sm:py-12 md:py-16 lg:py-20">
        <div class="max-w-4xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            
            <!-- Tombol kembali -->
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-xs sm:text-sm transition-colors duration-200">
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Kembali ke Berita
            </a>

            <article class="mt-6 sm:mt-8">
                
                <!-- Judul -->
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 leading-tight break-words hyphens-auto" style="overflow-wrap: break-word; word-break: break-word; max-width: 100%;">
                    {{ $news->title }}
                </h1>

                <!-- Tanggal -->
                <div class="mt-3 sm:mt-4 text-xs sm:text-sm text-slate-500">
                    {{ $news->created_at->format('d F Y') }}
                </div>

                <!-- Gambar -->
                @if($news->image)
                    <div class="mt-4 sm:mt-6 aspect-[16/10] sm:aspect-[16/9] rounded-xl sm:rounded-2xl overflow-hidden">
                        <img src="{{ asset('storage/' . $news->image) }}" 
                             alt="{{ $news->title }}" 
                             class="w-full h-full object-cover" />
                    </div>
                @endif

                <!-- Isi berita -->
                <div class="mt-4 sm:mt-6 prose prose-slate max-w-none prose-sm sm:prose-base lg:prose-lg news-content">
                    {!! nl2br(e($news->content)) !!}
                </div>

            </article>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection