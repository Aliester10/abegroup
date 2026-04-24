@forelse($vacancies as $job)
<div class="job-card shadow-sm">
    <div class="row align-items-center">
        <div class="col-md-8 col-12">
            <a href="javascript:void(0)" class="job-name" onclick="toggleJobDetail({{ $job->id }})">{{ $job->name }}</a>
            <div class="info-bar">
                <div class="info-item"><i class="fas fa-briefcase"></i> {{ str_replace('_', ' ', ucwords($job->type)) }}</div>
                <div class="info-item"><i class="fas fa-chart-line"></i> {{ $job->experience ?? '2 years' }}</div>
                <div class="info-item"><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</div>
            </div>
        </div>
        <div class="col-md-4 col-12 mt-3 mt-md-0">
            <div class="action-group">
                <a href="javascript:void(0)" class="btn-detail-outline" onclick="toggleJobDetail({{ $job->id }})" id="btn-text-{{ $job->id }}">Detail</a>
                <button class="btn-lamar-solid" data-bs-toggle="modal" data-bs-target="#applyModal" onclick="setVacancyData({{ $job->id }}, '{{ $job->name }}')">Lamar</button>
            </div>
        </div>
    </div>
    <hr class="job-divider" id="divider-{{ $job->id }}">
    <div class="detail-expand-box d-none" id="detail-{{ $job->id }}">
        <div class="mb-4">
            <div class="detail-title">Deskripsi Pekerjaan</div>
            <div class="detail-text">{{ $job->description }}</div>
        </div>
        @if($job->responsibility)
        <div class="mb-4">
            <div class="detail-title">Tanggung Jawab</div>
            <ul class="detail-list ps-4">
                @foreach(explode("\n", str_replace("\r", "", $job->responsibility)) as $line)
                    @if(trim($line)) <li class="mb-1">{{ trim($line) }}</li> @endif
                @endforeach
            </ul>
        </div>
        @endif
        @if($job->qualification)
        <div class="mb-2">
            <div class="detail-title">Kualifikasi</div>
            <ul class="detail-list ps-4">
                @foreach(explode("\n", str_replace("\r", "", $job->qualification)) as $line)
                    @if(trim($line)) <li class="mb-1">{{ trim($line) }}</li> @endif
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@empty
<div class="text-center py-5 bg-white rounded border">
    <p class="text-muted">Maaf, lowongan kerja tidak ditemukan.</p>
</div>
@endforelse
