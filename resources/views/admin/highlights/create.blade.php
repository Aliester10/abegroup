@extends('layouts.dashboard')

@section('title', 'Add New Highlight')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Add New Highlight</h1>
                <a href="{{ route('admin.highlights.index') }}" class="text-blue-600 hover:underline text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to List
                </a>
            </div>

            @if ($errors->any())
                <div class="mb-6 flex p-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <div>
                        <span class="font-medium">Simpan gagal! Silakan periksa kembali:</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form action="{{ route('admin.highlights.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2 @error('badge') text-red-600 @enderror">Badge</label>
                            <input type="text" name="badge" value="{{ old('badge') }}" 
                                   class="w-full px-3 py-2 text-sm border @error('badge') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                                   placeholder="e.g. Innovation">
                            @error('badge') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2 @error('title') text-red-600 @enderror">Title *</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                   class="w-full px-3 py-2 text-sm border @error('title') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                            @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2 @error('description_top') text-red-600 @enderror">Content Description *</label>
                        <textarea name="description_top" rows="4" 
                                  class="w-full px-3 py-2 text-sm border @error('description_top') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">{{ old('description_top') }}</textarea>
                        @error('description_top') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2 @error('image') text-red-600 @enderror">Cover Image *</label>
                        <div class="mt-2 flex justify-center px-6 py-8 border-2 border-dashed @error('image') border-red-300 bg-red-50 @else border-gray-300 bg-gray-50 @enderror rounded-lg hover:bg-gray-100 transition">
                            <div class="text-center">
                                <svg class="mx-auto h-8 w-8 @error('image') text-red-400 @else text-gray-400 @enderror" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <label for="image" class="mt-3 block text-sm font-medium text-blue-600 cursor-pointer">Upload Image</label>
                                <input id="image" name="image" type="file" class="sr-only">
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, WEBP up to 2MB</p>
                                @error('image') <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-8 rounded-lg shadow-sm transition transform active:scale-95">
                            Save Highlight
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-8">
                <h2 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-4">Quick Guide</h2>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li><span class="text-blue-500 font-bold mr-2">01</span><b>Badge:</b> Short label for categorization.</li>
                    <li><span class="text-blue-500 font-bold mr-2">02</span><b>Title:</b> Clear and concise headline.</li>
                    <li><span class="text-blue-500 font-bold mr-2">03</span><b>Content:</b> Detailed information for users.</li>
                    <li><span class="text-blue-500 font-bold mr-2">04</span><b>Image:</b> High-res visual (max 2MB).</li>
                </ul>
                <p class="mt-4 text-xs text-gray-400 italic">* All fields marked with an asterisk are required to publish.</p>
            </div>
        </div>

    </div>
</div>
@endsection