@extends('layouts.dashboard')

@section('title', 'Edit Highlight')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Edit Highlight</h1>
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
                        <span class="font-medium">Pembaruan gagal! Perbaiki kesalahan berikut:</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form action="{{ route('admin.highlights.update', $highlight->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2 @error('badge') text-red-600 @enderror">Badge</label>
                            <input type="text" name="badge" value="{{ old('badge', $highlight->badge) }}" 
                                   class="w-full px-3 py-2 text-sm border @error('badge') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                                   maxlength="255">
                            @error('badge') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2 @error('title') text-red-600 @enderror">Title *</label>
                            <input type="text" name="title" value="{{ old('title', $highlight->title) }}" 
                                   class="w-full px-3 py-2 text-sm border @error('title') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" 
                                   maxlength="255">
                            @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2 @error('description_top') text-red-600 @enderror">Content Description *</label>
                        <textarea name="description_top" rows="4" 
                                  class="w-full px-3 py-2 text-sm border @error('description_top') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">{{ old('description_top', $highlight->description_top) }}</textarea>
                        @error('description_top') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2 @error('image') text-red-600 @enderror">Cover Image</label>
                        <div class="mt-2 flex flex-col items-center px-6 py-8 border-2 border-dashed @error('image') border-red-300 bg-red-50 @else border-gray-300 bg-gray-50 @enderror rounded-lg hover:bg-gray-100 transition">
                            
                            @if($highlight->image)
                                <div class="relative mb-4 group">
                                    <img src="{{ asset('storage/'.$highlight->image) }}" alt="Current Image" class="h-32 object-cover rounded-md shadow border border-gray-200">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-md text-white text-[10px]">
                                        Current Image
                                    </div>
                                </div>
                            @endif

                            <div class="text-center">
                                <label for="image" class="block text-sm font-medium text-blue-600 cursor-pointer hover:text-blue-800">
                                    {{ $highlight->image ? 'Change Image' : 'Upload Image' }}
                                </label>
                                <input id="image" name="image" type="file" class="sr-only">
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, WEBP up to 2MB</p>
                                @error('image') <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-8 rounded-lg shadow-sm transition transform active:scale-95">
                            Update Highlight
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-8">
                <h2 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-4">Quick Guide</h2>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li><span class="text-blue-500 font-bold mr-2">01</span><b>Badge:</b> Short label (max 255 chars).</li>
                    <li><span class="text-blue-500 font-bold mr-2">02</span><b>Title:</b> Main headline (max 255 chars).</li>
                    <li><span class="text-blue-500 font-bold mr-2">03</span><b>Content:</b> Detailed description.</li>
                    <li><span class="text-blue-500 font-bold mr-2">04</span><b>Image:</b> Optional if not changing.</li>
                </ul>
                <p class="mt-4 text-xs text-gray-400 italic">* All fields marked with an asterisk are required.</p>
            </div>
        </div>

    </div>
</div>
@endsection