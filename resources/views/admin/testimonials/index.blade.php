@extends('layouts.dashboard')

@push('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Testimonials Management')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="flex justify-between items-center my-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Testimonials Management
        </h2>
        <a href="{{ route('admin.testimonials.create') }}" 
           class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-500 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
            <i class="fas fa-plus mr-2"></i> Add New Testimonial
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
                        <th class="px-4 py-3">Client</th>
                        <th class="px-4 py-3">Company & Position</th>
                        <th class="px-4 py-3">Testimonial</th>
                        <th class="px-4 py-3">Rating</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse($testimonials as $testimonial)
                        <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-10 h-10 mr-3 rounded-full md:block">
                                        @if($testimonial->profile_image)
                                            <img class="object-cover w-full h-full rounded-full shadow-inner" 
                                                 src="{{ asset('storage/' . $testimonial->profile_image) }}" 
                                                 alt="" loading="lazy" />
                                        @else
                                            <div class="w-full h-full rounded-full bg-orange-100 dark:bg-orange-500 flex items-center justify-center text-orange-500 dark:text-orange-100 font-bold">
                                                {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $testimonial->client_name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="font-medium text-gray-800 dark:text-gray-300">{{ $testimonial->company }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">{{ $testimonial->position }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm max-w-xs truncate">
                                {{ Str::limit($testimonial->testimonial_text, 50) }}
                            </td>
                            <td class="px-4 py-3 text-sm text-yellow-500">
                                @for($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                <div class="flex items-center justify-center space-x-2 text-sm">
                                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" 
                                       class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-orange-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray hover:bg-orange-100 dark:hover:bg-gray-600 transition-colors" 
                                       aria-label="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray hover:bg-red-100 dark:hover:bg-gray-600 transition-colors" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')" 
                                                aria-label="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5" class="px-4 py-8 text-center text-gray-500 dark:text-gray-400">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-folder-open text-4xl mb-3 text-gray-300"></i>
                                    <p>Belum ada data testimoni.</p>
                                    <a href="{{ route('admin.testimonials.create') }}" class="mt-2 text-orange-500 hover:underline">Tambah sekarang</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($testimonials->hasPages())
            <div class="px-4 py-3 bg-gray-50 text-gray-500 dark:text-gray-400 dark:bg-gray-800 border-t dark:border-gray-700">
                <div class="flex justify-center">
                    {{ $testimonials->links() }}
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
    {{-- No Bootstrap JS needed anymore --}}
@endpush