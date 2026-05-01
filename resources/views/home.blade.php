<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pace Film Production</title>

    <link rel="icon" href="{{ asset('images/logo-pace-film.png') }}" type="image/png">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans antialiased">

    @php
    // Nomor WA yang kamu tulis di screenshot sebelumnya
    $waAdmin = '6282197562528'; 
    $pesanAdmin = 'Halo Pace Film Production, saya tertarik untuk berdiskusi mengenai project dan layanan video production. Bisa minta waktunya sebentar?';
    $linkWa = 'https://wa.me/' . $waAdmin . '?text=' . urlencode($pesanAdmin);
@endphp

   <nav class="fixed w-full z-50 bg-gray-900/90 backdrop-blur-sm border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                
                <a href="/" class="flex-shrink-0 flex items-center hover:opacity-80 transition duration-300">
                <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-12 w-auto md:h-16 transform scale-150 origin-left">
                </a>
                
               <div class="hidden md:flex space-x-6 lg:space-x-8 text-sm lg:text-base items-center">
                    <a href="/#beranda" class="text-gray-300 hover:text-yellow-500 transition">Beranda</a>
                    <a href="/#tentang" class="text-gray-300 hover:text-yellow-500 transition">Tentang</a>
                    <a href="/#layanan" class="text-gray-300 hover:text-yellow-500 transition">Layanan</a>
                    <a href="/#portofolio" class="text-gray-300 hover:text-yellow-500 transition">Portofolio</a>
                    <a href="/#merchandise" class="text-gray-300 hover:text-yellow-500 transition">Store</a>
                    <a href="/legalitas" class="text-gray-300 hover:text-yellow-500 transition">Legalitas</a>
                </div>

                <div class="hidden md:block">
                   <a href="{{ $linkWa }}" target="_blank" class="bg-yellow-500 text-gray-900 px-5 py-2 rounded-full font-bold hover:bg-yellow-400 transition">Hubungi Kami</a>
                </div>

                <!-- Hamburger Menu HP (Tambahkan id="mobile-menu-btn") -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

            </div> <!-- Penutup div flex justify-between -->

            <!-- BLOK MENU HP (Tambahkan blok ini sebelum penutup <nav>) -->
            <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-t border-gray-800 pb-4 pt-2">
                <a href="/#beranda" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Beranda</a>
                <a href="/#tentang" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Tentang</a>
                <a href="/#layanan" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Layanan</a>
                <a href="/#portofolio" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Portofolio</a>
                <a href="/#merchandise" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Store</a>
                <a href="/legalitas" class="block px-4 py-2 text-gray-300 hover:text-yellow-500 hover:bg-gray-800 transition">Legalitas</a>
                <a href="{{ $linkWa }}" target="_blank" class="block px-4 py-2 mt-2 text-center bg-yellow-500 text-gray-900 font-bold rounded-full mx-4 hover:bg-yellow-400 transition">Hubungi Kami</a>
            </div>

        </div> <!-- Penutup div max-w-7xl -->
    </nav>
              

    <section id="beranda" class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 w-full h-full bg-black">
            <video autoplay loop muted playsinline class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover opacity-50">
                <source src="https://videos.pexels.com/video-files/3129957/3129957-uhd_2560_1440_25fps.mp4" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
        
        <div class="relative z-20 text-center px-4 max-w-4xl mx-auto mt-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight">
                Membawa Visimu ke <span class="text-yellow-500">Layar Kaca</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Pace Film Production spesialis penyuntingan visual, color grading, dan motion graphics. Kami merangkai cerita di setiap frame
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#portofolio" class="bg-yellow-500 text-gray-900 px-8 py-3 rounded-full font-bold text-lg hover:bg-yellow-400 transition transform hover:scale-105">
                    Lihat Karya Kami
                </a>
               <a href="{{ $linkWa }}" target="_blank" class="px-8 py-3 rounded-full font-bold border-2 border-white text-white hover:bg-white hover:text-gray-900 transition">Mari Berdiskusi</a>
                </a>
            </div>
        </div>
    </section>

   <section id="tentang" class="py-24 bg-gray-900 border-t border-gray-800 relative">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-yellow-900 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div>
                    <div class="inline-block bg-yellow-500/10 border border-yellow-500/30 text-yellow-500 px-3 py-1 rounded-full text-sm font-semibold tracking-wider mb-4">
                        TENTANG KAMI
                    </div>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                        Mengangkat Budaya,<br>Melalui <span class="text-yellow-500">Karya Visual</span>
                    </h2>
                    <p class="text-gray-300 mb-6 leading-relaxed text-justify text-lg">
                        <strong>PT Pace Film Production</strong> merupakan badan usaha yang bergerak di bidang industri kreatif dengan fokus pada produksi film, dokumenter, dan karya visual berbasis budaya lokal. Lembaga ini didirikan sebagai respons terhadap kebutuhan akan media kreatif yang mampu mengangkat, melestarikan, dan mempromosikan kekayaan budaya Indonesia, khususnya di wilayah Papua, ke tingkat nasional maupun internasional.
                    </p>
                    <div class="bg-gray-800/50 border-l-4 border-yellow-500 p-5 rounded-r-lg">
                        <p class="text-gray-400 italic text-sm md:text-base leading-relaxed">
                            "Profil ini disusun sebagai gambaran umum mengenai keberadaan dan kiprah PT Pace Film Production dalam mendukung pemajuan kebudayaan melalui industri kreatif berbasis film. Besar harapan kami dapat menjalin kerja sama strategis dengan berbagai pihak dalam rangka pelestarian dan pengembangan budaya Indonesia."
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 md:p-10 rounded-3xl shadow-2xl border border-gray-700 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <svg class="w-32 h-32 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>

                    <div class="mb-10 relative z-10">
                        <h3 class="text-2xl font-bold text-yellow-500 mb-4 flex items-center tracking-wide">
                            <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            VISI
                        </h3>
                        <p class="text-gray-200 text-lg leading-relaxed">Menjadi perusahaan kreatif terdepan dalam produksi film berbasis budaya lokal yang berdaya saing nasional dan internasional.</p>
                    </div>

                    <div class="w-full h-px bg-gradient-to-r from-gray-700 via-gray-600 to-gray-700 mb-8"></div>

                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold text-yellow-500 mb-5 flex items-center tracking-wide">
                            <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                            MISI
                        </h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-700 text-yellow-500 font-bold mr-4">1</span>
                                <span>Mengangkat nilai-nilai budaya lokal melalui karya film berkualitas.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-700 text-yellow-500 font-bold mr-4">2</span>
                                <span>Mendukung pelestarian bahasa dan tradisi melalui media audio visual.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-700 text-yellow-500 font-bold mr-4">3</span>
                                <span>Mendorong pertumbuhan industri kreatif berbasis kearifan lokal.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-gray-700 text-yellow-500 font-bold mr-4">4</span>
                                <span>Membangun jejaring kerja sama dengan pemerintah, komunitas, dan lembaga nasional maupun internasional.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-24 pt-12 border-t border-gray-800">
                <div class="text-center mb-10">
                    <h3 class="text-xl font-bold text-gray-400 uppercase tracking-widest">Legalitas & Kepercayaan</h3>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 hover:opacity-100 transition duration-500">
                    
                    <div class="flex flex-col items-center group">
                        <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-3 group-hover:bg-yellow-500/20 transition">
                            <svg class="w-8 h-8 text-gray-400 group-hover:text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400">Terdaftar Resmi PT</span>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-3 group-hover:bg-yellow-500/20 transition">
                            <svg class="w-8 h-8 text-gray-400 group-hover:text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400">Lisensi Usaha NIB</span>
                    </div>

                </div>
            </div>

            <div class="mt-12 text-center">
        <a href="/legalitas" class="inline-flex items-center text-yellow-500 font-bold hover:text-white transition">
            Lihat Berkas Legalitas & Penghargaan Lengkap 
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>

        </div>
    </section>

    <section id="layanan" class="py-24 bg-gray-950 relative border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <div class="inline-block bg-yellow-500/10 border border-yellow-500/30 text-yellow-500 px-3 py-1 rounded-full text-sm font-semibold tracking-wider mb-4">
                    SPESIALISASI KAMI
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-white">
                    Layanan <span class="text-yellow-500">Profesional</span>
                </h2>
                <p class="mt-4 text-gray-400 max-w-2xl mx-auto text-lg">
                    Kami menghadirkan kualitas visual dan audio standar industri untuk setiap proyek kreatif Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                
                <div class="bg-gray-900 border border-gray-800 p-6 md:p-8 rounded-2xl hover:border-yellow-500 hover:-translate-y-2 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-gray-800 group-hover:bg-yellow-500 rounded-lg flex items-center justify-center mb-6 transition duration-300">
                        <svg class="w-7 h-7 text-yellow-500 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Video Editing</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Pemotongan presisi, ritme visual yang pas, dan penceritaan yang kuat untuk Iklan, Dokumenter, maupun Film Pendek.</p>
                </div>

                <div class="bg-gray-900 border border-gray-800 p-6 md:p-8 rounded-2xl hover:border-yellow-500 hover:-translate-y-2 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-gray-800 group-hover:bg-yellow-500 rounded-lg flex items-center justify-center mb-6 transition duration-300">
                        <svg class="w-7 h-7 text-yellow-500 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Color Grading</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Memberikan nyawa dan *mood* sinematik pada *footage* Anda dengan koreksi warna berstandar industri film.</p>
                </div>

                <div class="bg-gray-900 border border-gray-800 p-6 md:p-8 rounded-2xl hover:border-yellow-500 hover:-translate-y-2 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-gray-800 group-hover:bg-yellow-500 rounded-lg flex items-center justify-center mb-6 transition duration-300">
                        <svg class="w-7 h-7 text-yellow-500 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Motion Graphics</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Animasi logo, tipografi dinamis, dan elemen visual tambahan untuk memperkaya penyampaian pesan video Anda.</p>
                </div>

                <div class="bg-gray-900 border border-gray-800 p-6 md:p-8 rounded-2xl hover:border-yellow-500 hover:-translate-y-2 transition duration-300 group shadow-lg">
                    <div class="w-14 h-14 bg-gray-800 group-hover:bg-yellow-500 rounded-lg flex items-center justify-center mb-6 transition duration-300">
                        <svg class="w-7 h-7 text-yellow-500 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Sound Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Penyelarasan audio, *mixing*, dan *foley* untuk menciptakan pengalaman yang imersif di telinga penonton.</p>
                </div>
            </div>

            {{--  Untuk sementara bagian ini di blok dulu
            <div class="mt-20 border-t border-gray-800 pt-10 text-center">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-widest mb-8">Didukung oleh Software Standar Industri</p>
                <div class="flex flex-wrap justify-center items-center gap-6 md:gap-16 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition duration-500 cursor-default">
                    <div class="flex items-center space-x-2 text-xl md:text-2xl font-bold font-sans tracking-tight">
                        <span class="text-[#9999FF] bg-[#00005C] px-2 py-1 rounded">Pr</span> <span class="hidden sm:inline">Premiere Pro</span>
                    </div>
                    <div class="flex items-center space-x-2 text-xl md:text-2xl font-bold font-sans tracking-tight">
                        <span class="text-[#9999FF] bg-[#00005C] px-2 py-1 rounded">Ae</span> <span class="hidden sm:inline">After Effects</span>
                    </div>
                    <div class="flex items-center space-x-2 text-xl md:text-2xl font-bold font-sans tracking-tight">
                        <span class="text-white">DaVinci <span class="text-gray-400 font-light">Resolve</span></span>
                    </div>
                </div>
            </div>

            --}}

        </div>
    </section>

    <!-- Header & Filter Portofolio -->
        <section id="portofolio" class="py-24 bg-gray-950 relative border-t border-gray-800">

            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <div class="inline-block bg-yellow-500/10 border border-yellow-500/30 text-yellow-500 px-3 py-1 rounded-full text-sm font-semibold tracking-wider mb-4">
                        SHOWCASE
                    </div>
                    <h2 class="text-3xl md:text-5xl font-bold text-white">
                        Karya <span class="text-yellow-500">Terbaik</span> Kami
                    </h2>
                </div>
                
                <!-- Tombol Filter Kategori -->
                <div class="mt-6 md:mt-0 flex flex-wrap gap-2" id="filter-buttons">
                    <button onclick="filterPortfolio('all', this)" class="filter-btn px-5 py-2 rounded-full bg-yellow-500 text-gray-900 font-bold text-sm transition">Semua</button>
                    <button onclick="filterPortfolio('music video', this)" class="filter-btn px-5 py-2 rounded-full border border-gray-700 text-gray-300 font-medium text-sm hover:border-yellow-500 hover:text-yellow-500 transition">Music Video</button>
                    <button onclick="filterPortfolio('commercial', this)" class="filter-btn px-5 py-2 rounded-full border border-gray-700 text-gray-300 font-medium text-sm hover:border-yellow-500 hover:text-yellow-500 transition">Commercial</button>
                    <button onclick="filterPortfolio('dokumenter', this)" class="filter-btn px-5 py-2 rounded-full border border-gray-700 text-gray-300 font-medium text-sm hover:border-yellow-500 hover:text-yellow-500 transition">Dokumenter</button>
                </div>
            </div>

            <!-- Grid Portofolio -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                
                @foreach ($portofolios as $video)
                    <!-- Tambahkan class 'portfolio-item' dan atribut 'data-category' -->
                    <div class="portfolio-item bg-gray-800 rounded-2xl overflow-hidden shadow-xl border border-gray-700 group hover:border-yellow-500 transition duration-300" data-category="{{ strtolower($video->category) }}">
                        <!-- Video Embed Container (Rasio 16:9) -->
                        <div class="relative w-full pt-[56.25%] bg-black">
                            <iframe 
                                class="absolute top-0 left-0 w-full h-full" 
                                src="{{ $video->youtube_url }}" 
                                title="{{ $video->title }}" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        
                        <!-- Info Karya -->
                        <div class="p-6">
                            <span class="text-xs font-bold text-yellow-500 uppercase tracking-wider mb-2 block">{{ $video->category }}</span>
                            <h3 class="text-xl font-bold text-white mb-2 line-clamp-2 group-hover:text-yellow-400 transition">{{ $video->title }}</h3>
                            <p class="text-gray-400 text-sm line-clamp-2">{{ $video->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Tombol CTA -->
            <div class="mt-12 text-center">
                <!-- Ubah href ke channel YouTube asli klien -->
                <a href="https://youtube.com/@PaceFilmProduction" target="_blank" class="inline-block border-2 border-yellow-500 text-yellow-500 px-8 py-3 rounded-full font-bold hover:bg-yellow-500 hover:text-gray-900 transition">
                    Jelajahi Lebih Banyak Karya
                </a>
            </div>
        </section>

         <section id="merchandise" class="py-24 bg-gray-950 border-t border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <div class="inline-block bg-yellow-500/10 border border-yellow-500/30 text-yellow-500 px-3 py-1 rounded-full text-sm font-semibold tracking-wider mb-4">
                    OFFICIAL STORE
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-white">
                    Merchandise <span class="text-yellow-500">Pace Film Production</span>
                </h2>
                <p class="mt-4 text-gray-400 max-w-2xl mx-auto text-lg">
                    Dukung karya dan pergerakan kami dengan mengoleksi merchandise resmi yang eksklusif.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                @foreach ($products as $baju)
                    <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg border border-gray-800 flex flex-col group hover:border-yellow-500 transition duration-300">
                        
                        <div class="relative pt-[100%] bg-gray-800 flex items-center justify-center overflow-hidden">
                            <!-- Menampilkan Gambar Produk -->
                              
                            <!-- Menampilkan Gambar Produk -->
                            <img src="{{ $baju->image ? asset('images/' . $baju->image) : 'https://via.placeholder.com/500x500/1f2937/fbbf24?text=Foto+Produk' }}" alt="{{ $baju->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">                            
                            <div class="absolute top-4 right-4 bg-gray-900/90 backdrop-blur text-xs font-bold px-3 py-1 rounded-full border border-gray-700 text-yellow-500">
                                Stok: {{ $baju->stock }}
                            </div>
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $baju->name }}</h3>
                            <p class="text-gray-400 text-sm mb-6 flex-grow line-clamp-2">{{ $baju->description }}</p>
                            
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-yellow-500 font-bold text-2xl">Rp {{ number_format($baju->price, 0, ',', '.') }}</span>
                            </div>
                            
                            <!-- Tombol Pesan via WhatsApp -->
                            @php
                                     // Nomor WhatsApp Admin Pace Film (Ganti dengan nomor aslimu/klien. Wajib diawali 62, bukan 0)
                                     $nomorWa = '6282197562528'; 
                                
                                     // Teks yang akan otomatis terketik di HP pembeli
                                      $pesanOtomatis = "Halo Pace Film, saya tertarik untuk memesan merchandise: *" . $baju->name . "*. Apakah stoknya masih tersedia?";
                                
                                // Mengubah teks menjadi format URL yang aman
                                $linkWhatsApp = "https://wa.me/" . $nomorWa . "?text=" . urlencode($pesanOtomatis);
                            @endphp

                            <a href="{{ $linkWhatsApp }}" target="_blank" class="w-full block text-center bg-transparent border-2 border-yellow-500 text-yellow-500 py-2.5 rounded-xl font-bold hover:bg-yellow-500 hover:text-gray-900 transition mt-auto">
                                Pesan Sekarang
                            </a>
                        </div>
                        
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    {{-- 
    <section class="py-20 bg-gray-900 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-4xl font-bold text-white">Telah Dipercaya Oleh</h2>
            </div>
            
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-60 grayscale hover:grayscale-0 transition duration-500 mb-20">
                <div class="text-2xl font-bold text-gray-400 font-serif">KLIEN<span class="text-yellow-500">CORP</span></div>
                <div class="text-2xl font-bold text-gray-400 font-sans tracking-widest">BRAND<span class="font-light">CO</span></div>
                <div class="text-xl font-bold text-gray-400 uppercase border-2 border-gray-400 p-2">Suling Bali</div>
                <div class="text-2xl font-bold text-gray-400 font-mono">Agency.X</div>
            </div>

            
        </div>
    </section> 

    --}}

    <footer id="kontak" class="bg-gray-950 pt-20 pb-10 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                
                <div class="lg:col-span-2">
                    <div class="font-bold text-3xl text-yellow-500 tracking-wider mb-6">PACE FILM PRODUCTION</div>
                    <p class="text-gray-400 mb-8 max-w-md">
                        Menceritakan kisah melalui lensa. Kami adalah Pace Film production yang berdedikasi tinggi pada kualitas visual dan pelestarian budaya.
                    </p>

                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/pacefilm_/" class="w-10 h-10 bg-gray-800 hover:bg-yellow-500 hover:text-gray-900 rounded-full flex items-center justify-center text-gray-400 transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://web.facebook.com/pacefilm?_rdc=1&_rdr#" class="w-10 h-10 bg-gray-800 hover:bg-yellow-500 hover:text-gray-900 rounded-full flex items-center justify-center text-gray-400 transition">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://www.tiktok.com/@achoansanay" class="w-10 h-10 bg-gray-800 hover:bg-yellow-500 hover:text-gray-900 rounded-full flex items-center justify-center text-gray-400 transition">
                            <span class="sr-only">TikTok</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@pacefilmproduction" class="w-10 h-10 bg-gray-800 hover:bg-yellow-500 hover:text-gray-900 rounded-full flex items-center justify-center text-gray-400 transition">
                            <span class="sr-only">YouTube</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 01-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 01-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 011.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418zM15.194 12L10 15V9l5.１９４ 3z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide">Navigasi</h4>
                    <ul class="space-y-3">
                        <li><a href="#beranda" class="text-gray-400 hover:text-yellow-500 transition">Beranda</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-yellow-500 transition">Tentang Kami</a></li>
                        <li><a href="#layanan" class="text-gray-400 hover:text-yellow-500 transition">Layanan</a></li>
                        <li><a href="#portofolio" class="text-gray-400 hover:text-yellow-500 transition">Portofolio</a></li>
                        <li><a href="#merchandise" class="text-gray-400 hover:text-yellow-500 transition">Merchandise</a></li>
                        <li><a href="/legalitas" class="text-gray-400 hover:text-yellow-500 transition">Legalitas</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide">Hubungi Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-gray-400">Jl. Kri Macan Tutul Dok V Atas Jayapura, Indonesia-099114</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:pacefilm@gmail.com" class="text-gray-400 hover:text-yellow-500 transition">pacefilm@gmail.com</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span class="text-gray-400">+62 821-9756-2528</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2026 PT. Pace Film Production. All rights reserved.</p>
                <div class="mt-4 md:mt-0 space-x-4">
                    <a href="#" class="hover:text-yellow-500 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-yellow-500 transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Fungsi untuk Filter Portofolio
        function filterPortfolio(category, clickedButton) {
            const items = document.querySelectorAll('.portfolio-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // 1. Reset semua tombol menjadi abu-abu transparan
            buttons.forEach(btn => {
                btn.className = "filter-btn px-5 py-2 rounded-full border border-gray-700 text-gray-300 font-medium text-sm hover:border-yellow-500 hover:text-yellow-500 transition";
            });

            // 2. Jadikan tombol yang diklik menjadi warna kuning (aktif)
            clickedButton.className = "filter-btn px-5 py-2 rounded-full bg-yellow-500 text-gray-900 font-bold text-sm transition";

            // 3. Tampilkan/Sembunyikan kotak video berdasarkan kategorinya
            items.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if(category === 'all' || itemCategory === category) {
                    // Animasi sederhana saat muncul
                    item.style.display = 'block';
                    setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';
                    setTimeout(() => { item.style.display = 'none'; }, 300);
                }
            });
        }
    </script>

    <script>
        // Script untuk Toggle Hamburger Menu HP
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>