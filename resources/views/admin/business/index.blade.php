@extends('layouts.dashboard')

@section('title', 'Business Units Management')

@section('content')
<div class="container mx-auto px-4 py-8">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Business Units Management</h1>
        <a href="{{ route('admin.business.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-200">
            + Add New Business Unit
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">

            <!-- Head -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Business</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>

            <!-- Body -->
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($businesses as $business)
                <tr class="hover:bg-gray-50 transition">

                    <!-- Order -->
                    <td class="px-6 py-4 text-sm text-gray-900">
                        {{ $business->order }}
                    </td>

                    <!-- Image -->
                    <td class="px-6 py-4">
                        @if($business->image)
                        <img src="{{ asset('storage/' . $business->image) }}"
                            alt="{{ $business->name }}"
                            class="h-12 w-20 object-cover rounded shadow-sm border border-gray-100">
                        @else
                        <div class="h-12 w-20 bg-gray-200 rounded flex items-center justify-center text-xs text-gray-400">
                            No Image
                        </div>
                        @endif
                    </td>

                    <!-- Business Info -->
                    <td class="px-6 py-4 text-sm text-gray-900 font-medium">
                        <div class="flex flex-col space-y-1">

                            <!-- Name -->
                            <span>{{ $business->name }}</span>

                            <!-- Links -->
                            <div class="flex gap-2 mt-1">

                                @if($business->website_link)
                                <a href="{{ $business->website_link }}" target="_blank"
                                    class="text-[10px] px-2 py-1 bg-blue-50 text-blue-600 rounded hover:bg-blue-100 transition">
                                    🌐 Website
                                </a>
                                @endif

                                @if($business->ecomerce_link)
                                <a href="{{ $business->ecomerce_link }}" target="_blank"
                                    class="text-[10px] px-2 py-1 bg-orange-50 text-orange-600 rounded hover:bg-orange-100 transition">
                                    🛒 Store
                                </a>
                                @endif

                            </div>

                        </div>
                    </td>

                    <!-- Category -->
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $business->category }}
                    </td>

                    <!-- Status -->
                    <td class="px-6 py-4 text-sm">
                        @if($business->is_active)
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                            Active
                        </span>
                        @else
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                            Inactive
                        </span>
                        @endif
                    </td>

                    <!-- Actions -->
                    <td class="px-6 py-4 text-sm font-medium">
                        <a href="{{ route('admin.business.edit', $business->id) }}"
                            class="text-indigo-600 hover:text-indigo-900 mr-3">
                            Edit
                        </a>

                        <form action="{{ route('admin.business.destroy', $business->id) }}"
                            method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:text-red-900"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus unit bisnis ini?')">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                        Belum ada data Business Unit.
                        <a href="{{ route('admin.business.create') }}" class="text-blue-500 hover:underline">
                            Tambah sekarang
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
@endsection