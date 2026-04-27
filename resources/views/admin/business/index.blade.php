@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Business Units Management')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Business Units Management
        </h2>
        <a href="{{ route('admin.business.create') }}" 
           class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
            <i class="fas fa-plus mr-2"></i> Add New Business Unit
        </a>
    </div>

    @if(session('success'))
        <div class="px-4 py-3 mb-8 text-sm font-semibold text-green-700 bg-green-100 rounded-lg dark:text-green-100 dark:bg-green-700 shadow-md flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button type="button" class="text-green-500 dark:text-green-200" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Order</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Business</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($businesses as $business)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3 text-sm font-bold">
                                {{ $business->order }}
                            </td>
                            <td class="px-4 py-3">
                                @if($business->image)
                                    <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->name }}" 
                                         class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-600 object-cover w-20 h-12">
                                @else
                                    <div class="w-20 h-12 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center text-xs text-gray-400">
                                        No Image
                                    </div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-300">{{ $business->name }}</div>
                                <div class="flex space-x-2 mt-1">
                                    @if($business->website_link)
                                        <a href="{{ $business->website_link }}" target="_blank" 
                                           class="px-2 py-0.5 text-xs font-medium bg-blue-100 text-blue-700 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-200 transition-colors">
                                            <i class="fas fa-globe mr-1"></i> Website
                                        </a>
                                    @endif
                                    @if($business->ecomerce_link)
                                        <a href="{{ $business->ecomerce_link }}" target="_blank" 
                                           class="px-2 py-0.5 text-xs font-medium bg-yellow-100 text-yellow-700 rounded-full dark:bg-yellow-700 dark:text-yellow-100 hover:bg-yellow-200 transition-colors">
                                            <i class="fas fa-shopping-cart mr-1"></i> Store
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $business->category }}
                            </td>
                            <td class="px-4 py-3 text-xs text-center">
                                @if($business->is_active)
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.business.edit', $business->id) }}" 
                                       class="p-2 text-orange-600 rounded-lg hover:bg-orange-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.business.destroy', $business->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 text-red-600 rounded-lg hover:bg-red-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus unit bisnis ini?')" 
                                                title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-city text-4xl mb-3 text-gray-300"></i>
                                    <p>Belum ada data Business Unit.</p>
                                    <a href="{{ route('admin.business.create') }}" class="mt-2 text-orange-500 hover:underline">Tambah sekarang</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed --}}
@endpush