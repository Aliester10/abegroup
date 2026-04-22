<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-sm font-semibold text-orange-600">Komitmen Keberlanjutan</p>
                <h2 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Bertumbuh dengan tanggung jawab</h2>
                <p class="mt-4 text-slate-600">Kami memastikan pertumbuhan bisnis berjalan selaras dengan kepatuhan, efisiensi energi, dan kontribusi sosial.</p>

                <ul class="mt-6 space-y-3 text-slate-700">
                    @foreach(($sustainabilityPoints ?? []) as $point)
                        <li class="flex gap-3">
                            <span class="mt-1 w-5 h-5 rounded-full bg-orange-500/15 text-orange-600 grid place-items-center">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 010 1.415l-7.25 7.25a1 1 0 01-1.415 0l-3.25-3.25a1 1 0 111.414-1.415l2.543 2.543 6.543-6.543a1 1 0 011.415 0z" clip-rule="evenodd"/></svg>
                            </span>
                            <span>{{ $point }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-8">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-orange-500 hover:bg-orange-400 text-slate-950 font-semibold transition">Kolaborasi Bersama Kami</a>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl overflow-hidden ring-1 ring-slate-200 shadow-lg">
                    <img src="{{ $sustainabilityImageUrl ?? asset('assets/img/forgot-password-office.jpeg') }}" alt="Keberlanjutan" class="w-full h-full object-cover" />
                </div>
                <div class="absolute -top-6 -left-6 w-28 h-28 rounded-3xl bg-slate-950 hidden sm:block"></div>
                <div class="absolute -top-4 -left-4 w-28 h-28 rounded-3xl bg-orange-500 hidden sm:block"></div>
            </div>
        </div>
    </div>
</section>
