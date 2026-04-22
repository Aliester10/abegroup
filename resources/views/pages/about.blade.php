@extends('layouts.marketing')

@section('title', 'Tentang Kami - ABE Group')

@section('content')
    @include('partials.marketing.navbar')

    <!-- Hero Section -->
    <section class="relative min-h-[80vh] flex items-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/80 to-blue-900/90"></div>
            <!-- Diagonal Shape Overlay -->
            <div class="absolute inset-0 bg-gradient-to-tl from-transparent via-transparent to-blue-950/50 transform -skew-y-12 origin-bottom"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <!-- Label -->
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-6 border border-white/20">
                Profil Perusahaan
            </span>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Tentang <span class="text-orange-500">ABE Group</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                Memimpin transformasi digital dengan inovasi berkelanjutan dan komitmen terhadap keunggulan dalam setiap solusi yang kami berikan.
            </p>
            
            <!-- CTA Button -->
            <a href="#overview" class="inline-flex items-center px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Jelajahi Lebih Lanjut
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section id="overview" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Text Content -->
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">ABE Group</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        ABE Group adalah perusahaan teknologi terkemuka yang telah berdiri sejak tahun 2015, 
                        berdedikasi untuk menyediakan solusi digital inovatif yang mengubah cara bisnis beroperasi 
                        di era modern. Dengan tim profesional berpengalaman dan komitmen terhadap keunggulan, 
                        kami telah membantu ribuan perusahaan untuk bertransformasi digital dan mencapai kesuksesan 
                        yang berkelanjutan.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Kami percaya bahwa teknologi harus memberdayakan bisnis untuk mencapai potensi penuh mereka. 
                        Melalui pendekatan yang berpusat pada pelanggan dan pemahaman mendalam tentang tantangan 
                        industri, kami mengembangkan solusi yang tidak hanya inovatif tetapi juga praktis dan 
                        dapat diandalkan untuk kebutuhan bisnis Anda.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">1000+ Klien Puas</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">50+ Industri Terlayani</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">9 Tahun Pengalaman</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Image -->
                <div class="relative">
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="ABE Group Office" 
                             class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-500 rounded-full opacity-20 blur-xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-500 rounded-full opacity-20 blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Perjalanan Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dari visi sederhana hingga menjadi pemimpin industri, ini adalah milestone yang membentuk ABE Group.
                </p>
            </div>
            
            <!-- Timeline Container -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-orange-500 to-blue-600"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- 2015 - Pendirian -->
                    <div class="relative flex items-center" data-aos="fade-right">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-orange-500 font-bold text-lg">2015</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">Pendirian ABE Group</h3>
                                <p class="text-gray-600 mt-2">Dimulai dengan visi untuk mengubah lanskap teknologi digital di Indonesia dengan solusi inovatif.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-orange-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <!-- 2017 - Ekspansi Bisnis -->
                    <div class="relative flex items-center" data-aos="fade-left">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-blue-500 font-bold text-lg">2017</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">Ekspansi Bisnis</h3>
                                <p class="text-gray-600 mt-2">Memperluas jangkauan layanan ke berbagai industri dan membuka kantor cabang di kota-kota besar.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2018 - Transformasi Digital -->
                    <div class="relative flex items-center" data-aos="fade-right">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-orange-500 font-bold text-lg">2018</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">Transformasi Digital</h3>
                                <p class="text-gray-600 mt-2">Meluncurkan platform digital terintegrasi yang revolusioner untuk solusi bisnis modern.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-orange-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <!-- 2020 - 1000+ Karyawan -->
                    <div class="relative flex items-center" data-aos="fade-left">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-blue-500 font-bold text-lg">2020</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">1000+ Karyawan</h3>
                                <p class="text-gray-600 mt-2">Mencapai milestone 1000+ karyawan berdedikasi yang tersebar di seluruh Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2022 - Ekspansi Regional -->
                    <div class="relative flex items-center" data-aos="fade-right">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-orange-500 font-bold text-lg">2022</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">Ekspansi Regional</h3>
                                <p class="text-gray-600 mt-2">Memperluas operasi ke pasar regional Asia Tenggara dan mendapatkan pengakuan internasional.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-orange-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <!-- 2024 - Era Baru Inovasi -->
                    <div class="relative flex items-center" data-aos="fade-left">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <span class="text-blue-500 font-bold text-lg">2024</span>
                                <h3 class="text-xl font-semibold text-gray-900 mt-2">Era Baru Inovasi</h3>
                                <p class="text-gray-600 mt-2">Memimpin era baru inovasi teknologi dengan solusi AI dan machine learning yang canggih.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Panduan kami dalam menciptakan dampak positif melalui teknologi dan inovasi.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Vision Card -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi pemimpin global dalam solusi teknologi digital yang menginspirasi transformasi bisnis 
                        dan menciptakan nilai berkelanjutan untuk masyarakat, pelanggan, dan pemangku kepentingan kami.
                    </p>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                    <ul class="text-gray-700 space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Mengembangkan solusi teknologi inovatif yang memecahkan masalah nyata</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Memberikan layanan terbaik dengan fokus pada kepuasan pelanggan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Membangun tim profesional yang berkompeten dan berintegritas</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Berkontribusi pada pembangunan ekonomi digital nasional</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Nilai Perusahaan</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Prinsip-prinsip yang membimbing setiap keputusan dan tindakan kami.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Integritas -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">01</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Integritas</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Berlaku jujur dan transparan dalam setiap interaksi bisnis, membangun kepercayaan yang abadi.
                    </p>
                </div>
                
                <!-- Inovasi -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">02</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Inovasi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Terus berinovasi dan mengeksplorasi kemungkinan baru untuk menciptakan solusi yang lebih baik.
                    </p>
                </div>
                
                <!-- Kolaborasi -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">03</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Kolaborasi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bekerja sama sebagai tim yang solid untuk mencapai tujuan bersama yang lebih besar.
                    </p>
                </div>
                
                <!-- Keunggulan -->
                <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">04</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Keunggulan</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Berkomitmen untuk memberikan yang terbaik dalam setiap aspek layanan dan solusi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Mitra Terpercaya</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Bermitra dengan perusahaan terkemuka dunia untuk memberikan solusi terbaik.
                </p>
            </div>
            
            @if($partners->count() > 0)
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-{{ min($partners->count(), 8) }} gap-8 items-center">
                    @foreach($partners as $index => $partner)
                        <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" 
                             data-aos="zoom-in" 
                             data-aos-delay="{{ ($index + 1) * 100 }}">
                            @if($partner->logo)
                                @if(str_starts_with($partner->logo, 'http'))
                                    <img src="{{ $partner->logo }}" 
                                         alt="{{ $partner->name }}" 
                                         class="h-12 w-auto max-w-full object-contain filter hover:filter-none transition-all duration-300">
                                @else
                                    <img src="{{ asset('storage/' . $partner->logo) }}" 
                                         alt="{{ $partner->name }}" 
                                         class="h-12 w-auto max-w-full object-contain filter hover:filter-none transition-all duration-300">
                                @endif
                            @else
                                <div class="text-xl font-bold text-gray-400 hover:text-blue-600 transition-colors">
                                    {{ $partner->name }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Default partners if no data in database -->
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8 items-center">
                    <!-- Microsoft -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="100">
                        <div class="text-2xl font-bold text-gray-400 hover:text-blue-600 transition-colors">Microsoft</div>
                    </div>
                    
                    <!-- Google -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="200">
                        <div class="text-2xl font-bold text-gray-400 hover:text-blue-500 transition-colors">Google</div>
                    </div>
                    
                    <!-- Amazon -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-2xl font-bold text-gray-400 hover:text-orange-500 transition-colors">Amazon</div>
                    </div>
                    
                    <!-- Oracle -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="400">
                        <div class="text-2xl font-bold text-gray-400 hover:text-red-600 transition-colors">Oracle</div>
                    </div>
                    
                    <!-- SAP -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="500">
                        <div class="text-2xl font-bold text-gray-400 hover:text-blue-700 transition-colors">SAP</div>
                    </div>
                    
                    <!-- Salesforce -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="600">
                        <div class="text-2xl font-bold text-gray-400 hover:text-blue-400 transition-colors">Salesforce</div>
                    </div>
                    
                    <!-- IBM -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="700">
                        <div class="text-2xl font-bold text-gray-400 hover:text-blue-800 transition-colors">IBM</div>
                    </div>
                    
                    <!-- Cisco -->
                    <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110" data-aos="zoom-in" data-aos-delay="800">
                        <div class="text-2xl font-bold text-gray-400 hover:text-red-500 transition-colors">Cisco</div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @include('partials.marketing.footer')

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection
