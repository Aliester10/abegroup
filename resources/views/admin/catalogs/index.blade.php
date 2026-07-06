@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Kelola Katalog</h2>
        <a href="{{ route('admin.catalogs.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-200">
            Tambah Katalog
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Cover</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Judul Katalog</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">File</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($catalogs as $catalog)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($catalog->cover_image)
                                <img src="{{ asset('storage/' . $catalog->cover_image) }}" alt="Cover" class="h-10 w-10 object-cover rounded shadow">
                            @else
                                <div class="h-10 w-10 bg-gray-200 dark:bg-gray-600 rounded flex items-center justify-center text-gray-500 dark:text-gray-400 text-xs shadow">No Img</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $catalog->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">
                            <a href="{{ Storage::url($catalog->file_path) }}" target="_blank" class="text-blue-500 hover:underline">Lihat PDF</a>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            @if($catalog->is_active)
                                <span class="px-2 py-1 text-xs text-green-800 bg-green-100 rounded-full">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs text-red-800 bg-red-100 rounded-full">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium flex gap-2">
                            <a href="{{ route('admin.catalogs.edit', $catalog) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('admin.catalogs.destroy', $catalog) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus katalog ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-6 py-4">
            {{ $catalogs->links() }}
        </div>
    </div>

    <!-- Data Unduhan Terbaru -->
    <div class="mt-10 flex justify-between items-center mb-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Data Unduhan Terbaru</h3>
        <a href="{{ route('admin.catalog_leads.index') }}" class="text-blue-500 hover:underline text-sm font-medium">Lihat Semua Data &rarr;</a>
    </div>
    
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Katalog</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pengunduh</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Kontak</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse($recentLeads as $lead)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">{{ $lead->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $lead->catalog ? $lead->catalog->title : 'Katalog Dihapus' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white font-medium">{{ $lead->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">
                                <div>{{ $lead->email }}</div>
                                <div class="text-xs mt-1">{{ $lead->phone ?? '-' }}</div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">Belum ada data unduhan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
