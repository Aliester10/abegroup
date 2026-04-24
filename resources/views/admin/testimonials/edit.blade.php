@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Edit Testimonial')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Testimonial
        </h2>
    </div>

    <div class="grid gap-6 mb-8 md:grid-cols-3">
        {{-- ================= FORM ================= --}}
        <div class="md:col-span-2">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Client Name <span class="text-red-500">*</span></span>
                            <input type="text" name="client_name" value="{{ $testimonial->client_name }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   required>
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Rating (1-5) <span class="text-red-500">*</span></span>
                            <select name="rating" 
                                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                    required>
                                @for($i = 5; $i >= 1; $i--)
                                    <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>
                                        {{ $i }} Stars
                                    </option>
                                @endfor
                            </select>
                        </label>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Position <span class="text-red-500">*</span></span>
                            <input type="text" name="position" value="{{ $testimonial->position }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   required>
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Company <span class="text-red-500">*</span></span>
                            <input type="text" name="company" value="{{ $testimonial->company }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   required>
                        </label>
                    </div>

                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Testimonial Message <span class="text-red-500">*</span></span>
                        <textarea name="testimonial_text" rows="4" 
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                  required>{{ $testimonial->testimonial_text }}</textarea>
                    </label>

                    <div class="block text-sm mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Profile Image</span>
                        @if($testimonial->profile_image)
                            <div class="mt-2 mb-2">
                                <img src="{{ asset('storage/' . $testimonial->profile_image) }}" 
                                     class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-600" 
                                     style="height: 80px; width: 80px; object-fit: cover;">
                            </div>
                        @endif
                        <input name="profile_image" type="file" 
                               class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border border-gray-300 shadow-sm p-2">
                        <span class="text-xs text-gray-500 mt-1 block">Format JPG/PNG, Max 2MB.</span>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('admin.testimonials.index') }}" 
                           class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-lg dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 active:bg-transparent hover:bg-gray-50 focus:outline-none focus:shadow-outline-gray">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                            Update Testimonial
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ================= PANDUAN ================= --}}
        <div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    <i class="fas fa-info-circle mr-2 text-orange-500"></i> Panduan Pengisian
                </h4>
                <ul class="space-y-3">
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Client Name:</strong> Nama orang yang memberi testimoni.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Rating:</strong> Pilih 1–5 sesuai kepuasan klien.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Position:</strong> Jabatan klien (contoh: Manager).</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Company:</strong> Nama perusahaan klien.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Message:</strong> Isi testimoni singkat & jelas.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Image:</strong> Foto klien (opsional).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed anymore --}}
@endpush