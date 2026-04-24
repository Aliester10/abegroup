@forelse($vacancies as $job)
<div class="bg-white rounded-xl border border-gray-200 shadow-sm hover:border-orange-400 hover:shadow-md transition-all duration-300 p-6">
    <div class="flex flex-col sm:flex-row sm:items-center gap-4">

        {{-- Info Pekerjaan --}}
        <div class="flex-1 min-w-0">
            <button type="button"
                    onclick="toggleJobDetail({{ $job->id }})"
                    class="text-left font-bold text-slate-700 text-lg hover:text-orange-500 transition-colors duration-200 block mb-2 w-full">
                {{ $job->name }}
            </button>
            <div class="flex flex-wrap gap-x-5 gap-y-1.5 text-sm text-gray-500">
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-briefcase text-orange-600 text-xs opacity-90"></i>
                    {{ str_replace('_', ' ', ucwords($job->type)) }}
                </span>
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-chart-line text-orange-600 text-xs opacity-90"></i>
                    {{ $job->experience ?? '2 years' }}
                </span>
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-map-marker-alt text-orange-600 text-xs opacity-90"></i>
                    {{ $job->location }}
                </span>
            </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex items-center gap-2 flex-shrink-0">
            <button type="button"
                    onclick="toggleJobDetail({{ $job->id }})"
                    id="btn-text-{{ $job->id }}"
                    class="px-5 py-2 text-sm font-semibold border-2 border-orange-500 text-orange-500 bg-white rounded-lg hover:bg-orange-50 transition-colors duration-200">
                Detail
            </button>
            <button type="button"
                    onclick="setVacancyData({{ $job->id }}, '{{ addslashes($job->name) }}')"
                    class="px-6 py-2 text-sm font-semibold text-white rounded-lg hover:brightness-110 active:scale-95 transition-all duration-200"
                    style="background-color: #f37021;">
                Lamar
            </button>
        </div>
    </div>

    {{-- Divider --}}
    <hr id="divider-{{ $job->id }}" class="hidden border-dashed border-gray-200 my-4">

    {{-- Detail Expand --}}
    <div id="detail-{{ $job->id }}" class="hidden pt-1">
        @if($job->description)
        <div class="mb-4">
            <p class="text-sm font-bold text-[#003366] mb-2">Deskripsi Pekerjaan</p>
            <p class="text-sm text-gray-600 leading-relaxed">{{ $job->description }}</p>
        </div>
        @endif

        @if($job->responsibility)
        <div class="mb-4">
            <p class="text-sm font-bold text-[#003366] mb-2">Tanggung Jawab</p>
            <ul class="list-disc list-inside space-y-1">
                @foreach(explode("\n", str_replace("\r", "", $job->responsibility)) as $line)
                    @if(trim($line))
                        <li class="text-sm text-gray-600">{{ trim($line) }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        @endif

        @if($job->qualification)
        <div>
            <p class="text-sm font-bold text-[#003366] mb-2">Kualifikasi</p>
            <ul class="list-disc list-inside space-y-1">
                @foreach(explode("\n", str_replace("\r", "", $job->qualification)) as $line)
                    @if(trim($line))
                        <li class="text-sm text-gray-600">{{ trim($line) }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@empty
<div class="text-center py-16 bg-white rounded-xl border border-dashed border-gray-200">
    <svg class="w-14 h-14 text-gray-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>
    <p class="text-gray-400 font-medium">Maaf, lowongan kerja tidak ditemukan.</p>
</div>
@endforelse
