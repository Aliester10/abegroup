<div class="mt-10 grid md:grid-cols-2 lg:grid-cols-2 gap-6 justify-center mx-auto">

    @forelse(($businesses ?? []) as $business)
        <a href="{{ $business->website_link ?: '#' }}" 
           class="group relative rounded-2xl bg-white ring-1 ring-white/10 p-6 hover:bg-gray-800 hover:-translate-y-1 transition text-center block">

            <div class="absolute top-6 right-6 text-gray-400 group-hover:text-white transition-colors">
                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"/>
                </svg>
            </div>

            <div class="mb-4">
                <img src="{{ asset('storage/' . $business->image) }}" 
                     alt="{{ $business->name }}" 
                     class="w-16 h-16 mx-auto object-contain">
            </div>

            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-white">
                {{ $business->name }}
            </h3>

            <p class="mt-2 text-sm text-gray-600 group-hover:text-white/70">
                {{ \Illuminate\Support\Str::limit($business->description, 140) }}
            </p>
        </a>

    @empty
        <div class="md:col-span-2 lg:col-span-3 text-center text-white/70">
            Unit bisnis belum tersedia.
        </div>
    @endforelse

</div>