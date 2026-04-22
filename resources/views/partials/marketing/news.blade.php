<section class="py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between gap-6 flex-wrap">
            <div>
                <p class="text-sm font-semibold text-orange-600">Berita Terkini</p>
                <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Aktivitas & Update</h2>
                <p class="mt-4 text-slate-600 max-w-2xl">Kabar terbaru dari ABE Group dan inisiatif yang sedang berjalan.</p>
            </div>
            <a href="{{ route('auth.login') }}" class="text-sm font-semibold text-slate-700 hover:text-orange-600">Login Admin</a>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse(($activities ?? []) as $activity)
                <article class="rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition">
                    <div class="aspect-[16/10] bg-slate-100">
                        @if($activity->image)
                            <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200"></div>
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-slate-500">
                            {{ optional($activity->date)->format('d M Y') }}
                            @if($activity->location)
                                <span class="mx-2">•</span>{{ $activity->location }}
                            @endif
                        </div>
                        <h3 class="mt-2 font-semibold text-slate-900">{{ $activity->title }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ Str::limit($activity->description, 120) }}</p>
                    </div>
                </article>
            @empty
                <div class="md:col-span-2 lg:col-span-3 text-center text-slate-600">
                    Belum ada berita untuk ditampilkan.
                </div>
            @endforelse
        </div>
    </div>
</section>
