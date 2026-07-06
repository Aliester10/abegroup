@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Dashboard
  </h2>
  <!-- Cards -->
  <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Total Banner Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 4a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Banner</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_banner'] }}</p>
      </div>
    </div>
    
    <!-- Total About Section Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total About</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_about'] }}</p>
      </div>
    </div>
    
    <!-- Total News Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Berita</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_news'] }}</p>
      </div>
    </div>

    <!-- Total Business Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Unit Bisnis</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_business'] }}</p>
      </div>
    </div>

    <!-- Total Partner Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Mitra</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_partner'] }}</p>
      </div>
    </div>

    <!-- Total Users Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Pengguna</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_users'] }}</p>
      </div>
    </div>

    <!-- Total Jobs Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Lowongan Kerja</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_jobs'] }}</p>
      </div>
    </div>

    <!-- Total Content Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
          <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 100 4h2a2 2 0 100-4h-.5a1 1 0 000-2H8a2 2 0 012-2h2a2 2 0 012 2v9a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Content</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $stats['total_banner'] + $stats['total_about'] + $stats['total_news'] + $stats['total_business'] + $stats['total_partner'] }}</p>
      </div>
    </div>
  </div>

  <!-- Recent Data Tables -->
  <div class="grid gap-6 mb-8 md:grid-cols-2">
    <!-- Company Info -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Informasi Perusahaan
      </h4>
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-2 py-2">Email</th>
              <th class="px-2 py-2">Telepon</th>
              <th class="px-2 py-2">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($recent_company_info as $info)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-2">
                  <p class="text-sm font-medium">{{ $info->email }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $info->phone }}</p>
                </td>
                <td class="px-2 py-2">
                  @if($info->is_active)
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                      Aktif
                    </span>
                  @else
                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                      Tidak Aktif
                    </span>
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="px-2 py-4 text-center text-gray-500 dark:text-gray-400">
                  Belum ada data informasi perusahaan
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Recent News -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Berita Terbaru
      </h4>
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-2 py-2">Judul</th>
              <th class="px-2 py-2">Dibuat</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($recent_news as $news)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-2">
                  <p class="text-sm font-medium truncate max-w-xs">{{ $news->title }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $news->created_at->format('d M Y') }}</p>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="2" class="px-2 py-4 text-center text-gray-500 dark:text-gray-400">
                  Belum ada data berita
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Recent Users -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 md:col-span-2">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Pengguna Terbaru
      </h4>
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-2 py-2">Nama</th>
              <th class="px-2 py-2">Email</th>
              <th class="px-2 py-2">Terdaftar Pada</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($recent_users as $user)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-2">
                  <p class="text-sm font-medium">{{ $user->name }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $user->email }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $user->created_at->format('d M Y, H:i') }}</p>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="px-2 py-4 text-center text-gray-500 dark:text-gray-400">
                  Belum ada data pengguna
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
@endsection
