@extends('layouts.dashboard')

@section('title', 'Detail Pesan - Admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Detail Pesan</h1>
        <div>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body bg-white p-0">
            <table class="table table-bordered mb-0" style="background-color: white;">
                <tbody>
                    <tr style="background-color: white;">
                        <td style="width: 200px; padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Nama Lengkap</td>
                        <td style="padding: 1rem; background-color: white;">{{ $contact->name }}</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Email</td>
                        <td style="padding: 1rem; background-color: white;">
                            <a href="mailto:{{ $contact->email }}" class="text-decoration-none text-primary">
                                {{ $contact->email }}
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Nomor Telepon</td>
                        <td style="padding: 1rem; background-color: white;">{{ $contact->phone ?: 'Tidak ada' }}</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Tanggal</td>
                        <td style="padding: 1rem; background-color: white;">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Subjek</td>
                        <td style="padding: 1rem; background-color: white;">{{ $contact->subject }}</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa; vertical-align: top;">Pesan</td>
                        <td style="padding: 1rem; background-color: white;">
                            <div class="p-4 bg-light rounded" style="min-height: 120px; background-color: #f8f9fa; border: 1px solid #e9ecef; font-size: 1rem; line-height: 1.6; color: #212529;">
                                {{ nl2br(e($contact->message)) }}
                            </div>
                        </td>
                    </tr>
                    <tr style="background-color: white;">
                        <td style="padding: 1rem; font-weight: 600; color: #495057; background-color: #f8f9fa;">Status</td>
                        <td style="padding: 1rem; background-color: white;">
                            @if($contact->is_read)
                                <span class="badge bg-success px-3 py-2">Dibaca</span>
                            @else
                                <span class="badge bg-warning px-3 py-2">Belum Dibaca</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
