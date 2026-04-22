@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
        </div>

        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $news->slug }}" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" class="form-control" rows="5">{{ $news->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.news') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection