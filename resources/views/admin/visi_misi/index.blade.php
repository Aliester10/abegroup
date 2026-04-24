@extends('layouts.dashboard')

@section('title', 'Visi Misi Management')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Visi Misi Management</h1>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden p-6">
        <form action="{{ route('admin.visi_misi.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="visi" class="block text-gray-700 font-bold mb-2">Visi</label>
                <textarea name="visi" id="visi" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required>{{ old('visi', $visimisi->visi ?? '') }}</textarea>
                @error('visi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="misi" class="block text-gray-700 font-bold mb-2">Misi (Pisahkan dengan baris baru untuk setiap poin)</label>
                <textarea name="misi" id="misi" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required>{{ old('misi', $visimisi->misi ?? '') }}</textarea>
                @error('misi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <p class="text-sm text-gray-500 mt-1">Setiap baris baru akan menjadi satu poin (bullet point) pada halaman profil.</p>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline transition duration-200">
                    Simpan Visi Misi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
