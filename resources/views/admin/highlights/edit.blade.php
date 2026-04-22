@extends('layouts.dashboard')

@section('title', 'Edit Highlight')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        <!-- Form Section -->
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

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form action="{{ route('admin.highlights.update', $highlight->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Badge & Title -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Badge</label>
                            <input type="text" name="badge" value="{{ old('badge', $highlight->badge) }}" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Title *</label>
                            <input type="text" name="title" value="{{ old('title', $highlight->title) }}" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Content Description *</label>
                        <textarea name="description_top" rows="4" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>{{ old('description_top', $highlight->description_top) }}</textarea>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Cover Image *</label>
                        <div class="mt-2 flex flex-col items-center px-6 py-8 border border-gray-300 border-dashed rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                            @if($highlight->image)
                                <img src="{{ asset('storage/'.$highlight->image) }}" alt="Current Image" class="mb-4 h-32 object-cover rounded-md shadow">
                            @endif
                            <div class="text-center">
                                <label for="image" class="mt-3 block text-sm font-medium text-blue-600 cursor-pointer">Change Image</label>
                                <input id="image" name="image" type="file" class="sr-only">
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, WEBP up to 2MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-6 rounded-lg shadow-sm transition">
                            Update Highlight
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Quick Guide Section -->
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
