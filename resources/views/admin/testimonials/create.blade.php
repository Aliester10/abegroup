@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Add New Testimonial')
@section('page-title', 'Add New Testimonial')
@section('breadcrumb', 'Add Testimonial')

@section('content')
<div class="row">
    {{-- ================= FORM ================= --}}
    <div class="col-lg-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Testimonial Baru</h3>
            </div>
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label>Client Name <span class="text-danger">*</span></label>
                            <input type="text" name="client_name" class="form-control" placeholder="e.g. Budi Hartono" required>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label>Rating (1-5) <span class="text-danger">*</span></label>
                            <select name="rating" class="form-control" required>
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label>Position <span class="text-danger">*</span></label>
                            <input type="text" name="position" class="form-control" placeholder="e.g. CEO" required>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label>Company <span class="text-danger">*</span></label>
                            <input type="text" name="company" class="form-control" placeholder="e.g. PT Maju Sejahtera" required>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Testimonial Message <span class="text-danger">*</span></label>
                        <textarea name="testimonial_text" rows="4" class="form-control" placeholder="Write the feedback here..." required></textarea>
                    </div>

                    <div class="form-group mb-0">
                        <label>Profile Image / Logo (Optional)</label>
                        <input name="profile_image" type="file" class="form-control">
                        <small class="text-muted">Format JPG/PNG, Max 2MB.</small>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Testimonial</button>
                </div>
            </form>
        </div>
    </div>

    {{-- ================= TIPS ================= --}}
    <div class="col-lg-4">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-lightbulb mr-1"></i> Tips</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <div class="text-bold text-primary mb-1">01. Photo</div>
                        <p class="text-sm text-muted mb-0">Jika foto dikosongkan, sistem akan otomatis menggunakan inisial nama klien.</p>
                    </li>
                    <li class="mb-3">
                        <div class="text-bold text-primary mb-1">02. Rating</div>
                        <p class="text-sm text-muted mb-0">Berikan rating 5 bintang untuk testimoni terbaik yang ingin diunggulkan.</p>
                    </li>
                    <li>
                        <div class="text-bold text-primary mb-1">03. Text</div>
                        <p class="text-sm text-muted mb-0">Gunakan bahasa yang profesional dan ringkas agar mudah dibaca oleh pengunjung.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush