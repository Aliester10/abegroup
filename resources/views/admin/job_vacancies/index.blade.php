@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Manage Job Vacancies')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Job Vacancy Management
        </h2>
        <a href="{{ route('admin.job_vacancies.create') }}" 
           class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
            <i class="fas fa-plus mr-2"></i> Add New Job
        </a>
    </div>

    @if(session('success'))
        <div class="px-4 py-3 mb-4 text-sm font-semibold text-green-700 bg-green-100 rounded-lg dark:text-green-100 dark:bg-green-700 shadow-md">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="px-4 py-3 mb-4 text-sm font-semibold text-red-700 bg-red-100 rounded-lg dark:text-red-100 dark:bg-red-700 shadow-md">
            {{ session('error') }}
        </div>
    @endif

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Job Title</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Location</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($jobVacancies as $job)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3">
                                <div class="text-sm font-bold text-gray-800 dark:text-gray-200">{{ $job->name }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Exp: {{ $job->experience ?? 'Not specified' }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $job->category->name ?? 'Uncategorized' }}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100">
                                    {{ ucwords(str_replace('_', ' ', $job->type)) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $job->location }}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                @if($job->status == 'active')
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                        {{ ucfirst($job->status) }}
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.job_vacancies.show', $job->id) }}" 
                                       class="p-2 text-blue-600 rounded-lg hover:bg-blue-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.job_vacancies.edit', $job->id) }}" 
                                       class="p-2 text-orange-600 rounded-lg hover:bg-orange-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.job_vacancies.destroy', $job->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 text-red-600 rounded-lg hover:bg-red-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Are you sure you want to delete this job?')" 
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
                                No job vacancies found.
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
    {{-- Removed DataTables and Bootstrap JS --}}
@endpush
