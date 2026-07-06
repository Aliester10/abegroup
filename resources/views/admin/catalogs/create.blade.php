@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Tambah Katalog</h2>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden p-6 max-w-2xl">
        <form action="{{ route('admin.catalogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Judul Katalog</label>
                <input type="text" name="title" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-abe-blue dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Contoh: Katalog Produk 2026">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Cover Katalog (Gambar, Opsional)</label>
                <input type="file" name="cover_image" accept="image/*" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-abe-blue dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG. Maksimal 2MB. Akan ditampilkan di halaman depan.</p>
                @error('cover_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">File Katalog (PDF, Maks 10MB)</label>
                <input type="file" name="file_path" accept=".pdf" required class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-abe-blue hover:file:bg-blue-100">
                @error('file_path') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" checked class="rounded border-gray-300 text-abe-blue shadow-sm focus:border-abe-blue focus:ring focus:ring-abe-blue focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Aktifkan Katalog ini</span>
                </label>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.catalogs.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Batal</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-200">Simpan Katalog</button>
            </div>
        </form>
    </div>
</div>
@endsection
