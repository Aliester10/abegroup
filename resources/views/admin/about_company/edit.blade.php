@extends('layouts.dashboard')

@section('title', 'Edit About Point')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        {{-- ================= FORM UTAMA ================= --}}
        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Edit Poin About</h1>
                <a href="{{ route('admin.about.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
                    ← Kembali ke Daftar
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border p-8">
                <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Label *</label>
                            <input type="text" name="nama"
                                value="{{ old('nama', $about->nama) }}"
                                placeholder="Contoh: Klien Puas"
                                class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama') border-red-500 @enderror"
                                required>
                            @error('nama') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Nilai (Value) *</label>
                            
                            <div id="value-container" class="space-y-2 mt-1">
                                @php
                                    $values = explode(', ', $about->value);
                                @endphp

                                @foreach($values as $index => $val)
                                    <div class="flex gap-2">
                                        <input type="text" name="values[]"
                                            value="{{ old('values.' . $index, $val) }}"
                                            placeholder="Contoh: 1000+"
                                            class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('values.' . $index) border-red-500 @enderror"
                                            required>
                                        
                                        @if($index === 0)
                                            <button type="button" onclick="addValueField()" class="bg-blue-50 text-blue-600 px-3 py-2 rounded-lg hover:bg-blue-100">
                                                +
                                            </button>
                                        @else
                                            <button type="button" onclick="this.parentElement.remove()" class="bg-red-50 text-red-600 px-3 py-2 rounded-lg hover:bg-red-100">
                                                ✕
                                            </button>
                                        @endif
                                    </div>
                                    @error('values.' . $index)
                                        <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                                    @enderror
                                @endforeach
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
                        >{{ old('deskripsi', $about->deskripsi) }}</textarea>
                        @error('deskripsi') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Ikon / Gambar</label>
                        
                        <div class="mt-2 mb-4 flex items-center gap-4 p-4 bg-gray-50 rounded-lg border border-dashed">
                            @if($about->gambar)
                                <div class="shrink-0">
                                    <img src="{{ asset('storage/' . $about->gambar) }}" alt="Current Icon" class="h-16 w-16 object-contain bg-white rounded border p-1">
                                    <p class="text-[9px] text-center text-gray-400 mt-1">Ikon Saat Ini</p>
                                </div>
                            @endif
                            
                            <div class="flex-1">
                                <input type="file" name="gambar" 
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="text-[10px] text-gray-400 mt-2 italic">Kosongkan jika tidak ingin mengubah gambar.</p>
                            </div>
                        </div>
                        @error('gambar') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-50">
                        <a href="{{ route('admin.about.index') }}" class="text-gray-500 hover:text-gray-700 text-sm font-medium px-4">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-2.5 rounded-lg transition shadow-sm">
                            Perbarui Data
                        </button>
                    </div>

                </form>
            </div>
        </div>

        {{-- ================= PANDUAN RINGKAS ================= --}}
        <div class="lg:col-span-1">
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-5 sticky top-6">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">
                    💡 Info Perubahan
                </h3>

                <ul class="text-[11px] text-gray-600 space-y-4 leading-relaxed">
                    <li>
                        <strong class="text-gray-800 block">Multiple Values</strong>
                        Anda sekarang bisa memasukkan lebih dari satu angka jika poin ini mencakup beberapa statistik sekaligus.
                    </li>
                    <li>
                        <strong class="text-gray-800 block">Riwayat Gambar</strong>
                        Gambar lama akan otomatis dihapus oleh sistem jika Anda mengunggah gambar baru.
                    </li>
                    <li>
                        <strong class="text-gray-800 block">Validasi</strong>
                        Pastikan Nilai (Value) tetap ringkas agar tidak merusak tampilan counter statistik di frontend.
                    </li>
                    <li class="pt-2 italic text-gray-400 border-t border-gray-200">
                        Perubahan akan langsung berdampak pada halaman "Tentang Kami".
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