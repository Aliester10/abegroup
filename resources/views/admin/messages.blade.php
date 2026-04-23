@extends('layouts.dashboard')

@section('title', 'Pesan Masuk - Admin')

@section('content')
<div class="container-fluid p-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Main Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Pesan Masuk</h5>
                </div>
                <div class="card-body p-0">
                    @if($messages->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ Str::limit($message->message, 50) }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                                                    Lihat Detail
                                                </button>
                                                <form action="{{ route('messages.delete', $message->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Pesan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <strong>Nama:</strong> {{ $message->name }}
                                                        </div>
                                                        <div class="mb-3">
                                                            <strong>Tanggal:</strong> {{ $message->created_at->format('d M Y H:i') }}
                                                        </div>
                                                        <div class="mb-3">
                                                            <strong>Email:</strong> {{ $message->email }}
                                                        </div>
                                                        @if($message->phone)
                                                            <div class="mb-3">
                                                                <strong>Telepon:</strong> {{ $message->phone }}
                                                            </div>
                                                        @endif
                                                        <div class="mb-3">
                                                            <strong>Subjek:</strong> {{ $message->subject }}
                                                        </div>
                                                        <div class="mb-3">
                                                            <strong>Pesan:</strong>
                                                            <div class="p-3 bg-light rounded mt-2">
                                                                {{ $message->message }}
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn btn-primary">
                                                                Balas Email
                                                            </a>
                                                            @if($message->phone)
                                                                <a href="tel:{{ $message->phone }}" class="btn btn-success">
                                                                    Telepon
                                                                </a>
                                                            @endif
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                Tutup
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center p-3">
                            <div>
                                Menampilkan {{ $messages->firstItem() }} - {{ $messages->lastItem() }} dari {{ $messages->total() }} pesan
                            </div>
                            <div>
                                {{ $messages->links() }}
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <h5>Belum ada pesan masuk</h5>
                            <p class="text-muted">Pesan dari formulir hubungi kami akan muncul di sini.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
