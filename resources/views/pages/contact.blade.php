@extends('layouts.marketing')

@section('title', 'Hubungi Kami - ABE Group')

@section('content')

    <section class="py-16 sm:py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <p class="text-sm font-semibold text-orange-600">Hubungi Kami</p>
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold text-slate-900">Kirim Pesan</h1>
                <p class="mt-4 text-slate-600">Kami siap mendengar dan menjawab pertanyaan Anda.</p>
            </div>
        </div>
    </section>

    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($companyInfo)
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Informasi Kontak</h2>
                        
                        @if($companyInfo->office_address)
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">Alamat Kantor</h3>
                            <div class="text-slate-600 whitespace-pre-line">{{ $companyInfo->office_address }}</div>
                        </div>
                        @endif

                        @if($companyInfo->phone || $companyInfo->phone_alt)
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">Telepon</h3>
                            <div class="space-y-2">
                                @if($companyInfo->phone)
                                <div class="text-slate-600">{{ $companyInfo->phone }}</div>
                                @endif
                                @if($companyInfo->phone_alt)
                                <div class="text-slate-600">{{ $companyInfo->phone_alt }}</div>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if($companyInfo->email || $companyInfo->email_alt)
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">Email</h3>
                            <div class="space-y-2">
                                @if($companyInfo->email)
                                <div class="text-slate-600">{{ $companyInfo->email }}</div>
                                @endif
                                @if($companyInfo->email_alt)
                                <div class="text-slate-600 whitespace-pre-line">{{ $companyInfo->email_alt }}</div>
                                @endif
                            </div>
                        </div>
                        @endif

                        @if($companyInfo->operational_hours)
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">Jam Operasional</h3>
                            <div class="text-slate-600 whitespace-pre-line">{{ $companyInfo->operational_hours }}</div>
                        </div>
                        @endif
                    </div>

                    @if($companyInfo->map_embed)
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-slate-900 mb-3">Lokasi Kami</h3>
                        <div class="rounded-lg overflow-hidden">
                            {!! $companyInfo->map_embed !!}
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Contact Form -->
                <div>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border-slate-300" required>
                                @error('name')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-slate-300" required>
                                @error('email')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Subjek</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="w-full rounded-lg border-slate-300" required>
                            @error('subject')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Pesan</label>
                            <textarea name="message" rows="5" class="w-full rounded-lg border-slate-300" required>{{ old('message') }}</textarea>
                            @error('message')<div class="text-sm text-red-600 mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div>
                            <button type="submit" class="w-full sm:w-auto px-6 py-3 rounded-lg bg-orange-500 hover:bg-orange-400 text-slate-950 font-semibold transition">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <!-- Fallback if no company info is set -->
            <div class="text-center py-12">
                <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 px-6 py-4 rounded-lg max-w-2xl mx-auto">
                    <h3 class="text-lg font-medium mb-2">Informasi Kontak Belum Tersedia</h3>
                    <p class="text-sm">Informasi kontak perusahaan sedang dalam persiapan. Silakan hubungi kami melalui formulir di bawah ini.</p>
                </div>
            </div>
            @endif
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
