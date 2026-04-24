@extends('layouts.dashboard')
@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Create Job Category')
@section('page-title', 'Add New Category')
@section('breadcrumb', 'Job Category')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Category Information</h3>
            </div>
            <form action="{{ route('admin.job_categories.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="name" 
                               class="form-control @error('name') is-invalid @enderror" 
                               id="name" 
                               value="{{ old('name') }}" 
                               placeholder="e.g. Information Technology, Finance, Healthcare" 
                               required>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <p class="text-muted small">
                        <i class="fas fa-info-circle"></i> This category will be available as an option when posting new job vacancies.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.job_categories.index') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Save Category</button>
                </div>
            </form>
        </div>
        </div>
</div>
@endsection
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush
