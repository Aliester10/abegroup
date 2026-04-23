@extends('layouts.dashboard')

@section('title', 'Edit Business Unit')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        {{-- ================= FORM ================= --}}
        <div class="lg:col-span-3">

            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Edit Business Unit</h1>
                <a href="{{ route('admin.business.index') }}" class="text-blue-600 hover:underline text-sm font-medium">
                    ← Back to List
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border p-8">
                <form action="{{ route('admin.business.update', $business->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- NAME & CATEGORY -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600">Business Name *</label>
                            <input type="text" name="name"
                                value="{{ old('name', $business->name) }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600">Category *</label>
                            <input type="text" name="category"
                                value="{{ old('category', $business->category) }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>
                    </div>

                    <!-- LINKS -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs font-semibold text-gray-600">Website</label>
                            <input type="url" name="website_link"
                                value="{{ old('website_link', $business->website_link) }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600">E-Commerce</label>
                            <input type="url" name="ecomerce_link"
                                value="{{ old('ecomerce_link', $business->ecomerce_link) }}"
                                class="w-full px-3 py-2 border rounded-lg">
                        </div>
                    </div>

                    <!-- ORDER -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Display Order</label>
                        <input type="number" name="order"
                            value="{{ old('order', $business->order) }}"
                            class="w-full px-3 py-2 border rounded-lg">
                    </div>

                    <!-- DESCRIPTION -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Description *</label>
                        <textarea name="description" rows="4"
                            class="w-full px-3 py-2 border rounded-lg">{{ old('description', $business->description) }}</textarea>
                    </div>

                    <!-- IMAGE -->
                    <div>
                        <label class="text-xs font-semibold text-gray-600">Image</label>

                        @if($business->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $business->image) }}" class="h-20 rounded shadow">
                        </div>
                        @endif

                        <input type="file" name="image">
                    </div>

                    <!-- STATUS -->
                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" value="1"
                            {{ $business->is_active ? 'checked' : '' }}>
                        <label class="ml-2 text-sm">Active</label>
                    </div>

                    <div class="text-right">
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-lg">
                            Update
                        </button>
                    </div>

                </form>
            </div>
        </div>

        {{-- ================= PANDUAN ================= --}}
        <div class="lg:col-span-1">
            <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 sticky top-6">

                <h3 class="text-sm font-semibold text-blue-700 mb-3">
                    ✏️ Panduan Edit
                </h3>

                <ul class="text-xs text-gray-600 space-y-3 leading-relaxed">
                    <li><strong>Business Name:</strong> Ubah jika ada perubahan nama.</li>
                    <li><strong>Category:</strong> Sesuaikan kategori bisnis.</li>
                    <li><strong>Website:</strong> Pastikan link aktif & valid.</li>
                    <li><strong>E-Commerce:</strong> Update jika ada marketplace baru.</li>
                    <li><strong>Order:</strong> Mengatur posisi tampil di halaman.</li>
                    <li><strong>Description:</strong> Perbarui deskripsi jika diperlukan.</li>
                    <li><strong>Image:</strong> Upload ulang jika ingin mengganti gambar.</li>
                    <li><strong>Status:</strong> Nonaktifkan jika tidak ingin ditampilkan.</li>
                </ul>

            </div>
        </div>

    </div>
</div>
@endsection