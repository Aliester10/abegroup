@extends('layouts.dashboard')

@section('title', 'Create Partner')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Partner</h1>

        <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border-gray-300" required>
                    @error('name')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Logo (optional)</label>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs text-gray-600 mb-1">Upload Logo File:</label>
                            <input type="file" name="logo" accept="image/*" class="w-full rounded-lg border-gray-300">
                        </div>
                        <div class="text-center text-gray-500 text-sm">atau</div>
                        <div>
                            <label class="block text-xs text-gray-600 mb-1">Logo URL:</label>
                            <input type="url" name="logo" placeholder="https://example.com/logo.svg" class="w-full rounded-lg border-gray-300">
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Upload file (max 2MB) atau masukkan URL logo eksternal</p>
                    @error('logo')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Slug (optional)</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" class="w-full rounded-lg border-gray-300">
                    @error('slug')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Website URL (optional)</label>
                    <input type="url" name="website_url" value="{{ old('website_url') }}" class="w-full rounded-lg border-gray-300" placeholder="https://">
                    @error('website_url')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description (optional)</label>
                    <textarea name="description" rows="4" class="w-full rounded-lg border-gray-300">{{ old('description') }}</textarea>
                    @error('description')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Order</label>
                        <input type="number" name="order" value="{{ old('order', 0) }}" class="w-full rounded-lg border-gray-300">
                        @error('order')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                    </div>

                    <div class="flex items-center gap-3 pt-7">
                        <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span class="text-sm text-gray-700">Active</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.partner') }}" class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-800">Cancel</a>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
