@extends('layouts.marketing')

@section('title', 'Karier - PT Aro Baskara Esa')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1350&q=80" 
                 class="w-full h-full object-cover" alt="Career Hero">
            <div class="absolute inset-0 bg-slate-950/70"></div>
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-slate-950/70 to-orange-500/10"></div>
        </div>
        
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="min-h-[50vh] flex items-center justify-center py-16 text-center text-white">
                    <div class="max-w-3xl">
                        <p class="inline-flex items-center gap-2 text-white/70 text-sm mb-4">
                            <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                            Bergabung Bersama Kami
                        </p>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                            Bangun Karier Anda di <br><span class="text-orange-400">ABE Group</span>
                        </h1>
                        <p class="mt-5 text-base sm:text-lg text-white/75 max-w-2xl mx-auto">
                            Temukan peluang untuk tumbuh, berinovasi, dan memberikan dampak positif bersama tim profesional kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search & Filters -->
    <section class="relative z-20 -mt-10 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-2xl p-4 md:p-6 border border-gray-100">
                <form id="search-form" class="grid grid-cols-1 md:grid-cols-12 gap-3">
                    <div class="md:col-span-7 relative">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="search-input" name="search" 
                               class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all text-gray-700 font-medium text-sm" 
                               placeholder="Cari posisi pekerjaan...">
                    </div>
                    <div class="md:col-span-3 relative">
                        <i class="fas fa-filter absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <select id="category-select" name="category[]" 
                                class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all text-gray-700 font-medium text-sm appearance-none">
                            <option value="">Semua Departemen</option>
                            @foreach($jobCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full py-3 text-white font-bold rounded-xl transition-all shadow-md" style="background-color: #f37021;">
                            Cari
                        </button>
                    </div>
                </form>
            </div>

            <!-- Job List Container -->
            <div class="mt-12">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-slate-900">Lowongan Tersedia</h2>
                    <span class="text-sm font-semibold text-slate-500 px-4 py-1.5 bg-slate-100 rounded-full" id="vacancy-count">
                        Ditemukan {{ $vacancies->total() }} Lowongan
                    </span>
                </div>

                <div id="job-list-container" class="transition-opacity duration-300">
                    @include('partials.job_card_list', ['vacancies' => $vacancies])
                </div>

                <!-- Pagination -->
                <div class="custom-pagination-wrapper mt-10">
                    {{ $vacancies->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-orange-500 font-bold tracking-wider uppercase text-sm">Mengapa Bergabung?</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-2">Benefit & Budaya Kerja</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($benefits as $benefit)
                <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                        @if($benefit->icon)
                            <i class="{{ $benefit->icon }} text-2xl text-orange-600"></i>
                        @else
                            <i class="fas fa-star text-2xl text-orange-600"></i>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $benefit->title }}</h3>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        {{ $benefit->description }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Apply Modal -->
    <div id="applyModal" class="fixed inset-0 z-[100] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" aria-hidden="true" onclick="closeApplyModal()"></div>
            
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
            <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-6 pt-8 pb-6 sm:p-10 sm:pb-4">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-slate-900" id="modal-title">
                            Lamar Posisi
                        </h3>
                        <button onclick="closeApplyModal()" class="text-slate-400 hover:text-slate-600 transition-colors">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="mb-6 p-4 bg-orange-50 rounded-2xl border border-orange-100">
                        <p class="text-xs font-bold text-orange-600 uppercase tracking-wider mb-1">Posisi yang dilamar:</p>
                        <p class="text-slate-900 font-bold text-lg" id="vacancy_name_text">-</p>
                    </div>

                    <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        <input type="hidden" name="job_vacancy_id" id="modal_job_vacancy_id">
                        
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-orange-500 transition-all text-sm" placeholder="Contoh: John Doe">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-orange-500 transition-all text-sm" placeholder="name@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Nomor WhatsApp</label>
                                <input type="tel" name="phone" required class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-orange-500 transition-all text-sm" placeholder="0812xxxx">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Unggah CV (PDF, Max 2MB)</label>
                            <div class="relative group">
                                <input type="file" name="resume" accept="application/pdf" required 
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                <div class="w-full px-4 py-4 bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl group-hover:border-orange-400 group-hover:bg-orange-50 transition-all flex flex-col items-center justify-center text-center">
                                    <i class="fas fa-cloud-upload-alt text-2xl text-slate-300 group-hover:text-orange-500 mb-2"></i>
                                    <p class="text-xs text-slate-500 group-hover:text-orange-600 font-medium">Klik untuk memilih file atau drag & drop</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 mt-4">
                            <input type="checkbox" id="confirmData" required class="mt-1 rounded text-orange-500 focus:ring-orange-500">
                            <label for="confirmData" class="text-xs text-slate-500 leading-relaxed">
                                Saya menyatakan bahwa semua informasi yang saya berikan adalah benar dan dapat dipertanggungjawabkan.
                            </label>
                        </div>

                        <div class="pt-4 pb-6">
                            <button type="submit" class="w-full py-4 bg-orange-500 text-white font-bold rounded-2xl hover:bg-orange-600 transition-all shadow-lg shadow-orange-200">
                                Kirim Lamaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function toggleJobDetail(id) {
            const detailDiv = document.getElementById(`detail-${id}`);
            const btnText = document.getElementById(`btn-text-${id}`);

            if (detailDiv.classList.contains('hidden')) {
                detailDiv.classList.remove('hidden');
                btnText.innerText = 'Sembunyikan';
            } else {
                detailDiv.classList.add('hidden');
                btnText.innerText = 'Detail';
            }
        }

        function openApplyModal() {
            const modal = document.getElementById('applyModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeApplyModal() {
            const modal = document.getElementById('applyModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function setVacancyData(id, name) {
            document.getElementById('modal_job_vacancy_id').value = id;
            document.getElementById('vacancy_name_text').innerText = name;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('search-form');
            const searchInput = document.getElementById('search-input');
            const categorySelect = document.getElementById('category-select');
            const jobListContainer = document.getElementById('job-list-container');
            const vacancyCount = document.getElementById('vacancy-count');
            const paginationContainer = document.querySelector('.custom-pagination-wrapper');

            let timeout = null;

            function performSearch() {
                const formData = new FormData(searchForm);
                const queryString = new URLSearchParams(formData).toString();
                const url = `{{ route('career') }}?${queryString}`;

                jobListContainer.style.opacity = '0.5';

                fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.html !== undefined) jobListContainer.innerHTML = data.html;
                    if (paginationContainer) paginationContainer.innerHTML = data.pagination || '';
                    if (vacancyCount && data.total !== undefined) {
                        vacancyCount.innerText = `Ditemukan ${data.total} Lowongan`;
                    }
                    jobListContainer.style.opacity = '1';
                })
                .catch(error => {
                    console.error('Error:', error);
                    jobListContainer.style.opacity = '1';
                });
            }

            searchInput.addEventListener('input', () => {
                clearTimeout(timeout);
                timeout = setTimeout(performSearch, 500);
            });

            categorySelect.addEventListener('change', performSearch);

            searchForm.addEventListener('submit', (e) => {
                e.preventDefault();
                performSearch();
            });

            document.addEventListener('click', (e) => {
                const link = e.target.closest('.pagination a');
                if (link) {
                    e.preventDefault();
                    jobListContainer.style.opacity = '0.5';
                    fetch(link.href, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                    .then(response => response.json())
                    .then(data => {
                        if (data.html !== undefined) jobListContainer.innerHTML = data.html;
                        if (paginationContainer) paginationContainer.innerHTML = data.pagination || '';
                        window.scrollTo({ top: jobListContainer.offsetTop - 150, behavior: 'smooth' });
                        jobListContainer.style.opacity = '1';
                    });
                }
            });

            @if(session('success'))
                Swal.fire({
                    toast: true, position: 'top-end', icon: 'success',
                    title: "{!! session('success') !!}", showConfirmButton: false,
                    timer: 3000, timerProgressBar: true
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    toast: true, position: 'top-end', icon: 'error',
                    title: "{!! session('error') !!}", showConfirmButton: false,
                    timer: 4000, timerProgressBar: true
                });
            @endif
        });
    </script>
    @endpush
@endsection
