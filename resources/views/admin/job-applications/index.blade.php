@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Manage Job Applications')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Incoming Applications
        </h2>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center" style="width: 50px">No</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Applicant Name</th>
                        <th class="px-4 py-3">Position</th>
                        <th class="px-4 py-3">Education</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($applications as $index => $app)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3 text-sm text-center">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $app->created_at->format('d M Y') }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $app->full_name }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">{{ $app->email }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $app->job_vacancy->name ?? 'N/A' }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $app->last_education }}
                            </td>
                            <td class="px-4 py-3 text-xs text-center">
                                @if($app->status == 'pending')
                                    <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100">
                                        Pending
                                    </span>
                                @elseif($app->status == 'reviewed')
                                    <span class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100">
                                        Reviewing
                                    </span>
                                @elseif($app->status == 'accepted')
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Accepted
                                    </span>
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                        Rejected
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.applications.show', $app->id) }}" 
                                       class="p-2 text-blue-600 rounded-lg hover:bg-blue-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ asset('storage/' . $app->resume_path) }}" target="_blank" 
                                       class="p-2 text-green-600 rounded-lg hover:bg-green-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                       title="Download Resume">
                                        <i class="fas fa-file-pdf"></i>
                                    </a>
                                    <form action="{{ route('admin.applications.destroy', $app->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 text-red-600 rounded-lg hover:bg-red-100 dark:text-gray-400 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus lamaran ini?')" 
                                                title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                No applications found.
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
