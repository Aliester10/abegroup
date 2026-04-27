@extends('layouts.marketing')

@section('title', 'Hubungi Kami - ABE Group')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2070&q=80" 
                 class="w-full h-full object-cover" alt="Contact Hero">
            <div class="absolute inset-0 bg-slate-950/70"></div>
            <div class="absolute inset-0 bg-gradient-to-tr from-slate-950 via-slate-950/70 to-orange-500/10"></div>
        </div>
        
        <div class="relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="min-h-[50vh] flex items-center justify-center py-16 text-center text-white">
                    <div class="max-w-3xl">
                        <p class="inline-flex items-center gap-2 text-white/70 text-sm mb-4">
                            <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                            Hubungi Kami
                        </p>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                            Kami Siap <span class="text-orange-400">Membantu</span> Anda
                        </h1>
                        <p class="mt-5 text-base sm:text-lg text-white/75 max-w-2xl mx-auto">
                            Punya pertanyaan atau ingin berkolaborasi? Tim kami siap memberikan solusi terbaik untuk kebutuhan Anda.
                        </p>
                    </div>
                </div>
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
    <!-- Contact Section -->
    <section class="relative z-20 -mt-10 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Contact Info (Left) -->
                <div class="lg:col-span-4 space-y-6 order-2 lg:order-1">
                    <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                        <h2 class="text-2xl font-bold text-slate-900 mb-8">Informasi Kontak</h2>
                        
                        <div class="space-y-8">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-1">Alamat Kantor</h3>
                                    <p class="text-slate-600 text-sm leading-relaxed">
                                        Gedung ABE Tower, Jl. Sudirman No. 123,<br>
                                        Jakarta Pusat 10220
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-phone-alt text-orange-600 text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-1">Telepon</h3>
                                    <p class="text-slate-600 text-sm leading-relaxed">
                                        +62 21 1234 5678<br>
                                        +62 21 1234 5679 (Fax)
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-envelope text-green-600 text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-1">Email</h3>
                                    <p class="text-slate-600 text-sm leading-relaxed">
                                        info@abegroup.co.id<br>
                                        support@abegroup.co.id
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-clock text-purple-600 text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 mb-1">Jam Operasional</h3>
                                    <p class="text-slate-600 text-sm leading-relaxed">
                                        Senin - Jumat: 08.00 - 17.00 WIB<br>
                                        Sabtu: 08.00 - 12.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-900 rounded-3xl p-8 text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold mb-4">Butuh Respon Cepat?</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Hubungi tim kami melalui WhatsApp untuk konsultasi langsung mengenai layanan kami.
                            </p>
                            <a href="https://wa.me/628123456789" target="_blank" 
                               class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 px-6 py-3 rounded-2xl font-bold transition-all">
                                <i class="fab fa-whatsapp text-xl"></i>
                                WhatsApp Kami
                            </a>
                        </div>
                        <i class="fab fa-whatsapp absolute -bottom-8 -right-8 text-white/5 text-9xl"></i>
                    </div>
                </div>

                <!-- Contact Form (Right) -->
                <div class="lg:col-span-8 order-1 lg:order-2">
                    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 p-8 md:p-12 border border-slate-100">
                        <div class="mb-10">
                            <h2 class="text-3xl font-bold text-slate-900">Kirim Pesan</h2>
                            <p class="text-slate-500 mt-2">Lengkapi formulir di bawah ini dan kami akan segera menghubungi Anda.</p>
                        </div>

                        @if(session('success'))
                            <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-2xl mb-8 flex items-center gap-3">
                                <i class="fas fa-check-circle text-xl"></i>
                                <p class="font-medium">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                           class="w-full px-5 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-orange-500 transition-all" 
                                           placeholder="Masukkan nama Anda">
                                    @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-5 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-orange-500 transition-all" 
                                           placeholder="email@perusahaan.com">
                                    @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Nomor Telepon</label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}"
                                           class="w-full px-5 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-orange-500 transition-all" 
                                           placeholder="0812xxxx">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Subjek</label>
                                    <input type="text" name="subject" value="{{ old('subject') }}" required
                                           class="w-full px-5 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-orange-500 transition-all" 
                                           placeholder="Apa yang ingin Anda bicarakan?">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Pesan Anda</label>
                                <textarea name="message" rows="6" required
                                          class="w-full px-5 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-orange-500 transition-all resize-none" 
                                          placeholder="Tuliskan pesan atau pertanyaan Anda secara detail..."></textarea>
                                @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <div class="pt-4">
                                <button type="submit" 
                                        class="w-full md:w-auto px-10 py-4 bg-orange-500 text-white font-bold rounded-2xl hover:bg-orange-600 transition-all shadow-lg shadow-orange-200 flex items-center justify-center gap-3">
                                    <span>Kirim Pesan</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.marketing.footer')
@endsection
