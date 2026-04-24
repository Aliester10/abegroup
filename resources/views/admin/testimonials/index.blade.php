@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Testimonials Management')
@section('page-title', 'Testimonials Management')
@section('breadcrumb', 'Testimonial')

@section('content')
<div class="row">
    <div class="col-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h3 class="card-title text-bold mb-0">Testimonials List</h3>
                <div class="card-tools mb-0" style="margin-left: auto;">
                    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-1"></i> Add New Testimonial
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Company & Position</th>
                                <th>Testimonial</th>
                                <th>Rating</th>
                                <th class="text-center" style="width: 150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimonials as $testimonial)
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            @if($testimonial->profile_image)
                                                <img src="{{ asset('storage/' . $testimonial->profile_image) }}" class="rounded-circle mr-3" style="width: 40px; height: 40px; object-fit: cover;" alt="">
                                            @else
                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mr-3" style="width: 40px; height: 40px; font-weight: bold;">
                                                    {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
                                                </div>
                                            @endif
                                            <div class="text-bold ms-2">{{ $testimonial->client_name }}</div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="text-bold">{{ $testimonial->company }}</div>
                                        <div class="text-muted text-sm">{{ $testimonial->position }}</div>
                                    </td>
                                    <td class="align-middle">
                                        {{ Str::limit($testimonial->testimonial_text, 50) }}
                                    </td>
                                    <td class="align-middle text-warning">
                                        @for($i = 0; $i < $testimonial->rating; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display: inline-block; margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        Belum ada data testimoni. <a href="{{ route('admin.testimonials.create') }}" class="text-primary">Tambah sekarang</a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            @if($testimonials->hasPages())
                <div class="card-footer pb-0">
                    <div class="d-flex justify-content-center">
                        {{ $testimonials->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush