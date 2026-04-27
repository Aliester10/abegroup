@extends('layouts.dashboard')

@section('title', 'Edit Informasi Perusahaan - Admin')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Edit Informasi Perusahaan</h1>
    <p class="text-gray-600 dark:text-gray-400 mt-1">Perbarui informasi kontak perusahaan</p>
</div>

<div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg">
    <form action="{{ route('admin.company-info.update', $companyInfo) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="p-6 space-y-6">
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg" role="alert">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium">Ada kesalahan dalam formulir:</p>
                            <ul class="mt-2 text-sm text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="col-span-2">
                    <label for="office_address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Alamat Kantor <span class="text-red-500">*</span>
                    </label>
                    <textarea id="office_address" name="office_address" rows="3" required
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('office_address', $companyInfo->office_address) }}</textarea>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Telepon Utama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="phone" name="phone" required
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                           value="{{ old('phone', $companyInfo->phone) }}">
                </div>

                <div>
                    <label for="phone_alt" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Telepon Alternatif
                    </label>
                    <input type="text" id="phone_alt" name="phone_alt"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                           value="{{ old('phone_alt', $companyInfo->phone_alt) }}">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Email Utama <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                           value="{{ old('email', $companyInfo->email) }}">
                </div>

                <div>
                    <label for="email_alt" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Email Alternatif
                    </label>
                    <input type="email" id="email_alt" name="email_alt"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                           value="{{ old('email_alt', $companyInfo->email_alt) }}">
                </div>

                <div class="col-span-2">
                    <label for="operational_hours" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Jam Operasional <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="operational_hours" name="operational_hours" required
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                           value="{{ old('operational_hours', $companyInfo->operational_hours) }}"
                           placeholder="Contoh: Senin - Jumat: 08:00 - 17:00">
                </div>

                <div class="col-span-2">
                    <label for="map_embed" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Embed Map (Opsional)
                    </label>
                    <textarea id="map_embed" name="map_embed" rows="4"
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                              placeholder="Paste embed code dari Google Maps di sini">{{ old('map_embed', $companyInfo->map_embed) }}</textarea>
                </div>

                <div class="col-span-2">
                    <div class="flex items-center">
                        <input id="is_active" name="is_active" type="checkbox" value="1" 
                               @if($companyInfo->is_active) checked @endif
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900 dark:text-white">
                            Aktif
                        </label>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Centang jika informasi ini ingin ditampilkan di halaman Hubungi Kami
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" 
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                Perbarui
            </button>
            <a href="{{ route('admin.company-info.index') }}" 
               class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
