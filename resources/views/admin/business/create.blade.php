@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Add New Business Unit')
@section('page-title', 'Add New Business Unit')
@section('breadcrumb', 'Add Business Unit')

@section('content')
<div class="row">
    {{-- ================= FORM ================= --}}
    <div class="col-lg-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Business Unit Baru</h3>
            </div>
            <form action="{{ route('admin.business.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label>Business Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label>Category <span class="text-danger">*</span></label>
                            <input type="text" name="category" value="{{ old('category') }}" class="form-control @error('category') is-invalid @enderror" required>
                            @error('category') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label>Website Link</label>
                            <input type="url" name="website_link" value="{{ old('website_link') }}" class="form-control" placeholder="https://example.com">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label>E-Commerce Link</label>
                            <input type="url" name="ecomerce_link" value="{{ old('ecomerce_link') }}" class="form-control" placeholder="https://store.example.com">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label>Display Order</label>
                            <input type="number" name="order" value="{{ old('order', 0) }}" class="form-control">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label>Logo / Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Description <span class="text-danger">*</span></label>
                        <textarea name="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active (Tampilkan di Website)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.business.index') }}" class="btn btn-default">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Unit Bisnis</button>
                </div>
            </form>
        </div>
    </div>

    {{-- ================= PANDUAN ================= --}}
    <div class="col-lg-4">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-info-circle mr-1"></i> Panduan Pengisian</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-2"><strong>Business Name:</strong> Isi nama perusahaan/unit bisnis.</li>
                    <li class="mb-2"><strong>Category:</strong> Contoh: Technology, Construction, dll.</li>
                    <li class="mb-2"><strong>Website:</strong> Link resmi perusahaan (opsional).</li>
                    <li class="mb-2"><strong>E-Commerce:</strong> Link marketplace (kosongkan jika tidak ada).</li>
                    <li class="mb-2"><strong>Order:</strong> Urutan tampil (angka kecil tampil di awal).</li>
                    <li class="mb-2"><strong>Description:</strong> Deskripsi singkat perusahaan.</li>
                    <li class="mb-2"><strong>Image:</strong> Gunakan gambar berkualitas (rasio landscape).</li>
                    <li><strong>Status:</strong> Aktifkan jika ingin ditampilkan ke publik.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush