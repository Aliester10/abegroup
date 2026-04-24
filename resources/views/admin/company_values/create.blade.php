@extends('layouts.dashboard')

@section('title', 'Tambah Nilai Perusahaan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Tambah Nilai Perusahaan</h1>
            <a href="{{ route('admin.company_values.index') }}" class="text-blue-500 hover:underline">Kembali</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.company_values.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Judul Nilai</label>
                    <input type="text" name="title" id="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ old('title') }}" required placeholder="Contoh: Integritas">
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required placeholder="Jelaskan nilai ini...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline transition duration-200">
                        Simpan Nilai
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
