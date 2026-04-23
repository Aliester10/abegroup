@extends('layouts.dashboard')

@section('title', 'Edit Timeline Item')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Edit Timeline Item</h1>
        <a href="{{ route('admin.timelines.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left mr-2"></i>Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.timelines.update', $timeline) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $timeline->year) }}" required maxlength="4">
                            @error('year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $timeline->order) }}">
                            @error('order')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $timeline->title) }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $timeline->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="label" class="form-label">Label (Optional)</label>
                            <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $timeline->label) }}" placeholder="e.g., THE BEGINNING">
                            @error('label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-control" id="position" name="position" required>
                                <option value="left" {{ old('position', $timeline->position) == 'left' ? 'selected' : '' }}>Left</option>
                                <option value="right" {{ old('position', $timeline->position) == 'right' ? 'selected' : '' }}>Right</option>
                            </select>
                            @error('position')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="theme" class="form-label">Theme</label>
                            <select class="form-control" id="theme" name="theme" required>
                                <option value="blue" {{ old('theme', $timeline->theme) == 'blue' ? 'selected' : '' }}>Blue</option>
                                <option value="orange" {{ old('theme', $timeline->theme) == 'orange' ? 'selected' : '' }}>Orange</option>
                            </select>
                            @error('theme')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags (comma separated)</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') ? implode(', ', old('tags')) : ($timeline->tags ? implode(', ', $timeline->tags) : '') }}" placeholder="e.g., Startup, Vision">
                    <small class="form-text">Separate multiple tags with commas</small>
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $timeline->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Active
                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.timelines.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Timeline Item</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
