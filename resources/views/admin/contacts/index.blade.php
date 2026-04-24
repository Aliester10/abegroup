@extends('layouts.dashboard')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
@endpush

@section('title', 'Pesan Masuk - Admin')
@section('page-title', 'Pesan Masuk')
@section('breadcrumb', 'Pesan Masuk')

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
            <div class="card-header py-3">
                <h3 class="card-title text-bold">Daftar Pesan Masuk</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th class="text-center" style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration + ($contacts->currentPage() - 1) * $contacts->perPage() }}</td>
                                    <td class="align-middle">
                                        <div class="text-muted text-sm">{{ $contact->created_at->format('d/m/Y') }}</div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="text-bold">{{ $contact->name }}</div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </td>
                                    <td class="align-middle">
                                        <div>{{ Str::limit($contact->subject, 30) }}</div>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-info btn-sm" title="Lihat Pesan">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-bs-toggle="modal" data-target="#modal-delete-{{ $contact->id }}" data-bs-target="#modal-delete-{{ $contact->id }}" title="Hapus Pesan">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>

                                        {{-- Delete Modal --}}
                                        <div class="modal fade" id="modal-delete-{{ $contact->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;">
                                                <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                                                    <div class="modal-body text-center p-5">
                                                        <div class="mb-4">
                                                            <i class="fas fa-exclamation-circle text-danger" style="font-size: 80px; opacity: 0.9;"></i>
                                                        </div>
                                                        <h3 class="text-bold mb-3">Hapus Pesan?</h3>
                                                        <p class="text-muted mb-4">
                                                            Apakah Anda yakin ingin menghapus pesan dari <strong>{{ $contact->name }}</strong>?
                                                        </p>
                                                        <div class="d-flex justify-content-center" style="gap: 15px;">
                                                            <button type="button" class="btn btn-secondary btn-lg px-4" data-dismiss="modal" data-bs-dismiss="modal" style="font-weight: 600; border: none; min-width: 120px; border-radius: 8px;">
                                                                Batal
                                                            </button>
                                                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-lg px-4" style="font-weight: 600; background-color: #e3342f; border: none; min-width: 140px; border-radius: 8px;">
                                                                    Ya, Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">No incoming messages found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            @if($contacts->hasPages())
                <div class="card-footer pb-0">
                    <div class="d-flex justify-content-center">
                        {{ $contacts->links() }}
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
