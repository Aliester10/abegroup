@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Detail Pelamar - ' . $application->full_name)

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Detail Pelamar
        </h2>
    </div>

    @if(session('success'))
        <div class="px-4 py-3 mb-4 text-sm font-semibold text-green-700 bg-green-100 rounded-lg dark:text-green-100 dark:bg-green-700 shadow-md">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="px-4 py-3 mb-4 text-sm font-semibold text-red-700 bg-red-100 rounded-lg dark:text-red-100 dark:bg-red-700 shadow-md">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid gap-6 mb-8 md:grid-cols-3">
        {{-- LEFT COLUMN --}}
        <div class="space-y-6">
            {{-- Profil Card --}}
            <div class="px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex flex-col items-center py-4">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($application->full_name) }}&background=random&size=128" 
                         class="w-24 h-24 rounded-full mb-3 shadow-sm" alt="Avatar">
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $application->full_name }}</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">{{ $application->job_vacancy->name ?? 'N/A' }}</p>
                    
                    @if($application->status == 'pending')
                        <span class="px-3 py-1 text-xs font-semibold text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100">Pending</span>
                    @elseif($application->status == 'reviewed')
                        <span class="px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100">Reviewed</span>
                    @elseif($application->status == 'accepted')
                        <span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Accepted</span>
                    @else
                        <span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Rejected</span>
                    @endif
                </div>
                
                <div class="border-t dark:border-gray-700 pt-4 space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Email</span>
                        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $application->email }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">No. HP</span>
                        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $application->phone ?? $application->phone_number }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Pendidikan</span>
                        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $application->last_education }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Pengalaman</span>
                        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $application->years_of_experience ?? '0' }} Tahun</span>
                    </div>
                </div>
                
                <div class="mt-6">
                    <a href="{{ $application->linkedin_url }}" target="_blank" 
                       class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-700 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue {{ !$application->linkedin_url ? 'opacity-50 cursor-not-allowed' : '' }}">
                        <i class="fab fa-linkedin mr-2"></i> Profil LinkedIn
                    </a>
                </div>
            </div>

            {{-- Update Status Card --}}
            <div class="px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800 border-t-4 border-orange-500">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    <i class="fas fa-edit mr-2 text-orange-500"></i> Update Status & Email
                </h4>
                <form action="{{ route('admin.applications.update', $application->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-xs font-bold text-gray-500 dark:text-gray-400 uppercase mb-2">Ganti Status Ke:</label>
                        <select name="status" 
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm">
                            <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="reviewed" {{ $application->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                            <option value="accepted" {{ $application->status == 'accepted' ? 'selected' : '' }}>Accepted (Kirim Email)</option>
                            <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected (Kirim Email)</option>
                        </select>
                    </div>
                    <button type="submit" 
                            class="w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-800 border border-transparent rounded-lg active:bg-gray-900 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
                            onclick="return confirm('Update status dan kirim email notifikasi?')">
                        <i class="fas fa-paper-plane mr-2"></i> Update & Notify
                    </button>
                </form>
                <p class="mt-3 text-xs italic text-gray-500 dark:text-gray-400 text-center">
                    <i class="fas fa-info-circle mr-1"></i> Email terkirim otomatis untuk status Accepted/Rejected.
                </p>
            </div>
        </div>

        {{-- RIGHT COLUMN --}}
        <div class="md:col-span-2 space-y-6">
            {{-- Cover Letter Card --}}
            <div class="px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300 border-b dark:border-gray-700 pb-2">
                    <i class="fas fa-envelope-open-text mr-2 text-orange-500"></i> Cover Letter / Pesan Pelamar
                </h4>
                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg text-sm text-gray-700 dark:text-gray-300 whitespace-pre-wrap leading-relaxed">
                    {{ $application->cover_letter ?? 'Pelamar tidak menyertakan cover letter.' }}
                </div>
            </div>

            {{-- CV Preview Card --}}
            <div class="px-4 py-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex justify-between items-center mb-4 border-b dark:border-gray-700 pb-2">
                    <h4 class="font-semibold text-gray-800 dark:text-gray-300">
                        <i class="fas fa-file-pdf mr-2 text-orange-500"></i> Curriculum Vitae (CV)
                    </h4>
                    <a href="{{ asset('storage/' . $application->resume_path) }}" target="_blank" 
                       class="text-xs font-semibold text-orange-500 hover:underline">
                        <i class="fas fa-external-link-alt mr-1"></i> Buka Fullscreen
                    </a>
                </div>
                <div class="w-full h-[600px] bg-gray-100 dark:bg-gray-900 rounded-lg overflow-hidden">
                    <iframe src="{{ asset('storage/' . $application->resume_path) }}" 
                            class="w-full h-full border-none shadow-inner"></iframe>
                </div>
                <p class="mt-3 text-xs italic text-gray-500 dark:text-gray-400 text-center">
                    Jika PDF tidak muncul, klik tombol "Buka Fullscreen" di atas.
                </p>
            </div>

            <div>
                <a href="{{ route('admin.applications.index') }}" 
                   class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-lg dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 active:bg-transparent hover:bg-gray-50 focus:outline-none focus:shadow-outline-gray shadow-sm">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed --}}
@endpush
