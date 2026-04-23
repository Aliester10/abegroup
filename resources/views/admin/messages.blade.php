@extends('layouts.dashboard')

@section('title', 'Pesan Masuk - Admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">Pesan Masuk</h1>
                <div class="d-flex gap-2">
                    <span class="badge bg-primary">{{ $messages->total() }} Total Pesan</span>
                    <span class="badge bg-success">{{ $messages->count() }} Ditampilkan</span>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    @if($messages->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>
                                                <small>{{ $message->created_at->format('d/m/Y H:i') }}</small>
                                            </td>
                                            <td>
                                                <strong>{{ $message->name }}</strong>
                                                @if($message->phone)
                                                    <br><small class="text-muted">{{ $message->phone }}</small>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                                                    {{ $message->email }}
                                                </a>
                                            </td>
                                            <td>{{ $message->subject }}</td>
                                            <td>
                                                <span class="text-truncate d-block" style="max-width: 200px;">
                                                    {{ Str::limit($message->message, 50) }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <form action="{{ route('messages.delete', $message->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal for viewing message -->
                                        <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Pesan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <strong>Nama:</strong> {{ $message->name }}
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Tanggal:</strong> {{ $message->created_at->format('d/m/Y H:i') }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <strong>Email:</strong> 
                                                                <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                                                            </div>
                                                            @if($message->phone)
                                                                <div class="col-md-6">
                                                                    <strong>Telepon:</strong> {{ $message->phone }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="mb-3">
                                                            <strong>Subjek:</strong> {{ $message->subject }}
                                                        </div>
                                                        <div class="mb-3">
                                                            <strong>Pesan:</strong>
                                                            <div class="mt-2 p-3 bg-light rounded">
                                                                {{ $message->message }}
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2">
                                                            <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn btn-primary">
                                                                <i class="fas fa-reply"></i> Balas Email
                                                            </a>
                                                            <a href="tel:{{ $message->phone }}" class="btn btn-success">
                                                                <i class="fas fa-phone"></i> Telepon
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $messages->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">Belum ada pesan masuk</h5>
                            <p class="text-muted">Pesan dari formulir hubungi kami akan muncul di sini.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
