@extends('layouts.marketing')

@section('title', $news->title . ' - ABE Group')

@section('content')
    @include('partials.marketing.navbar')

    <section class="py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Tombol kembali -->
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-sm">
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                Kembali ke Berita
            </a>

            <article class="mt-8">
                
                <!-- Judul -->
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    {{ $news->title }}
                </h1>

                <!-- Tanggal -->
                <div class="mt-4 text-sm text-slate-500">
                    {{ $news->created_at->format('d M Y') }}
                </div>

                <!-- Gambar -->
                @if($news->image)
                    <div class="mt-6 aspect-[16/10] rounded-2xl overflow-hidden">
                        <img src="{{ asset('storage/' . $news->image) }}" 
                             alt="{{ $news->title }}" 
                             class="w-full h-full object-cover" />
                    </div>
                @endif

                <!-- Isi berita -->
                <div class="mt-6 prose prose-slate max-w-none">
                    {!! nl2br(e($news->content)) !!}
                </div>

            </article>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection