@extends('layouts.marketing')

@section('title', $activity->title . ' - ABE Group')

@section('content')
    @include('partials.marketing.navbar')

    <section class="py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-slate-600 hover:text-slate-900 text-sm">
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Kembali ke Berita
            </a>

            <article class="mt-8">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900">{{ $activity->title }}</h1>

                <div class="mt-4 text-sm text-slate-500">
                    {{ optional($activity->date)->format('d M Y') }}
                    @if($activity->location)
                        <span class="mx-2">·</span>{{ $activity->location }}
                    @endif
                </div>

                @if($activity->image)
                    <div class="mt-6 aspect-[16/10] rounded-2xl overflow-hidden">
                        <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" class="w-full h-full object-cover" />
                    </div>
                @endif

                @if($activity->description)
                    <div class="mt-6 prose prose-slate max-w-none">
                        {!! nl2br(e($activity->description)) !!}
                    </div>
                @endif
            </article>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
