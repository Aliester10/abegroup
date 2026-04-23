@extends('layouts.dashboard')

@section('title', 'Pesan Masuk - Admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Pesan Masuk</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body bg-white">
            <div class="table-responsive">
                <table class="table align-middle bg-white" style="border-collapse: separate; border-spacing: 0;">
                    <thead>
                        <tr style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                            <th style="width: 50px; padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057;">NO</th>
                            <th style="width: 120px; padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057;">TANGGAL</th>
                            <th style="width: 200px; padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057;">NAMA</th>
                            <th style="width: 250px; padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057;">EMAIL</th>
                            <th style="padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057;">SUBJEK</th>
                            <th style="width: 150px; padding: 1rem; font-weight: 600; font-size: 0.875rem; color: #495057; text-align: right;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                            <tr style="border-bottom: 1px solid #e9ecef;">
                                <td style="padding: 1rem; vertical-align: middle;">{{ $loop->iteration }}</td>
                                <td style="padding: 1rem; vertical-align: middle;">
                                    <div style="color: #495057; font-size: 0.875rem;">{{ $contact->created_at->format('d/m/Y') }}</div>
                                </td>
                                <td style="padding: 1rem; vertical-align: middle;">
                                    <div style="font-weight: 500; color: #212529;">{{ $contact->name }}</div>
                                </td>
                                <td style="padding: 1rem; vertical-align: middle;">
                                    <div style="color: #6c757d; font-size: 0.875rem;">{{ $contact->email }}</div>
                                </td>
                                <td style="padding: 1rem; vertical-align: middle;">
                                    <div style="color: #212529;">{{ Str::limit($contact->subject, 30) }}</div>
                                </td>
                                <td style="padding: 1rem; vertical-align: middle; text-align: right;">
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('admin.contacts.show', $contact) }}" 
                                           class="btn btn-sm px-3 py-2" 
                                           style="background-color: #ffc107; border-color: #ffc107; color: #212529; border-radius: 6px; font-size: 0.875rem; font-weight: 500;">
                                            Lihat
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm px-3 py-2" 
                                                    style="background-color: #dc3545; border-color: #dc3545; color: white; border-radius: 6px; font-size: 0.875rem; font-weight: 500;"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5" style="background-color: white;">
                                    <div style="color: #6c757d;">Belum ada pesan masuk</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($contacts->hasPages())
                <div class="d-flex justify-content-center mt-3">
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
