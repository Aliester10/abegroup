@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Add New Testimonial')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Add New Testimonial
        </h2>
    </div>

    <div class="grid gap-6 mb-8 md:grid-cols-3">
        {{-- ================= FORM ================= --}}
        <div class="md:col-span-2">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Client Name <span class="text-red-500">*</span></span>
                            <input type="text" name="client_name" 
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   placeholder="e.g. Budi Hartono" required>
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Rating (1-5) <span class="text-red-500">*</span></span>
                            <select name="rating" 
                                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                    required>
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>
                        </label>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Position <span class="text-red-500">*</span></span>
                            <input type="text" name="position" 
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   placeholder="e.g. CEO" required>
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Company <span class="text-red-500">*</span></span>
                            <input type="text" name="company" 
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   placeholder="e.g. PT Maju Sejahtera" required>
                        </label>
                    </div>

                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Testimonial Message <span class="text-red-500">*</span></span>
                        <textarea name="testimonial_text" rows="4" 
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                  placeholder="Write the feedback here..." required></textarea>
                    </label>

                    <label class="block text-sm mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Profile Image / Logo (Optional)</span>
                        <input name="profile_image" type="file" 
                               class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border border-gray-300 shadow-sm p-2">
                        <span class="text-xs text-gray-500 mt-1 block">Format JPG/PNG, Max 2MB.</span>
                    </label>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('admin.testimonials.index') }}" 
                           class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-lg dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 active:bg-transparent hover:bg-gray-50 focus:outline-none focus:shadow-outline-gray">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                            Simpan Testimonial
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ================= TIPS ================= --}}
        <div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    <i class="fas fa-lightbulb mr-2 text-orange-500"></i> Tips
                </h4>
                <ul class="space-y-4">
                    <li>
                        <p class="text-sm font-bold text-orange-500 mb-1">01. Photo</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Jika foto dikosongkan, sistem akan otomatis menggunakan inisial nama klien.</p>
                    </li>
                    <li>
                        <p class="text-sm font-bold text-orange-500 mb-1">02. Rating</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Berikan rating 5 bintang untuk testimoni terbaik yang ingin diunggulkan.</p>
                    </li>
                    <li>
                        <p class="text-sm font-bold text-orange-500 mb-1">03. Text</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Gunakan bahasa yang profesional dan ringkas agar mudah dibaca oleh pengunjung.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed anymore --}}
@endpush