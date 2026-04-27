@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'News Management')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            News Management
        </h2>
        <a href="{{ route('admin.news.create') }}" 
           class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-700 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue">
            <i class="fas fa-plus mr-2"></i> Add New News
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
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3 hidden lg:table-cell">Slug</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($news as $key => $item)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3 text-sm font-bold">
                                {{ $key + 1 }}
                            </td>
                            <td class="px-4 py-3">
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" 
                                         class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-600 object-cover w-20 h-12">
                                @else
                                    <div class="w-20 h-12 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center text-xs text-gray-400">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-300">{{ $item->title }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm hidden lg:table-cell">
                                <div class="max-w-xs truncate font-mono text-xs" title="{{ $item->slug }}">
                                    {{ $item->slug }}
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs text-center">
                                @if($item->is_active ?? true)
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Published
                                    </span>
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.news.edit', $item->id) }}" 
                                       class="p-2 text-blue-600 rounded-lg hover:bg-blue-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 text-red-600 rounded-lg hover:bg-red-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Are you sure you want to delete this news?')" 
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
                                    <i class="fas fa-newspaper text-4xl mb-3 text-gray-300"></i>
                                    <p>No news articles yet.</p>
                                    <a href="{{ route('admin.news.create') }}" class="mt-2 text-blue-600 hover:underline">Add one now</a>
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
    {{-- No additional scripts needed --}}
@endpush