@extends('layouts.dashboard')

@section('title', 'Add New Business Unit')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        {{-- ================= FORM ================= --}}
        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Add New Business Unit</h1>
                <a href="{{ route('admin.business.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
                    ← Back to List
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border p-8">
                <form action="{{ route('admin.business.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- NAME & CATEGORY -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600">Business Name *</label>
                            <input type="text" name="name"
                                value="{{ old('name') }}"
                                class="w-full px-3 py-2 border rounded-lg @error('name') border-red-500 @enderror"
                                required>
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600">Category *</label>
                            <input type="text" name="category"
                                value="{{ old('category') }}"
                                class="w-full px-3 py-2 border rounded-lg @error('category') border-red-500 @enderror"
                                required>
                        </div>
                    </div>

                    <!-- WEBSITE & ECOMMERCE -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600">Website</label>
                            <input type="url" name="website_link"
                                value="{{ old('website_link') }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600">E-Commerce</label>
                            <input type="url" name="ecomerce_link"
                                value="{{ old('ecomerce_link') }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>
                    </div>

                    <!-- ORDER -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Display Order</label>
                        <input type="number" name="order" value="{{ old('order', 0) }}"
                            class="w-full px-3 py-2 border rounded-lg">
                    </div>

                    <!-- DESCRIPTION -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Description *</label>
                        <textarea name="description" rows="4"
                            class="w-full px-3 py-2 border rounded-lg"
                            required>{{ old('description') }}</textarea>
                    </div>

                    <!-- IMAGE -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Image *</label>
                        <input type="file" name="image" required>
                    </div>

                    <!-- STATUS -->
                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" checked>
                        <label class="ml-2 text-sm">Active</label>
                    </div>

                    <div class="text-right">
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg">
                            Save
                        </button>
                    </div>

                </form>
            </div>
        </div>

        {{-- ================= PANDUAN ================= --}}
        <div class="lg:col-span-1">
            <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 sticky top-6">

                <h3 class="text-sm font-semibold text-blue-700 mb-3">
                    📘 Panduan Pengisian
                </h3>

                <ul class="text-xs text-gray-600 space-y-3 leading-relaxed">
                    <li><strong>Business Name:</strong> Isi nama perusahaan/unit bisnis.</li>
                    <li><strong>Category:</strong> Contoh: Technology, Construction, dll.</li>
                    <li><strong>Website:</strong> Link resmi perusahaan (opsional).</li>
                    <li><strong>E-Commerce:</strong> Link marketplace (kosongkan jika tidak ada) .</li>
                    <li><strong>Order:</strong> Urutan tampil di halaman (angka kecil tampil dulu).</li>
                    <li><strong>Description:</strong> Deskripsi singkat perusahaan.</li>
                    <li><strong>Image:</strong> Gunakan gambar berkualitas (rasio landscape).</li>
                    <li><strong>Status:</strong> Aktifkan jika ingin ditampilkan di website.</li>
                </ul>

            </div>
        </div>

    </div>
</div>
@endsection