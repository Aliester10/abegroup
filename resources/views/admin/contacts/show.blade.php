@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Detail Pesan Masuk')
@section('page-title', 'Detail Pesan Masuk')
@section('breadcrumb', 'Detail Pesan')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Isi Pesan</h3>
            </div>
            <div class="card-body">
                <strong><i class="fas fa-heading mr-1"></i> Subjek</strong>
                <p class="text-muted mt-2">{{ $contact->subject }}</p>
                <hr>

                <strong><i class="fas fa-comment-alt mr-1"></i> Pesan</strong>
                <div class="p-3 rounded mt-2" style="border: 1px solid #e9ecef;">
                    {!! nl2br(e($contact->message)) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Informasi Pengirim</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-unbordered mb-4">
                    <li class="list-group-item">
                        <b>Nama</b> <a class="float-right text-primary" style="text-decoration: none;">{{ $contact->name }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a href="mailto:{{ $contact->email }}" class="float-right" style="text-decoration: none;">{{ $contact->email }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Telepon</b> <a class="float-right" style="text-decoration: none;">{{ $contact->phone ?: '-' }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Tanggal</b> <a class="float-right" style="text-decoration: none;">{{ $contact->created_at->format('d/m/Y H:i') }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Status</b> 
                        <span class="float-right badge {{ $contact->is_read ? 'badge-success' : 'badge-warning' }}">
                            {{ $contact->is_read ? 'Dibaca' : 'Belum Dibaca' }}
                        </span>
                    </li>
                </ul>

                <div class="d-flex flex-column gap-2 mt-2">
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block w-100">
                            <i class="fas fa-trash mr-1"></i> Hapus Pesan
                        </button>
                    </form>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-default btn-block w-100 mt-2">
                        <i class="fas fa-arrow-left mr-1"></i> Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush
