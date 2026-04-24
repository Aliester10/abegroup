@extends('layouts.dashboard')

@section('title', 'Edit Timeline Item')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-6">
            <form action="{{ route('admin.timelines.update', $timeline->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Year</label>
                    <input type="text" id="year" name="year" value="{{ old('year', $timeline->year) }}" required maxlength="4" 
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                    @error('year')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="order" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Order</label>
                        <input type="number" id="order" name="order" value="{{ old('order', $timeline->order) }}" 
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                        @error('order')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="position" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Position</label>
                        <select id="position" name="position" 
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                            <option value="left" {{ old('position', $timeline->position) == 'left' ? 'selected' : '' }}>Left</option>
                            <option value="right" {{ old('position', $timeline->position) == 'right' ? 'selected' : '' }}>Right</option>
                        </select>
                        @error('position')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="theme" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Theme</label>
                        <select id="theme" name="theme" 
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                            <option value="blue" {{ old('theme', $timeline->theme) == 'blue' ? 'selected' : '' }}>Blue</option>
                            <option value="red" {{ old('theme', $timeline->theme) == 'red' ? 'selected' : '' }}>Red</option>
                            <option value="green" {{ old('theme', $timeline->theme) == 'green' ? 'selected' : '' }}>Green</option>
                            <option value="amber" {{ old('theme', $timeline->theme) == 'amber' ? 'selected' : '' }}>Amber</option>
                        </select>
                        @error('theme')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $timeline->title) }}" required 
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" required 
                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors resize-none">{{ old('description', $timeline->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="label" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Label (Optional)</label>
                    <input type="text" id="label" name="label" value="{{ old('label', $timeline->label) }}" placeholder="e.g., THE BEGINNING" 
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                    @error('label')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tags" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tags (comma separated)</label>
                    @php
                        // Handle tags formatting from array to string if necessary
                        $tagsValue = old('tags') 
                            ? (is_array(old('tags')) ? implode(', ', old('tags')) : old('tags')) 
                            : (is_array($timeline->tags) ? implode(', ', $timeline->tags) : $timeline->tags);
                    @endphp
                    <input type="text" id="tags" name="tags" value="{{ $tagsValue }}" placeholder="e.g., Startup, Vision" 
                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Separate multiple tags with commas</p>
                    @error('tags')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $timeline->is_active) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 rounded dark:bg-gray-700">
                    <label for="is_active" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                        Active
                    </label>
                </div>

                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ route('admin.timelines.index') }}" 
                       class="px-4 py-2 text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-lg font-medium transition-colors">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                        Update Timeline Item
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection