@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Edit Benefit')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Benefit
        </h2>
    </div>

    <div class="grid gap-6 mb-8 md:grid-cols-3">
        {{-- ================= FORM ================= --}}
        <div class="md:col-span-2">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @if ($errors->any())
                    <div class="px-4 py-3 mb-4 text-sm font-semibold text-red-700 bg-red-100 rounded-lg dark:text-red-100 dark:bg-red-700 shadow-md">
                        <ul class="list-disc ml-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.benefits.update', $benefit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-4">
                        <label class="block text-sm md:col-span-2">
                            <span class="text-gray-700 dark:text-gray-400">Benefit Title <span class="text-red-500">*</span></span>
                            <input type="text" name="title" value="{{ old('title', $benefit->title) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm @error('title') border-red-500 @enderror" 
                                   required>
                            @error('title') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                        </label>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Display Order</span>
                            <input type="number" name="order" value="{{ old('order', $benefit->order) }}"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm">
                        </label>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-4">
                        <div class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Benefit Icon</span>
                            @if($benefit->icon)
                                <div class="mt-2 mb-2">
                                    <img src="{{ asset('storage/'.$benefit->icon) }}" 
                                         class="object-cover w-16 h-16 rounded-lg border border-gray-200 dark:border-gray-600 shadow-sm">
                                </div>
                            @endif
                            <input type="file" name="icon" 
                                   class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border border-gray-300 shadow-sm p-2 @error('icon') border-red-500 @enderror" 
                                   accept="image/*">
                            <span class="text-xs text-gray-500 mt-1 block">Kosongkan jika tidak ingin mengubah icon.</span>
                            @error('icon') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Visibility Status</span>
                            <select name="status" 
                                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm">
                                <option value="active" {{ old('status', $benefit->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $benefit->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </label>
                    </div>

                    <label class="block text-sm mb-6">
                        <span class="text-gray-700 dark:text-gray-400">Short Description <span class="text-red-500">*</span></span>
                        <textarea name="description" rows="4" 
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:focus:shadow-outline-gray rounded-md border-gray-300 shadow-sm @error('description') border-red-500 @enderror" 
                                  required>{{ old('description', $benefit->description) }}</textarea>
                        @error('description') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('admin.benefits.index') }}" 
                           class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-lg dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 active:bg-transparent hover:bg-gray-50 focus:outline-none focus:shadow-outline-gray">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                            Update Benefit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ================= INFO ================= --}}
        <div>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 border-l-4 border-orange-500">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    <i class="fas fa-info-circle mr-2 text-orange-500"></i> Informasi Edit
                </h4>
                <p class="text-xs text-gray-600 dark:text-gray-400 mb-4">
                    Gunakan bagian ini untuk memperbarui informasi benefit yang akan ditampilkan di halaman Karir.
                </p>
                <div class="bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
                    <p class="text-xs font-bold text-gray-700 dark:text-gray-300 mb-1">Status Visibilitas:</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                        <strong>Active:</strong> Akan tampil langsung di website.<br>
                        <strong>Inactive:</strong> Hanya tersimpan di admin (draft).
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed --}}
@endpush
