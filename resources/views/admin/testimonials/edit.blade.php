@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Edit Testimonial')
@section('page-title', 'Edit Testimonial')
@section('breadcrumb', 'Edit Testimonial')

@section('content')
<div class="row">
    {{-- ================= FORM ================= --}}
    <div class="col-lg-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Edit Testimonial</h3>
            </div>
            <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Client Name <span class="text-danger">*</span></label>
                            <input type="text" name="client_name" value="{{ $testimonial->client_name }}" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Rating (1-5) <span class="text-danger">*</span></label>
                            <select name="rating" class="form-control" required>
                                @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>
                                    {{ $i }} Stars
                                </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Position <span class="text-danger">*</span></label>
                            <input type="text" name="position" value="{{ $testimonial->position }}" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Company <span class="text-danger">*</span></label>
                            <input type="text" name="company" value="{{ $testimonial->company }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Testimonial Message <span class="text-danger">*</span></label>
                        <textarea name="testimonial_text" rows="4" class="form-control" required>{{ $testimonial->testimonial_text }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Profile Image</label>
                        @if($testimonial->profile_image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $testimonial->profile_image) }}" class="rounded" style="height: 80px; width: 80px; object-fit: cover; border: 1px solid #ddd;">
                        </div>
                        @endif
                        <input name="profile_image" type="file" class="form-control">
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default">Batal</a>
                    <button type="submit" class="btn btn-primary">Update Testimonial</button>
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
                    <li class="mb-2"><strong>Client Name:</strong> Nama orang yang memberi testimoni.</li>
                    <li class="mb-2"><strong>Rating:</strong> Pilih 1–5 sesuai kepuasan klien.</li>
                    <li class="mb-2"><strong>Position:</strong> Jabatan klien (contoh: Manager).</li>
                    <li class="mb-2"><strong>Company:</strong> Nama perusahaan klien.</li>
                    <li class="mb-2"><strong>Message:</strong> Isi testimoni singkat & jelas.</li>
                    <li><strong>Image:</strong> Foto klien (opsional, biar lebih real).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush