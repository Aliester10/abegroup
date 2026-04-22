@extends('layouts.dashboard')

@section('title', 'Create Activity')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Activity</h1>

        <form action="{{ route('admin.activity.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full rounded-lg border-gray-300" required>
                    @error('title')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" name="date" value="{{ old('date') }}" class="w-full rounded-lg border-gray-300" required>
                    @error('date')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Location (optional)</label>
                    <input type="text" name="location" value="{{ old('location') }}" class="w-full rounded-lg border-gray-300">
                    @error('location')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description (optional)</label>
                    <textarea name="description" rows="4" class="w-full rounded-lg border-gray-300">{{ old('description') }}</textarea>
                    @error('description')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Image (optional)</label>
                    <input type="file" name="image" class="w-full rounded-lg border-gray-300">
                    @error('image')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span class="text-sm text-gray-700">Active</span>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.activity') }}" class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-800">Cancel</a>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
