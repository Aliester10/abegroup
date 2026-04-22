<section class="py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
            <p class="text-sm font-semibold text-orange-600">Nilai Inti Kami</p>
            <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Prinsip yang menggerakkan ABE Group</h2>
            <p class="mt-4 text-slate-600">Fondasi budaya kerja yang menjaga konsistensi dan kualitas keputusan bisnis.</p>
        </div>

        <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach(($coreValues ?? []) as $value)
                <div class="group rounded-2xl border border-slate-200 p-6 hover:shadow-xl hover:-translate-y-1 transition">
                    <div class="w-12 h-12 rounded-xl bg-slate-950 text-white grid place-items-center group-hover:bg-orange-500 transition">
                        {!! $value['icon'] !!}
                    </div>
                    <h3 class="mt-4 font-semibold text-slate-900">{{ $value['title'] }}</h3>
                    <p class="mt-2 text-sm text-slate-600">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
