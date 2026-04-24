@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Edit Business Unit')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Business Unit
        </h2>
    </div>

    <div class="grid gap-6 mb-8 md:grid-cols-3">
        {{-- ================= FORM ================= --}}
        <div class="md:col-span-2">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('admin.business.update', $business->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Business Name <span class="text-red-500">*</span></span>
                            <input type="text" name="name" value="{{ old('name', $business->name) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm @error('name') border-red-500 @enderror" 
                                   required>
                            @error('name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Category <span class="text-red-500">*</span></span>
                            <input type="text" name="category" value="{{ old('category', $business->category) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm @error('category') border-red-500 @enderror" 
                                   required>
                            @error('category') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                        </label>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Website Link</span>
                            <input type="url" name="website_link" value="{{ old('website_link', $business->website_link) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   placeholder="https://example.com">
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">E-Commerce Link</span>
                            <input type="url" name="ecomerce_link" value="{{ old('ecomerce_link', $business->ecomerce_link) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                   placeholder="https://store.example.com">
                        </label>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Display Order</span>
                            <input type="number" name="order" value="{{ old('order', $business->order) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm">
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Logo / Image</span>
                            @if($business->image)
                                <div class="mt-2 mb-2">
                                    <img src="{{ asset('storage/' . $business->image) }}" 
                                         class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-600 object-cover w-32 h-20">
                                </div>
                            @endif
                            <input type="file" name="image" 
                                   class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border border-gray-300 shadow-sm p-2">
                            <span class="text-xs text-gray-500 mt-1 block">Biarkan kosong jika tidak ingin mengganti logo.</span>
                        </label>
                    </div>

                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Description <span class="text-red-500">*</span></span>
                        <textarea name="description" rows="4" 
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm" 
                                  required>{{ old('description', $business->description) }}</textarea>
                    </label>

                    <div class="flex items-center mb-6">
                        <label class="flex items-center text-sm text-gray-700 dark:text-gray-400 cursor-pointer">
                            <input type="checkbox" name="is_active" value="1" id="is_active" {{ $business->is_active ? 'checked' : '' }}
                                   class="form-checkbox text-orange-500 rounded focus:ring-orange-400 h-4 w-4">
                            <span class="ml-2">Active (Tampilkan di Website)</span>
                        </label>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('admin.business.index') }}" 
                           class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-lg dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 active:bg-transparent hover:bg-gray-50 focus:outline-none focus:shadow-outline-gray">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                            Update Unit Bisnis
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ================= PANDUAN ================= --}}
        <div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    <i class="fas fa-edit mr-2 text-orange-500"></i> Panduan Edit
                </h4>
                <ul class="space-y-3">
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Business Name:</strong> Ubah jika ada perubahan nama resmi.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Category:</strong> Sesuaikan kategori bisnis utama.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Website:</strong> Pastikan link diawali https://.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">E-Commerce:</strong> Update link toko online jika ada.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Order:</strong> Atur urutan tampil di homepage.</li>
                    <li class="text-xs text-gray-600 dark:text-gray-400"><strong class="text-orange-500">Description:</strong> Perbarui deskripsi profil perusahaan.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed --}}
@endpush