@extends('layouts.dashboard')

@section('title', 'Add New Testimonial')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">

        <div class="lg:col-span-3">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Add New Testimonial</h1>
                <a href="{{ route('admin.testimonials.index') }}" class="text-blue-600 hover:underline text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to List
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Client Name *</label>
                            <input type="text" name="client_name" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="e.g. Budi Hartono" required>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Rating (1-5) *</label>
                            <select name="rating" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Position *</label>
                            <input type="text" name="position" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="e.g. CEO" required>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Company *</label>
                            <input type="text" name="company" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="e.g. PT Maju Sejahtera" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Testimonial Message *</label>
                        <textarea name="testimonial_text" rows="4" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Write the feedback here..." required></textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Profile Image / Logo (Optional)</label>
                        <div class="mt-2 flex justify-center px-6 py-8 border border-gray-300 border-dashed rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                            <div class="text-center">
                                <svg class="mx-auto h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <label for="profile_image" class="mt-3 block text-sm font-medium text-blue-600 cursor-pointer">Upload Photo</label>
                                <input id="profile_image" name="profile_image" type="file" class="sr-only">
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG up to 2MB</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-6 rounded-lg shadow-sm transition">
                            Save Testimonial
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-8">
                <h2 class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-4">Tips</h2>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li><span class="text-blue-500 font-bold mr-2">01</span><b>Photo:</b> If empty, we will use initials.</li>
                    <li><span class="text-blue-500 font-bold mr-2">02</span><b>Rating:</b> Give 5 stars for best feedback.</li>
                    <li><span class="text-blue-500 font-bold mr-2">03</span><b>Text:</b> Keep it professional and concise.</li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection