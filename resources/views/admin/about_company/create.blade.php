@extends('layouts.dashboard')

@section('title', 'Add About Point')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        {{-- ================= FORM UTAMA ================= --}}
        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Tambah Poin About</h1>
                <a href="{{ route('admin.about.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
                    ← Kembali ke Daftar
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border p-8">
                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Label *</label>
                            <input type="text" name="nama"
                                value="{{ old('nama') }}"
                                placeholder="Contoh: Klien Puas"
                                class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama') border-red-500 @enderror"
                                required>
                            @error('nama') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                        </div>

                        {{-- SEKSI VALUE DINAMIS --}}
                        <div>
                            <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Nilai (Value) *</label>
                            <div id="value-container" class="space-y-2 mt-1">
                                <div class="flex gap-2">
                                    <input type="text" name="values[]"
                                        placeholder="Contoh: 1000+"
                                        class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                    <button type="button" onclick="addValueField()" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-lg hover:bg-blue-100">
                                        +
                                    </button>
                                </div>
                            </div>
                            <p class="text-[10px] text-gray-400 mt-1">Klik tombol + untuk menambah nilai lainnya.</p>
                            @error('values') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Deskripsi</label>
                        <textarea name="deskripsi" rows="4"
                            placeholder="Berikan penjelasan singkat..."
                            class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('deskripsi') border-red-500 @enderror"
                            >{{ old('deskripsi') }}</textarea>
                        @error('deskripsi') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Ikon / Gambar *</label>
                        <div class="mt-1 flex items-center gap-4">
                            <input type="file" name="gambar" 
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                required>
                        </div>
                        <p class="text-[10px] text-gray-400 mt-2 italic">Format: JPG, PNG, GIF (Max: 2MB). Disarankan PNG Transparan.</p>
                        @error('gambar') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="text-right pt-4 border-t border-gray-50">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-2.5 rounded-lg transition shadow-sm">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ================= PANDUAN RINGKAS ================= --}}
        <div class="lg:col-span-1">
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sticky top-6">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">
                    💡 Tips Singkat
                </h3>
                <ul class="text-[11px] text-gray-600 space-y-4 leading-relaxed">
                    <li>
                        <strong class="text-gray-800 block">Multiple Values</strong>
                        Anda sekarang bisa memasukkan lebih dari satu angka jika poin ini mencakup beberapa statistik sekaligus.
                    </li>
                    <li>
                        <strong class="text-gray-800 block">Nama Label</strong>
                        Kategori pencapaian (contoh: "Tahun Pengalaman").
                    </li>
                    <li>
                        <strong class="text-gray-800 block">Ikon</strong>
                        Gunakan ikon transparan untuk hasil terbaik.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT UNTUK INPUT DINAMIS --}}
<script>
    function addValueField() {
        const container = document.getElementById('value-container');
        const newField = document.createElement('div');
        newField.className = 'flex gap-2 mt-2';
        newField.innerHTML = `
            <input type="text" name="values[]"
                placeholder="Nilai tambahan..."
                class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                required>
            <button type="button" onclick="this.parentElement.remove()" class="bg-red-50 text-red-600 px-3 py-2 rounded-lg hover:bg-red-100">
                ✕
            </button>
        `;
        container.appendChild(newField);
    }
</script>
@endsection