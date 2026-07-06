@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Data Unduhan Katalog (Leads)</h2>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Katalog</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">No Telepon</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse($leads as $lead)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">{{ $lead->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $lead->catalog ? $lead->catalog->title : 'Katalog Dihapus' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white font-medium">{{ $lead->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">{{ $lead->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">{{ $lead->phone ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                Belum ada data unduhan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($leads->hasPages())
        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
            {{ $leads->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
