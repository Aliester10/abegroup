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

    <!-- Amazing Timeline Section -->
    <section class="py-12 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-orange-50">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239CA3AF" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-4 py-2 mb-4 rounded-full bg-gradient-to-r from-[#1E3A8A]/10 to-[#F97316]/10 border border-[#1E3A8A]/20 backdrop-blur-sm">
                    <div class="w-2 h-2 bg-[#1E3A8A] rounded-full mr-2 animate-pulse"></div>
                    <span class="text-[#1E3A8A] font-bold text-sm">Perjalanan Kami</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black mb-4">
                    <span class="bg-gradient-to-r from-[#1E3A8A] to-[#F97316] bg-clip-text text-transparent">
                        Perjalanan ABE Group
                    </span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Dari visi sederhana hingga menjadi pemimpin industri, ini adalah milestone yang membentuk ABE Group.
                </p>
            </div>
            
            <!-- Timeline Container -->
            <div class="relative">
                <!-- Animated Vertical Line with Gradient -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full">
                    <div class="h-full bg-gradient-to-b from-[#1E3A8A] to-[#F97316] rounded-full animate-pulse"></div>
                    <div class="h-full bg-gradient-to-b from-[#1E3A8A] to-[#F97316] rounded-full blur-xl opacity-30 absolute top-0 left-0"></div>
                </div>

                @foreach($timelines as $index => $timeline)
                    <!-- Timeline Item {{ $index + 1 }}: {{ $timeline->title }} -->
                    <div class="relative flex items-center mb-{{ $loop->last ? '8' : '16' }} group">
                        <!-- Connector Line -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-24 h-0.5 bg-gradient-to-{{ $timeline->position === 'left' ? 'r' : 'l' }} from-{{ $timeline->theme === 'blue' ? '#1E3A8A' : '#F97316' }} to-transparent opacity-50 group-hover:opacity-100 transition-opacity"></div>
                        
                        @if($timeline->position === 'left')
                            <div class="w-1/2 pr-8 text-right">
                                <div class="relative inline-block">
                                    <div class="absolute inset-0 bg-gradient-to-r from-[#1E3A8A]/20 to-blue-600/20 rounded-2xl blur-lg group-hover:blur-xl transition-all duration-500 transform group-hover:scale-105"></div>
                                    <div class="relative bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-5 border border-[#1E3A8A]/20 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1 hover:rotate-1">
                                        <!-- Year Badge -->
                                        @if($timeline->label)
                                            <div class="absolute -top-3 -right-3 px-3 py-1 bg-gradient-to-r from-[#1E3A8A] to-blue-800 text-white text-xs font-bold rounded-full shadow flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ $timeline->year }}
                                            </div>
                                        @endif
                                        <h3 class="text-lg font-bold text-gray-900 {{ $timeline->label ? 'mt-2 mb-2' : 'mb-2' }}">{{ $timeline->title }}</h3>
                                        <p class="text-sm text-gray-600 leading-relaxed {{ $timeline->label ? 'mb-3' : 'mb-3' }}">{{ $timeline->description }}</p>
                                        @if($timeline->tags && count($timeline->tags) > 0)
                                            <div class="mt-3 flex items-center justify-end space-x-2">
                                                @foreach($timeline->tags as $tag)
                                                    <span class="px-2 py-1 bg-{{ $timeline->theme === 'blue' ? 'blue' : 'orange' }}-100 text-{{ $timeline->theme === 'blue' ? 'blue' : 'orange' }}-800 text-xs font-semibold rounded-full">{{ $tag }}</span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Checkmark Circle -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center justify-center">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#1E3A8A] to-blue-800 rounded-full flex items-center justify-center shadow-lg border-3 border-white group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="absolute w-16 h-16 bg-gradient-to-br from-[#1E3A8A] to-blue-800 rounded-full opacity-20 "></div>
                            </div>
                            
                            <div class="w-1/2 pl-8 flex items-center">
                                <div class="text-left">
                                    <div class="text-2xl font-black bg-gradient-to-r from-[#1E3A8A] to-blue-800 bg-clip-text text-transparent">{{ $timeline->year }}</div>
                                    @if($timeline->label)
                                        <div class="text-xs text-gray-500 font-medium">{{ $timeline->label }}</div>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="w-1/2 pr-8 flex items-center justify-end">
                                <div class="text-right">
                                    <div class="text-2xl font-black bg-gradient-to-r from-[#F97316] to-orange-800 bg-clip-text text-transparent">{{ $timeline->year }}</div>
                                    @if($timeline->label)
                                        <div class="text-xs text-gray-500 font-medium">{{ $timeline->label }}</div>
                                    @endif
                                </div>
                            </div>
                        
                        <!-- Checkmark Circle -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center justify-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#F97316] to-orange-800 rounded-full flex items-center justify-center shadow-lg border-3 border-white group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="absolute w-16 h-16 bg-gradient-to-br from-[#F97316] to-orange-800 rounded-full opacity-20 "></div>
                        </div>
                        
                        <div class="w-1/2 pl-8">
                            <div class="relative inline-block">
                                <div class="absolute inset-0 bg-gradient-to-l from-[#F97316]/20 to-orange-600/20 rounded-2xl blur-lg group-hover:blur-xl transition-all duration-500 transform group-hover:scale-105"></div>
                                <div class="relative bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-5 border border-[#F97316]/20 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1 hover:-rotate-1">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $timeline->title }}</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $timeline->description }}</p>
                                    @if($timeline->tags && count($timeline->tags) > 0)
                                        <div class="flex items-center space-x-2">
                                            @foreach($timeline->tags as $tag)
                                                <span class="px-2 py-1 bg-{{ $timeline->theme === 'blue' ? 'blue' : 'orange' }}-100 text-{{ $timeline->theme === 'blue' ? 'blue' : 'orange' }}-800 text-xs font-semibold rounded-full">{{ $tag }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
            
            @if(empty($timelines))
                <div class="text-center py-12">
                    <p class="text-gray-500">No timeline items available.</p>
                </div>
            @endif
            </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 mb-4 rounded-full bg-white/80 backdrop-blur-sm border border-gray-200">
                    <span class="text-sm font-semibold text-gray-700">Arah & Tujuan</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Visi & Misi
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-blue-600 mx-auto"></div>
            </div>
            
            <div class="flex flex-col gap-8 max-w-5xl mx-auto">
                <!-- Vision Card -->
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-8 relative overflow-hidden md:mr-auto md:w-4/5" data-aos="fade-up" data-aos-delay="100">
                    <!-- Decorative gradient circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/20 to-orange-500/20 rounded-full blur-2xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi perusahaan holding terdepan di Indonesia yang dikenal dengan inovasi, integritas, dan keunggulan dalam memberikan solusi bisnis terintegrasi yang berkelanjutan untuk kemajuan bangsa.
                    </p>
                    
                    <!-- Bottom accent line -->
                    <div class="mt-6 flex items-center space-x-2">
                        <div class="w-8 h-0.5 bg-orange-500"></div>
                        <div class="w-8 h-0.5 bg-blue-600"></div>
                    </div>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-8 relative overflow-hidden md:ml-auto md:w-4/5" data-aos="fade-up" data-aos-delay="200">
                    <!-- Decorative gradient circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/20 to-orange-500/20 rounded-full blur-2xl"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                    <ul class="text-gray-700 space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Mengembangkan portfolio bisnis yang berkelanjutan dan menguntungkan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Memberikan nilai tambah kepada seluruh pemangku kepentingan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Mendorong inovasi dan transformasi digital di setiap unit bisnis</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Membangun tim profesional yang kompeten dan berintegritas</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Berkontribusi positif terhadap kemajuan ekonomi dan masyarakat Indonesia</span>
                        </li>
                    </ul>
                    
                    <!-- Bottom accent line -->
                    <div class="mt-6 flex items-center space-x-2">
                        <div class="w-8 h-0.5 bg-orange-500"></div>
                        <div class="w-8 h-0.5 bg-blue-600"></div>
                    </div>
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
