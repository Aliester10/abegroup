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
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 4a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4z"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Total Banner
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
          {{ $stats['total_banner'] }}
        </p>
      </div>
    </div>
    
    <!-- Total Activity Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Total Activity
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
          {{ $stats['total_activity'] }}
        </p>
      </div>
    </div>
    
    <!-- Total About Section Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Total About
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
          {{ $stats['total_about'] }}
        </p>
      </div>
    </div>
    
    <!-- Total Content Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"
          ></path>
          <path
            fill-rule="evenodd"
            d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 100 4h2a2 2 0 100-4h-.5a1 1 0 000-2H8a2 2 0 012-2h2a2 2 0 012 2v9a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Total Content
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
          {{ $stats['total_banner'] + $stats['total_activity'] + $stats['total_about'] }}
        </p>
      </div>
    </div>
  </div>

  <!-- Recent Data Tables -->
  <div class="grid gap-6 mb-8 md:grid-cols-2">
    <!-- Recent Banners -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Banner Terbaru
      </h4>
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-2 py-2">ID</th>
              <th class="px-2 py-2">Dibuat</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($recent_banners as $banner)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-2">
                  <p class="text-sm font-medium">#{{ $banner->id }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $banner->created_at->format('d M Y') }}</p>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="2" class="px-2 py-4 text-center text-gray-500 dark:text-gray-400">
                  Belum ada data banner
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Recent Activities -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Activity Terbaru
      </h4>
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-2 py-2">ID</th>
              <th class="px-2 py-2">Dibuat</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($recent_activities as $activity)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-2 py-2">
                  <p class="text-sm font-medium">#{{ $activity->id }}</p>
                </td>
                <td class="px-2 py-2">
                  <p class="text-sm">{{ $activity->created_at->format('d M Y') }}</p>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="2" class="px-2 py-4 text-center text-gray-500 dark:text-gray-400">
                  Belum ada data activity
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
