@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Business Units Management')
@section('page-title', 'Business Units Management')
@section('breadcrumb', 'Business Units')

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
                <h3 class="card-title text-bold mb-0">Business Units List</h3>
                <div class="card-tools mb-0" style="margin-left: auto;">
                    <a href="{{ route('admin.business.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-1"></i> Add New Business Unit
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Image</th>
                                <th>Business</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($businesses as $business)
                                <tr>
                                    <td class="align-middle text-bold">{{ $business->order }}</td>
                                    <td class="align-middle">
                                        @if($business->image)
                                            <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->name }}" class="rounded border" style="height: 48px; width: 80px; object-fit: cover;">
                                        @else
                                            <div class="bg-secondary text-white rounded d-flex align-items-center justify-content-center" style="height: 48px; width: 80px; font-size: 12px;">
                                                No Image
                                            </div>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <div class="text-bold mb-1">{{ $business->name }}</div>
                                        <div class="d-flex gap-2">
                                            @if($business->website_link)
                                                <a href="{{ $business->website_link }}" target="_blank" class="badge bg-primary text-decoration-none">
                                                    <i class="fas fa-globe mr-1"></i> Website
                                                </a>
                                            @endif
                                            @if($business->ecomerce_link)
                                                <a href="{{ $business->ecomerce_link }}" target="_blank" class="badge bg-warning text-dark text-decoration-none">
                                                    <i class="fas fa-shopping-cart mr-1"></i> Store
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $business->category }}</td>
                                    <td class="align-middle">
                                        @if($business->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.business.edit', $business->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.business.destroy', $business->id) }}" method="POST" style="display: inline-block; margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus unit bisnis ini?')" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        Belum ada data Business Unit. <a href="{{ route('admin.business.create') }}" class="text-primary">Tambah sekarang</a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush