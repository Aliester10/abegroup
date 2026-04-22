@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Berita</h2>

    <form action="{{ route('admin.news.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" class="form-control" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.news') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection