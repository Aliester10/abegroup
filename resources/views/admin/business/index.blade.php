@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
    <style>
        /* Optimasi khusus untuk tampilan mobile yang sangat kecil */
        @media (max-width: 640px) {
            .mobile-header-hide { display: none; }
            table, thead, tbody, th, td, tr { display: block; }
            thead tr { position: absolute; top: -9999px; left: -9999px; }
            tr { border: 1px solid #e2e8f0; margin-bottom: 1rem; border-radius: 0.5rem; overflow: hidden; background: white; }
            .dark tr { border-color: #374151; background: #1f2937; }
            td { border: none; position: relative; padding-left: 50% !important; text-align: right !important; }
            td:before { position: absolute; left: 1rem; width: 45%; font-weight: bold; text-align: left; content: attr(data-label); font-size: 0.75rem; text-transform: uppercase; color: #6b7280; }
            .dark td:before { color: #9ca3af; }
            td.no-label { padding-left: 1rem !important; text-align: center !important; }
            td.no-label:before { content: none; }
        }
    </style>
@endpush

@section('title', 'Business Units Management')

@section('content')
<div class="container px-4 sm:px-6 mx-auto">
    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center my-6 gap-4">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Business Units Management
        </h2>
        <a href="{{ route('admin.business.create') }}" 
           class="w-full sm:w-auto text-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg hover:bg-orange-600 focus:outline-none shadow-sm">
            <i class="fas fa-plus mr-2"></i> Add New Business Unit
        </a>
    </div>

    {{-- Alert Success --}}
    @if(session('success'))
        <div class="px-4 py-3 mb-6 text-sm font-semibold text-green-700 bg-green-100 rounded-lg dark:text-green-100 dark:bg-green-700 shadow-sm flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button type="button" class="ml-2" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif

    {{-- Table Container --}}
    <div class="w-full overflow-hidden rounded-lg shadow-sm mb-8 border dark:border-gray-700">
        <div class="w-full overflow-x-auto">
            {{-- Tambahkan table-fixed agar kolom mematuhi batas lebar --}}
            <table class="w-full table-fixed sm:table-auto">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 w-20">Order</th>
                        <th class="px-4 py-3 w-32">Image</th>
                        <th class="px-4 py-3">Business</th>
                        <th class="px-4 py-3 w-40">Category</th>
                        <th class="px-4 py-3 text-center w-28">Status</th>
                        <th class="px-4 py-3 text-center w-32">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($businesses as $business)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3 text-sm font-bold" data-label="Order">
                                {{ $business->order }}
                            </td>
                            <td class="px-4 py-3" data-label="Image">
                                <div class="flex justify-end sm:justify-start">
                                    @if($business->image)
                                        <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->name }}" 
                                             class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-600 object-cover w-20 h-12">
                                    @else
                                        <div class="w-20 h-12 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center text-[10px] text-gray-400 uppercase">
                                            No Image
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3" data-label="Business">
                                {{-- PERBAIKAN: Tambahkan break-all agar teks panjang turun ke bawah --}}
                                <div class="text-sm font-normal text-gray-800 dark:text-gray-300 break-all leading-relaxed">
                                    {{ $business->name }}
                                </div>
                                <div class="flex flex-wrap justify-end sm:justify-start gap-1 mt-1">
                                    @if($business->website_link)
                                        <a href="{{ $business->website_link }}" target="_blank" 
                                           class="px-2 py-0.5 text-[10px] font-medium bg-blue-100 text-blue-700 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-200 transition">
                                            <i class="fas fa-globe mr-1"></i> Web
                                        </a>
                                    @endif
                                    @if($business->ecomerce_link)
                                        <a href="{{ $business->ecomerce_link }}" target="_blank" 
                                           class="px-2 py-0.5 text-[10px] font-medium bg-yellow-100 text-yellow-700 rounded-full dark:bg-yellow-700 dark:text-yellow-100 hover:bg-yellow-200 transition">
                                            <i class="fas fa-shopping-cart mr-1"></i> Store
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm" data-label="Category">
                                {{-- PERBAIKAN: Tambahkan break-all juga di sini --}}
                                <div class="break-all">
                                    {{ $business->category }}
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs text-center" data-label="Status">
                                <span class="px-2 py-1 font-semibold leading-tight {{ $business->is_active ? 'text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100' : 'text-red-700 bg-red-100 dark:bg-red-700 dark:text-red-100' }} rounded-full">
                                    {{ $business->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm text-center no-label">
                                <div class="flex items-center justify-center space-x-3">
                                    <a href="{{ route('admin.business.edit', $business->id) }}" 
                                       class="text-orange-600 dark:text-orange-400 hover:text-orange-900 transition-colors p-1" 
                                       title="Edit">
                                        <i class="fas fa-edit text-lg"></i>
                                    </a>
                                    <form action="{{ route('admin.business.destroy', $business->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 dark:text-red-400 hover:text-red-900 transition-colors p-1" 
                                                onclick="return confirm('Hapus unit bisnis ini?')" 
                                                title="Delete">
                                            <i class="fas fa-trash text-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-12 text-center text-gray-500 dark:text-gray-400 no-label">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-city text-5xl mb-4 text-gray-300 dark:text-gray-600"></i>
                                    <p class="text-lg">Belum ada data Business Unit.</p>
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