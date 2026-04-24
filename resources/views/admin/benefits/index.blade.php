@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Benefit List')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Benefit List
        </h2>
        <a href="{{ route('admin.benefits.create') }}" 
           class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
            <i class="fas fa-plus mr-2"></i> Add New Benefit
        </a>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center" style="width: 80px;">Order</th>
                        <th class="px-4 py-3 text-center" style="width: 100px;">Icon</th>
                        <th class="px-4 py-3">Benefit Title</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($benefits as $b)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3 text-sm text-center font-bold">
                                {{ $b->order }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                @if($b->icon)
                                    <img src="{{ asset('storage/'.$b->icon) }}" 
                                         class="object-cover w-10 h-10 rounded-lg border border-gray-200 dark:border-gray-600 shadow-sm mx-auto">
                                @else
                                    <div class="w-10 h-10 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center text-gray-400 mx-auto">
                                        <i class="fas fa-image"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-300">{{ $b->title }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 truncate max-w-xs">{{ Str::limit($b->description, 60) }}</div>
                            </td>
                            <td class="px-4 py-3 text-xs text-center">
                                @if($b->status == 'active')
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 uppercase">
                                        {{ $b->status }}
                                    </span>
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-100 uppercase">
                                        {{ $b->status }}
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.benefits.edit', $b->id) }}" 
                                       class="p-2 text-orange-600 rounded-lg hover:bg-orange-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.benefits.destroy', $b->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 text-red-600 rounded-lg hover:bg-red-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus benefit ini?')" 
                                                title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                Belum ada data benefit.
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
