<section class="relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mt-10 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 bg-white rounded-2xl shadow-xl ring-1 ring-slate-200 p-6">
                @foreach(($stats ?? []) as $stat)
                    <div class="group rounded-xl p-3 hover:bg-slate-50 transition">
                        <div class="flex items-start gap-3">
                            <div class="w-11 h-11 rounded-xl bg-slate-950 text-white grid place-items-center group-hover:bg-orange-500 transition">
                                {!! $stat['icon'] !!}
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-slate-900">
                                    <span class="js-counter" data-from="0" data-to="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] ?? '' }}">0</span>
                                </div>
                                <div class="text-xs text-slate-500">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
