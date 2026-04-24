@extends('layouts.dashboard')

@section('title', 'Sustainability - Admin')

@section('content')
<div class="px-3 sm:px-4 lg:px-6 py-4 sm:py-6 lg:py-8">
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 sm:mb-6 space-y-3 sm:space-y-0">
        <div>
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">Sustainability</h1>
            <p class="mt-1 text-xs sm:text-sm text-gray-600">Manage sustainability content displayed on homepage</p>
        </div>
        <a href="{{ route('admin.sustainability.create') }}" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg transition duration-200 flex items-center justify-center text-sm sm:text-base">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-1.5 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span class="text-sm sm:text-base">Add Sustainability</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-3 sm:px-4 py-2.5 sm:py-3 rounded-lg mb-4 sm:mb-6 flex items-center text-sm sm:text-base">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <!-- Desktop Table View -->
    <div class="hidden sm:block bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtitle</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">Description</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Points</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($commitments as $index => $commitment)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm text-gray-900 font-medium">{{ $index + 1 }}</td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm text-gray-900">
                                @if($commitment->image_url)
                                    <img src="{{ asset($commitment->image_url) }}" alt="{{ $commitment->title }}" class="h-10 w-10 object-cover rounded-lg border border-gray-200">
                                @else
                                    <div class="h-10 w-10 bg-gray-200 rounded-lg border border-gray-300 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586 1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm text-gray-900 font-medium">{{ $commitment->title }}</td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm text-gray-900">{{ $commitment->subtitle }}</td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 text-sm text-gray-500 hidden lg:table-cell">
                                <div class="max-w-xs truncate" title="{{ $commitment->description }}">
                                    {{ Str::limit($commitment->description, 50) }}
                                </div>
                            </td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm text-gray-500 hidden md:table-cell">
                                <span class="text-gray-400">{{ count($commitment->points ?? []) }} points</span>
                            </td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap">
                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $commitment->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $commitment->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-3 sm:px-4 lg:px-6 py-2.5 sm:py-3 sm:whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.sustainability.edit', $commitment) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                                    <form action="{{ route('admin.sustainability.destroy', $commitment) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium" onclick="return confirm('Are you sure you want to delete this sustainability commitment?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                <div class="flex flex-col items-center">
                                    <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <p class="text-lg font-medium text-gray-900 mb-2">No sustainability commitments yet</p>
                                    <p class="text-sm text-gray-500 mb-4">Start by creating the first sustainability commitment</p>
                                    <a href="{{ route('admin.sustainability.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-200">
                                        Create First Sustainability
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mobile Card View -->
    <div class="sm:hidden space-y-3 sm:space-y-4">
        @forelse($commitments as $index => $commitment)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-3 sm:p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-2 sm:mb-3">
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-blue-100 text-blue-800 text-xs font-semibold">{{ $index + 1 }}</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        @if($commitment->image_url)
                            <img src="{{ asset($commitment->image_url) }}" alt="{{ $commitment->title }}" class="h-12 w-12 object-cover rounded-lg border border-gray-200">
                        @else
                            <div class="h-12 w-12 bg-gray-200 rounded-lg border border-gray-300 flex items-center justify-center">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586 1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">{{ $commitment->title }}</h3>
                            <p class="text-xs sm:text-sm text-gray-600 mt-1">{{ $commitment->subtitle }}</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $commitment->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $commitment->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                
                <div class="space-y-1.5 sm:space-y-2 text-xs sm:text-sm text-gray-600">
                    <div class="flex justify-between">
                        <span class="font-medium">Description:</span>
                        <span class="text-right max-w-[120px] sm:max-w-[150px] truncate">{{ Str::limit($commitment->description, 25) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium">Points:</span>
                        <span>{{ count($commitment->points ?? []) }} items</span>
                    </div>
                </div>

                <div class="mt-3 sm:mt-4 pt-3 sm:pt-4 border-t border-gray-200 flex space-x-2 sm:space-x-3">
                    <a href="{{ route('admin.sustainability.edit', $commitment) }}" class="flex-1 bg-blue-50 hover:bg-blue-100 text-blue-600 px-2 sm:px-3 py-1.5 sm:py-2 rounded-lg text-center font-medium transition-colors text-xs sm:text-sm">
                        Edit
                    </a>
                    <form action="{{ route('admin.sustainability.destroy', $commitment) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-600 px-2 sm:px-3 py-1.5 sm:py-2 rounded-lg font-medium transition-colors text-xs sm:text-sm" onclick="return confirm('Are you sure you want to delete this sustainability commitment?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 sm:p-6 sm:p-8 text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-base sm:text-lg font-medium text-gray-900 mb-2">No sustainability commitments yet</h3>
                <p class="text-sm text-gray-500 mb-4">Start by creating the first sustainability commitment</p>
                <a href="{{ route('admin.sustainability.create') }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg transition duration-200 text-sm sm:text-base">
                    Create First Sustainability
                </a>
            </div>
        @endforelse
    </div>
</div>
@endsection
