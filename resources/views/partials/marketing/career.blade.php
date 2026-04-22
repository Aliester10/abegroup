<section class="py-16 sm:py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-sm font-semibold text-orange-400">Karir</p>
                <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold text-white">Bertumbuh bersama tim yang solid</h2>
                <p class="mt-4 text-white/70">Kami membuka peluang bagi talenta yang ingin berkontribusi dalam proyek dan unit bisnis ABE Group.</p>
            </div>
            <div class="rounded-3xl bg-white/5 ring-1 ring-white/10 p-6">
                <div class="space-y-4">
                    @forelse(($careers ?? []) as $career)
                        <div class="rounded-2xl bg-white/5 ring-1 ring-white/10 p-4 hover:bg-white/10 transition">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <div class="font-semibold text-white">{{ $career->title }}</div>
                                    <div class="text-xs text-white/60 mt-1">
                                        {{ $career->location ?: 'Indonesia' }}
                                        @if($career->type)
                                            <span class="mx-2">•</span>{{ $career->type }}
                                        @endif
                                    </div>
                                </div>
                                @if($career->apply_url)
                                    <a href="{{ $career->apply_url }}" class="text-orange-400 hover:text-orange-300 font-semibold text-sm">Apply</a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="text-white/70">Belum ada lowongan aktif.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
