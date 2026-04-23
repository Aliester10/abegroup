@extends('layouts.dashboard')

@section('title', 'Edit Testimonial')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        {{-- ================= FORM ================= --}}
        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Edit Testimonial</h1>
                <a href="{{ route('admin.testimonials.index') }}" class="text-blue-600 hover:underline text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to List
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- NAME & RATING -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Client Name *</label>
                            <input type="text" name="client_name" value="{{ $testimonial->client_name }}" class="w-full px-3 py-2 border rounded-lg" required>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Rating (1-5) *</label>
                            <select name="rating" class="w-full px-3 py-2 border rounded-lg" required>
                                @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>
                                    {{ $i }} Stars
                                </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <!-- POSITION & COMPANY -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Position *</label>
                            <input type="text" name="position" value="{{ $testimonial->position }}" class="w-full px-3 py-2 border rounded-lg" required>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Company *</label>
                            <input type="text" name="company" value="{{ $testimonial->company }}" class="w-full px-3 py-2 border rounded-lg" required>
                        </div>
                    </div>

                    <!-- MESSAGE -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Testimonial Message *</label>
                        <textarea name="testimonial_text" rows="4" class="w-full px-3 py-2 border rounded-lg" required>{{ $testimonial->testimonial_text }}</textarea>
                    </div>

                    <!-- IMAGE -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Profile Image</label>

                        @if($testimonial->profile_image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $testimonial->profile_image) }}" class="h-16 w-16 rounded-lg object-cover border">
                        </div>
                        @endif

                        <input name="profile_image" type="file" class="w-full text-sm">
                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-end pt-4 border-t">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-black border border-indigo-700 text-sm font-semibold py-2 px-6 rounded-lg shadow-md">
                            Update Testimonial
                        </button>
                    </div>

                </form>
            </div>
        </div>

        {{-- ================= PANDUAN ================= --}}
        <div class="lg:col-span-1">
            <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 sticky top-6">

                <h3 class="text-sm font-semibold text-blue-700 mb-3">
                    📝 Panduan Pengisian
                </h3>

                <ul class="text-xs text-gray-600 space-y-3 leading-relaxed">
                    <li><strong>Client Name:</strong> Nama orang yang memberi testimoni.</li>
                    <li><strong>Rating:</strong> Pilih 1–5 sesuai kepuasan klien.</li>
                    <li><strong>Position:</strong> Jabatan klien (contoh: Manager).</li>
                    <li><strong>Company:</strong> Nama perusahaan klien.</li>
                    <li><strong>Message:</strong> Isi testimoni singkat & jelas.</li>
                    <li><strong>Image:</strong> Foto klien (opsional, biar lebih real).</li>
                </ul>

            </div>
        </div>

    </div>
</div>
@endsection