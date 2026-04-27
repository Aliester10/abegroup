@extends('layouts.dashboard')

@section('title', 'Company Highlights')

@section('content')
<div class="container mx-auto px-4 py-8">
    {{-- HEADER SECTION --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold text-gray-800">Company Highlights Management</h1>
        <a href="{{ route('admin.highlights.create') }}" class="w-full sm:w-auto text-center bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md font-semibold transition duration-200">
            + Add New Highlight
        </a>
    </div>

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 shadow-sm flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE CARD --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 table-fixed sm:table-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="hidden md:table-cell px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-16">ID</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-28">Image</th>
                        <th class="hidden sm:table-cell px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Badge</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="hidden lg:table-cell px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-1/4">Description</th>
                        <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-wider w-40">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($highlights as $highlight)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            {{-- ID --}}
                            <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                #{{ $highlight->id }}
                            </td>
                            
                            {{-- IMAGE --}}
                            <td class="px-6 py-4">
                                @if($highlight->image)
                                    <img src="{{ asset('storage/' . $highlight->image) }}" alt="{{ $highlight->title }}" class="h-12 w-20 object-cover rounded-md shadow-sm border border-gray-100">
                                @else
                                    <div class="h-12 w-20 bg-gray-50 rounded-md flex items-center justify-center border border-dashed border-gray-300 text-[9px] text-gray-400 font-bold uppercase">
                                        No Image
                                    </div>
                                @endif
                            </td>

                            {{-- BADGE --}}
                            <td class="hidden sm:table-cell px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded-full text-xs border border-blue-100 font-medium italic">
                                    {{ $highlight->badge ?? '-' }}
                                </span>
                            </td>

                            {{-- TITLE --}}
                            <td class="px-6 py-4 text-sm text-gray-800 font-normal">
                                <div class="break-all leading-relaxed min-w-[140px]">
                                    {{ $highlight->title }}
                                </div>
                            </td>

                            {{-- DESCRIPTION --}}
                            <td class="hidden lg:table-cell px-6 py-4 text-sm text-gray-500">
                                <div class="line-clamp-2 break-words leading-relaxed">
                                    {{ $highlight->description_top }}
                                </div>
                            </td>

                            {{-- ACTIONS --}}
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end items-center gap-2">
                                    {{-- Tombol Edit: warna tetap indigo-50 meski diklik --}}
                                    <a href="{{ route('admin.highlights.edit', $highlight->id) }}" class="inline-flex items-center px-3 py-1.5 bg-indigo-50 text-indigo-600 rounded-md outline-none focus:outline-none">
                                        Edit
                                    </a>
                                    
                                    {{-- Tombol Delete: warna tetap red-50 meski diklik --}}
                                    <form action="{{ route('admin.highlights.destroy', $highlight->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-600 rounded-md outline-none focus:outline-none" onclick="return confirm('Hapus highlight ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-16 text-center text-gray-400">
                                <p class="text-sm">Belum ada data highlight.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection