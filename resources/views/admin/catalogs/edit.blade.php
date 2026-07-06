@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Edit Katalog</h2>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden p-6 max-w-2xl">
        <form action="{{ route('admin.catalogs.update', $catalog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Judul Katalog</label>
                <input type="text" name="title" value="{{ $catalog->title }}" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-abe-blue focus:ring focus:ring-abe-blue focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Cover Katalog (Gambar)</label>
                @if($catalog->cover_image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $catalog->cover_image) }}" alt="Cover" class="h-32 object-contain rounded border">
                    </div>
                @endif
                <input type="file" name="cover_image" accept="image/*" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-abe-blue dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah cover.</p>
                @error('cover_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Ganti File Katalog (Opsional, PDF Maks 10MB)</label>
                <input type="file" name="file_path" accept=".pdf" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-abe-blue hover:file:bg-blue-100">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah file.</p>
                @if($catalog->file_path)
                    <p class="text-xs text-gray-500 mt-1">File saat ini: <a href="{{ Storage::url($catalog->file_path) }}" target="_blank" class="text-blue-500 underline">Lihat PDF</a></p>
                @endif
                @error('file_path') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" {{ $catalog->is_active ? 'checked' : '' }} class="rounded border-gray-300 text-abe-blue shadow-sm focus:border-abe-blue focus:ring focus:ring-abe-blue focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Aktifkan Katalog ini</span>
                </label>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.catalogs.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Batal</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-200">Perbarui Katalog</button>
            </div>
        </form>
    </div>
</div>
@endsection
