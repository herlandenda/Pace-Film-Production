<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pace Film Production | Rumah Produksi Video & Film di Jayapura</title>
    <meta name="description" content="Pace Film Production: company profile, iklan, film dokumenter, dan music video dari Jayapura, Papua.">

    <link rel="icon" href="{{ asset('images/logo-pace-film.png') }}" type="image/png">

    <!-- Font: Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Manrope', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        dasar:   '#FFFFFF',  // latar utama
                        salju:   '#F4F5F7',  // latar section selang-seling
                        tinta:   '#12151C',  // teks utama & blok gelap
                        abu:     '#5A6171',  // teks sekunder
                        garis:   '#E3E6EB',  // garis pemisah
                        emas:    '#E9B02B',  // aksen merek (isian tombol/blok)
                        emastua: '#9A6700',  // aksen merek untuk teks di latar putih
                    }
                }
            }
        }
    </script>

    <style>
        body { background: #FFFFFF; color: #12151C; font-feature-settings: "ss01", "cv11"; }
        h1, h2, h3 { letter-spacing: -0.025em; }

        /* Satu momen animasi: pembuka hero */
        .rise-wrap { display: block; overflow: hidden; padding-bottom: .1em; }
        .rise { display: block; transform: translateY(105%); animation: rise .9s cubic-bezier(.2,.7,.2,1) forwards; }
        .rise.d1 { animation-delay: .1s; }
        .rise.d2 { animation-delay: .25s; }
        .fade-in { opacity: 0; animation: fadeIn .9s ease forwards; animation-delay: .65s; }
        .hero-img { transform: scale(1.06); animation: settle 2.2s cubic-bezier(.2,.7,.2,1) forwards; }
        @keyframes rise { to { transform: translateY(0); } }
        @keyframes fadeIn { to { opacity: 1; } }
        @keyframes settle { to { transform: scale(1); } }

        /* Navbar: putih di atas foto hero, lalu solid putih saat di-scroll */
        #navbar { color: #FFFFFF; border-bottom: 1px solid transparent; transition: background-color .3s ease, color .3s ease, border-color .3s ease; }
        #navbar.is-solid { color: #12151C; background: rgba(255,255,255,.94); backdrop-filter: blur(10px); border-bottom-color: #E3E6EB; }
        /* Link navbar: garis emas meluncur dari kiri + sedikit terangkat saat disentuh */
        .nav-link { position: relative; padding: 6px 0; opacity: .85; transition: opacity .2s ease, transform .25s cubic-bezier(.2,.7,.2,1); }
        .nav-link::after { content: ""; position: absolute; left: 0; right: 0; bottom: 0; height: 2px; background: #E9B02B; transform: scaleX(0); transform-origin: left; transition: transform .3s cubic-bezier(.2,.7,.2,1); }
        .nav-link:hover, .nav-link:focus-visible, .nav-link:active { opacity: 1; transform: translateY(-2px); }
        .nav-link:hover::after, .nav-link:focus-visible::after, .nav-link:active::after { transform: scaleX(1); }

        /* Tombol konsultasi: terisi emas, terangkat, bersinar; menekan saat diklik */
        .nav-cta { border: 1px solid currentColor; transition: background-color .25s ease, color .25s ease, border-color .25s ease, transform .25s cubic-bezier(.2,.7,.2,1), box-shadow .25s ease; }
        .nav-cta:hover, .nav-cta:focus-visible { background: #E9B02B; border-color: #E9B02B; color: #12151C; transform: translateY(-2px); box-shadow: 0 10px 22px -10px rgba(233,176,43,.9); }
        .nav-cta:active { transform: translateY(0) scale(.96); box-shadow: none; }

        /* Logo dan tombol menu */
        .nav-logo img { transition: transform .35s cubic-bezier(.2,.7,.2,1); }
        .nav-logo:hover img, .nav-logo:active img { transform: scale(1.07) rotate(-2deg); }
        .nav-icon { border-radius: 9999px; transition: transform .2s ease, background-color .2s ease; }
        .nav-icon:hover { background: rgba(127,127,127,.18); }
        .nav-icon:active { transform: scale(.86); }

        /* Menu mobile: link bergeser ke kanan saat disentuh */
        .mobile-link { display: inline-block; transition: transform .25s cubic-bezier(.2,.7,.2,1), color .2s ease; }
        .mobile-link:hover, .mobile-link:active { transform: translateX(10px); color: #9A6700; }

        /* Filter portofolio */
        .filter-btn { color: #5A6171; padding-bottom: 6px; border-bottom: 2px solid transparent; transition: color .2s, border-color .2s; font-weight: 500; }
        .filter-btn:hover { color: #12151C; }
        .filter-btn.is-active { color: #12151C; border-bottom-color: #E9B02B; font-weight: 700; }

        /* Foto latar: zoom pelan saat section terlihat + tirai (wipe) untuk foto Tentang */
        .kenburns { transform: scale(1.14); transition: transform 9s cubic-bezier(.2,.6,.2,1); }
        [data-reveal].in-view .kenburns { transform: scale(1); }
        .wipe { clip-path: inset(0 100% 0 0); transition: clip-path 1.5s cubic-bezier(.7,0,.2,1); }
        [data-reveal].in-view .wipe { clip-path: inset(0 0 0 0); }

        :focus-visible { outline: 2px solid #9A6700; outline-offset: 3px; }

        @media (prefers-reduced-motion: reduce) {
            .rise, .fade-in, .hero-img { animation: none !important; transform: none !important; opacity: 1 !important; }
            .kenburns { transform: none !important; transition: none !important; }
            .wipe { clip-path: none !important; transition: none !important; }
            html { scroll-behavior: auto !important; }
        }
    </style>
</head>
<body class="bg-dasar text-tinta font-sans antialiased selection:bg-emas selection:text-tinta">

    @php
        $waAdmin = '6282197562528';
        $pesanAdmin = 'Halo Pace Film Production, saya tertarik untuk mendiskusikan project video production. Bisa minta informasinya?';
        $linkWa = 'https://wa.me/' . $waAdmin . '?text=' . urlencode($pesanAdmin);

        /*
         * FOTO LATAR SECTION LAYANAN & TENTANG
         * Untuk demo: foto dari Unsplash (gratis dipakai, lisensi Unsplash).
         *   Layanan : Jakob Owens, unsplash.com/photos/xKfS7Hll0Ck
         *   Tentang : Cemrecan Yurtman, unsplash.com/photos/UGle_evFpow
         * Untuk foto asli klien, cukup simpan di public/images/foto-layanan.jpg dan
         * public/images/foto-tentang.jpg, maka otomatis menggantikan foto demo ini.
         */
        $fotoLayanan = file_exists(public_path('images/foto-layanan.jpg'))
            ? asset('images/foto-layanan.jpg')
            : 'https://images.unsplash.com/photo-1632187981988-40f3cbaeef5e?auto=format&fit=crop&w=2000&q=80';
        $fotoTentang = file_exists(public_path('images/foto-tentang.jpg'))
            ? asset('images/foto-tentang.jpg')
            : 'https://images.unsplash.com/photo-1781127445118-8140677fdea1?auto=format&fit=crop&w=1600&q=80';
    @endphp

    <!-- ================= NAVBAR ================= -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex justify-between items-center h-20">

                <a href="#beranda" class="nav-logo flex items-center gap-3">
                    <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-12 md:h-14 w-auto">
                    <span class="text-lg sm:text-xl leading-none tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
                </a>

                <div class="hidden lg:flex items-center gap-9 text-sm font-medium">
                    <a href="#beranda" class="nav-link">Beranda</a>
                    <a href="#portofolio" class="nav-link">Portofolio</a>
                    <a href="#layanan" class="nav-link">Layanan</a>
                    <a href="#tentang" class="nav-link">Tentang</a>
                    <a href="#kontak" class="nav-link">Kontak</a>
                    <a href="#merchandise" class="nav-link">Store</a>
                    <a href="/legalitas" class="nav-link">Legalitas</a>
                </div>

                <div class="hidden lg:block">
                    <a href="{{ $linkWa }}" target="_blank" rel="noopener" class="nav-cta inline-block rounded-full px-6 py-2.5 text-sm font-semibold">
                        Konsultasi proyek
                    </a>
                </div>

                <button id="mobile-menu-btn" class="nav-icon lg:hidden p-2 -mr-2" aria-label="Buka menu" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-width="1.75" d="M4 8h16M4 16h16"/></svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Menu mobile layar penuh -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-[60] bg-dasar text-tinta px-5 sm:px-8 pt-6 pb-10 flex-col">
        <div class="flex justify-between items-center h-14">
            <span class="text-lg tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
            <button id="mobile-close-btn" class="nav-icon p-2 -mr-2" aria-label="Tutup menu">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-width="1.75" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </div>
        <div class="mt-10 flex flex-col gap-5 text-3xl font-bold tracking-tight">
            <a href="#beranda" class="mobile-link">Beranda</a>
            <a href="#portofolio" class="mobile-link">Portofolio</a>
            <a href="#layanan" class="mobile-link">Layanan</a>
            <a href="#tentang" class="mobile-link">Tentang</a>
            <a href="#kontak" class="mobile-link">Kontak</a>
            <a href="#merchandise" class="mobile-link">Store</a>
            <a href="/legalitas" class="mobile-link">Legalitas</a>
        </div>
        <a href="{{ $linkWa }}" target="_blank" rel="noopener" class="mt-auto inline-block text-center rounded-full bg-emas text-tinta font-bold py-3.5 transition-transform active:scale-95">Konsultasi proyek</a>
    </div>


    <!-- ================= HERO ================= -->
<header id="beranda" class="relative min-h-[100svh] flex items-end overflow-hidden bg-tinta text-white">
    
    <!-- Container Slider (4 Foto Crossfade) -->
    <div class="absolute inset-0 z-0">
        @php
            $heroSlides = [
                file_exists(public_path('images/banner-1.jpg')) ? asset('images/banner-1.jpg') : 'https://images.unsplash.com/photo-1485846234645-a62644f84728?auto=format&fit=crop&w=2000&q=80',
                file_exists(public_path('images/banner-2.jpg')) ? asset('images/banner-2.jpg') : 'https://images.unsplash.com/photo-1579632652768-6cb9dcf85912?auto=format&fit=crop&w=2000&q=80',
                file_exists(public_path('images/banner-3.jpg')) ? asset('images/banner-3.jpg') : 'https://images.unsplash.com/photo-1518173946687-a4c8a383392e?auto=format&fit=crop&w=2000&q=80',
                file_exists(public_path('images/banner-4.jpg')) ? asset('images/banner-4.jpg') : 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=2000&q=80',
            ];
        @endphp

        @foreach($heroSlides as $index => $slideImg)
            <img src="{{ $slideImg }}" 
                 alt="Kru produksi Pace Film {{ $index + 1 }}" 
                 class="hero-slide-img absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
        @endforeach
    </div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-tinta/95 via-tinta/60 to-tinta/45 z-10"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-tinta/70 via-tinta/20 to-transparent z-10"></div>

    <div class="relative z-20 w-full max-w-7xl mx-auto px-5 sm:px-8 pb-14 md:pb-20 pt-40">
        <h1 class="text-[clamp(2.5rem,6.5vw,5.5rem)] font-extrabold leading-[1.02] max-w-4xl">
            <span class="rise-wrap"><span class="rise d1">Cerita dari Papua,</span></span>
            <span class="rise-wrap"><span class="rise d2">digarap dengan standar sinema.</span></span>
        </h1>

        <div class="fade-in mt-9 flex flex-col md:flex-row md:items-end md:justify-between gap-8">
            <div class="max-w-md">
                <p class="text-base md:text-lg text-white/85 leading-relaxed">
                    Company profile, iklan, dokumenter, dan music video. Kami kerjakan dari ide sampai file master.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="#portofolio" class="rounded-full bg-emas text-tinta px-7 py-3 text-sm font-bold hover:bg-white transition-colors">Lihat portofolio</a>
                    <a href="{{ $linkWa }}" target="_blank" rel="noopener" class="rounded-full border border-white/50 px-7 py-3 text-sm font-semibold hover:bg-white hover:text-tinta transition-colors">Hubungi tim produksi</a>
                </div>
            </div>
            
            <div class="flex flex-col md:items-end gap-3">
                <!-- Indikator Slide 4 Garis Halus -->
                <div class="flex items-center gap-1.5 mb-1">
                    @foreach($heroSlides as $i => $s)
                        <button type="button" onclick="changeHeroSlide({{ $i }})" class="hero-dot h-1 rounded-full transition-all duration-300 {{ $i === 0 ? 'w-8 bg-emas' : 'w-4 bg-white/40' }}" aria-label="Slide {{ $i + 1 }}"></button>
                    @endforeach
                </div>
                <p class="text-sm text-white/70 md:text-right leading-relaxed">
                    Berbasis di Jayapura, Papua<br>
                    Produksi 4K UHD
                </p>
            </div>
        </div>
    </div>
</header>


    <!-- ================= PORTOFOLIO ================= -->
    <section id="portofolio" class="py-24 md:py-32 bg-dasar">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">

            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-14">
                <div>
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">Karya kami</h2>
                    <p class="mt-3 text-abu max-w-md leading-relaxed">Video yang sudah kami produksi untuk klien dan kolaborator.</p>
                </div>

                <div class="flex flex-wrap gap-x-7 gap-y-2 text-sm" id="filter-buttons">
                    <button onclick="filterPortfolio('all', this)" class="filter-btn is-active">Semua</button>
                    <button onclick="filterPortfolio('music video', this)" class="filter-btn">Music Video</button>
                    <button onclick="filterPortfolio('commercial', this)" class="filter-btn">Commercial</button>
                    <button onclick="filterPortfolio('dokumenter', this)" class="filter-btn">Dokumenter</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-7 gap-y-14" id="portfolio-grid">
                @foreach ($portofolios as $video)
                    @php
                        $rawUrl = $video->youtube_url;
                        $videoId = '';
                        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/', $rawUrl, $matches)) {
                            $videoId = $matches[1];
                        }
                        $thumbUrl = $videoId ? "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg" : asset('images/logo-pace-film.png');
                    @endphp

                    <article class="portfolio-item group" data-category="{{ strtolower($video->category) }}">

                        <button type="button" onclick="openVideoModal('{{ $videoId }}')" class="relative block w-full aspect-video overflow-hidden rounded-md bg-tinta text-left" aria-label="Putar video {{ $video->title }}">
                            <img src="{{ $thumbUrl }}" alt="{{ $video->title }}" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">
                            <span class="absolute inset-0 bg-tinta/20 group-hover:bg-tinta/5 transition-colors"></span>
                            <span class="absolute inset-0 flex items-center justify-center">
                                <span class="w-16 h-16 rounded-full bg-white/95 text-tinta flex items-center justify-center shadow-lg transition duration-300 group-hover:scale-110 group-hover:bg-emas">
                                    <svg class="w-5 h-5 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </span>
                            </span>
                        </button>

                        <div class="mt-5">
                            <p class="text-sm font-semibold text-emastua">{{ $video->category }}</p>
                            <h3 class="mt-1 text-xl font-bold leading-snug line-clamp-2">{{ $video->title }}</h3>
                            @if($video->description)
                                <p class="mt-2 text-sm text-abu leading-relaxed line-clamp-2">{{ $video->description }}</p>
                            @endif
                            <a href="{{ $video->youtube_url }}" target="_blank" rel="noopener" class="mt-3 inline-block text-sm font-semibold border-b border-tinta/30 hover:border-emas transition-colors">Buka di YouTube</a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-16">
                <a href="https://youtube.com/@pacefilmproduction" target="_blank" rel="noopener" class="inline-block rounded-full border border-tinta/25 px-8 py-3 text-sm font-semibold hover:bg-tinta hover:text-white transition-colors">
                    Lihat semua karya di YouTube
                </a>
            </div>
        </div>
    </section>


    <!-- ================= LAYANAN (FOTO SEBAGAI LATAR) ================= -->
    <section id="layanan" data-reveal class="relative isolate overflow-hidden bg-tinta text-white py-24 md:py-32">
        <div class="absolute inset-0 -z-10" aria-hidden="true">
            <div data-parallax="0.12" class="absolute inset-x-0 -top-[12%] h-[124%] will-change-transform">
                <img src="{{ $fotoLayanan }}" alt="" class="kenburns w-full h-full object-cover">
            </div>
            <!-- Lapisan gelap agar teks tetap jelas di atas foto -->
            <div class="absolute inset-0 bg-gradient-to-r from-tinta/95 via-tinta/80 to-tinta/65"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-4">
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">Layanan</h2>
                    <p class="mt-3 text-white/70 max-w-xs leading-relaxed">Dari pra-produksi sampai pasca-produksi, satu tim yang menangani semuanya.</p>
                </div>

                <div class="lg:col-span-8 border-t border-white/20">
                    <div class="group grid grid-cols-1 md:grid-cols-5 gap-3 md:gap-8 py-8 border-b border-white/20">
                        <h3 class="md:col-span-2 text-2xl font-bold group-hover:text-emas transition-colors">Company profile</h3>
                        <p class="md:col-span-3 text-white/75 leading-relaxed">Video yang membangun citra dan reputasi perusahaan di mata investor, mitra, dan calon klien.</p>
                    </div>
                    <div class="group grid grid-cols-1 md:grid-cols-5 gap-3 md:gap-8 py-8 border-b border-white/20">
                        <h3 class="md:col-span-2 text-2xl font-bold group-hover:text-emas transition-colors">Film dan dokumenter</h3>
                        <p class="md:col-span-3 text-white/75 leading-relaxed">Film cerita, dokumenter, dan peliputan budaya dengan riset mendalam dan narasi sinematik.</p>
                    </div>
                    <div class="group grid grid-cols-1 md:grid-cols-5 gap-3 md:gap-8 py-8 border-b border-white/20">
                        <h3 class="md:col-span-2 text-2xl font-bold group-hover:text-emas transition-colors">Music video</h3>
                        <p class="md:col-span-3 text-white/75 leading-relaxed">Konsep visual, koreografi kamera, dan pencahayaan artistik untuk musisi dan label rekaman.</p>
                    </div>
                    <div class="group grid grid-cols-1 md:grid-cols-5 gap-3 md:gap-8 py-8 border-b border-white/20">
                        <h3 class="md:col-span-2 text-2xl font-bold group-hover:text-emas transition-colors">Editing dan color grading</h3>
                        <p class="md:col-span-3 text-white/75 leading-relaxed">Penyuntingan presisi, koreksi warna bergaya sinema, sound design, dan motion logo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ================= TENTANG (FOTO DI KIRI, TEKS DI KANAN) ================= -->
    <section id="tentang" data-reveal class="bg-dasar py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

                <!-- Foto: dibatasi ukurannya, ada jarak dari section atas dan bawah -->
                <div class="lg:col-span-5">
                    <div class="wipe relative overflow-hidden rounded-md shadow-2xl shadow-tinta/15 aspect-[4/3] lg:aspect-[4/5] bg-tinta">
                        <div data-parallax="0.08" class="absolute inset-x-0 -top-[12%] h-[124%] will-change-transform">
                            <img src="{{ $fotoTentang }}" alt="Sinematografer Pace Film dengan kamera sinema" class="kenburns w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Teks -->
                <div class="lg:col-span-7">
                    <h2 class="text-3xl md:text-5xl font-extrabold leading-[1.1]">
                        Kami mengangkat budaya lokal lewat karya visual yang kuat.
                    </h2>
                    <p class="mt-6 text-abu text-lg leading-relaxed">
                        PT Pace Film Production adalah rumah produksi yang berakar pada budaya Papua dan Indonesia. Kru profesional, peralatan standar sinema, dan manajemen produksi yang tertata membuat kami siap bekerja sama dengan instansi pemerintah, BUMN, swasta, dan musisi.
                    </p>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-10 border-t border-garis pt-10">
                        <div>
                            <h3 class="text-xl font-bold">Visi</h3>
                            <p class="mt-3 text-sm text-abu leading-relaxed">
                                Menjadi perusahaan kreatif audio-visual terdepan dalam produksi film berbasis kearifan lokal, berdaya saing nasional dan internasional.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Misi</h3>
                            <ul class="mt-3 space-y-3 text-sm text-abu leading-relaxed">
                                <li class="flex gap-3"><span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-emas"></span><span>Mengangkat budaya lokal lewat film dan dokumenter bermutu.</span></li>
                                <li class="flex gap-3"><span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-emas"></span><span>Menyediakan jasa video profesional berstandar industri modern.</span></li>
                                <li class="flex gap-3"><span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-emas"></span><span>Membangun kolaborasi dengan komunitas, korporasi, dan pemerintah.</span></li>
                            </ul>
                        </div>
                    </div>

                    <p class="mt-10 text-sm text-abu">
                        Berbadan hukum, terdaftar di Kemenkumham dan memiliki NIB melalui OSS.
                        <a href="/legalitas" class="font-semibold text-tinta border-b border-emas hover:text-emastua transition-colors">Lihat dokumen legalitas</a>
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= KONTAK (CTA + INFORMASI KONTAK) ================= -->
    <section id="kontak" class="bg-tinta text-white py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-10">
                <h2 class="text-4xl md:text-6xl font-extrabold leading-[1.05] max-w-3xl">
                    Punya project video? Ceritakan idenya ke kami.
                </h2>
                <a href="{{ $linkWa }}" target="_blank" rel="noopener" class="shrink-0 self-start lg:self-auto rounded-full bg-emas text-tinta px-9 py-4 text-sm font-bold hover:bg-white transition-colors">
                    Chat via WhatsApp
                </a>
            </div>

            <div class="mt-20 pt-12 border-t border-white/15 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div>
                    <h3 class="text-sm font-bold text-emas">Alamat</h3>
                    <p class="mt-3 text-sm text-white/70 leading-relaxed">Jl. Kri Macan Tutul Dok V Atas,<br>Jayapura, Papua 99114</p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-emas">Email</h3>
                    <p class="mt-3 text-sm"><a href="mailto:pacefilm@gmail.com" class="text-white/70 hover:text-white transition-colors">pacefilm@gmail.com</a></p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-emas">WhatsApp</h3>
                    <p class="mt-3 text-sm"><a href="{{ $linkWa }}" target="_blank" rel="noopener" class="text-white/70 hover:text-white transition-colors">+62 821-9756-2528</a></p>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-emas">Media sosial</h3>
                    <ul class="mt-3 flex flex-wrap gap-x-5 gap-y-2 text-sm text-white/70">
                        <li><a href="https://www.instagram.com/pacefilm_/" target="_blank" rel="noopener" class="hover:text-white transition-colors">Instagram</a></li>
                        <li><a href="https://www.youtube.com/@pacefilmproduction" target="_blank" rel="noopener" class="hover:text-white transition-colors">YouTube</a></li>
                        <li><a href="https://www.tiktok.com/@achoansanay" target="_blank" rel="noopener" class="hover:text-white transition-colors">TikTok</a></li>
                        <li><a href="https://web.facebook.com/pacefilm" target="_blank" rel="noopener" class="hover:text-white transition-colors">Facebook</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- ================= STORE / MERCHANDISE SECTION ================= -->

    <!-- ================= STORE / MERCHANDISE SECTION ================= -->
<section id="merchandise" class="py-20 md:py-28 bg-salju border-b border-garis">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
        
        <!-- Header Section -->
        <div class="max-w-2xl mb-12">
            <p class="text-xs font-bold tracking-[0.2em] text-emastua uppercase">Official Apparel</p>
            <h2 class="mt-2 text-3xl sm:text-4xl md:text-5xl font-extrabold text-tinta">Pace Film Store</h2>
            <p class="mt-3 text-abu leading-relaxed">Pakaian dan merchandise resmi Pace Film Production.</p>
        </div>

        @php
            $listMerchandise = $merchandises ?? $merchandise ?? collect();
            $produkReady = collect($listMerchandise)->filter(function($item) {
                return isset($item->stock) && $item->stock > 0;
            });
        @endphp

        @if(count($produkReady) > 0)
            <!-- TAMPILAN 1: GRID PRODUK (JIKA SUDAH ADA KAOS YANG READY DI DASHBOARD) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($listMerchandise as $item)
                    @if(isset($item->stock) && $item->stock > 0)
                        @php
                            $pesanMerch = "Halo Pace Film, saya ingin memesan merchandise: {$item->name}. Apakah produk masih tersedia?";
                            $linkMerch = "https://wa.me/6282197562528?text=" . urlencode($pesanMerch);
                        @endphp
                        <article class="bg-white rounded-2xl border border-garis overflow-hidden flex flex-col justify-between shadow-sm group">
                            <div>
                                <div class="relative aspect-square bg-salju overflow-hidden border-b border-garis">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                    <span class="absolute top-3 left-3 bg-tinta/80 text-white text-[10px] font-bold px-2.5 py-1 rounded-full backdrop-blur-md uppercase tracking-wider">
                                        Stok: {{ $item->stock }}
                                    </span>
                                </div>
                                <div class="p-6">
                                    <h3 class="font-bold text-xl text-tinta leading-snug">{{ $item->name }}</h3>
                                    <p class="text-xs text-abu mt-2 leading-relaxed line-clamp-2">{{ $item->description ?? 'Pakaian resmi Pace Film Production.' }}</p>
                                    <div class="mt-4 pt-4 border-t border-garis flex items-center justify-between">
                                        <span class="text-lg font-extrabold text-tinta">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <a href="{{ $linkMerch }}" target="_blank" rel="noopener" class="w-full inline-block text-center rounded-xl bg-tinta hover:bg-emas hover:text-tinta text-white font-bold py-3 text-xs uppercase tracking-wider transition duration-300 shadow-sm">
                                    Pesan via WhatsApp
                                </a>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>

        @else
            <!-- TAMPILAN 2: BANNER TEASER SILHOUETTE KAOS (JIKA KAOS BELUM JADI / DOKUMEN BELUM READY) -->
            <div class="relative bg-tinta border border-tinta/80 rounded-3xl p-8 sm:p-14 text-center shadow-xl overflow-hidden max-w-4xl mx-auto text-white">
                
                <!-- Efek Glow Latar Belakang -->
                <div class="absolute -right-16 -top-16 w-64 h-64 bg-emas/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -left-16 -bottom-16 w-64 h-64 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 max-w-xl mx-auto flex flex-col items-center">
                    
                    <!-- Vector Siluet Kaos Sinematik (Menggambarkan Produk Baju) -->
                    <div class="relative mb-6">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-emas shadow-inner backdrop-blur-sm">
                            <!-- SVG Siluet Kaos T-Shirt Minimalis -->
                            <svg class="w-14 h-14 sm:w-16 sm:h-16 stroke-current drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H15M9 3.75L6.75 6M9 3.75C9 4.99264 10.3431 6 12 6C13.6569 6 15 4.99264 15 3.75M15 3.75L17.25 6M6.75 6L3.75 8.25L5.25 12L7.5 10.5V19.5C7.5 20.0523 7.94772 20.5 8.5 20.5H15.5C16.0523 20.5 16.5 20.0523 16.5 19.5V10.5L18.75 12L20.25 8.25L17.25 6M6.75 6H17.25" />
                            </svg>
                        </div>
                        <span class="absolute -top-2 -right-2 flex h-4 w-4">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emas opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-4 w-4 bg-emas"></span>
                        </span>
                    </div>

                    <!-- Badge Status -->
                    <span class="inline-block px-4 py-1 rounded-full text-[11px] font-extrabold bg-emas text-tinta uppercase tracking-widest mb-3 shadow-md">
                        Coming Soon
                    </span>

                    <h3 class="text-2xl sm:text-4xl font-extrabold tracking-tight">
                        Official Pace Film T-Shirt
                    </h3>
                    
                    <p class="mt-3 text-white/70 text-sm sm:text-base leading-relaxed">
                        Koleksi kaos dan merchandise resmi Pace Film Production sedang dalam tahap perancangan desain & sablon. Nantikan jadwal rilis resminya!
                    </p>

                    <!-- Tombol Kontak Tanya Jadwal -->
                    <div class="mt-8">
                        @php
                            $pesanTanya = "Halo Pace Film, saya ingin bertanya kapan kaos/merchandise resminya mulai bisa dipesan?";
                            $linkTanya = "https://wa.me/6282197562528?text=" . urlencode($pesanTanya);
                        @endphp
                        <a href="{{ $linkTanya }}" target="_blank" rel="noopener" class="inline-flex items-center space-x-2 rounded-full bg-emas text-tinta hover:bg-white font-bold px-7 py-3.5 text-xs uppercase tracking-wider transition duration-300 shadow-lg">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.985 4.468-9.985 9.986 0 2.138.673 4.119 1.821 5.74L2 22l4.41-1.808c1.558.985 3.411 1.558 5.401 1.558 5.517 0 9.985-4.468 9.985-9.986 0-5.518-4.468-9.986-9.985-9.986z"/></svg>
                            <span>Tanyakan Info Rilis via WA</span>
                        </a>
                    </div>

                </div>

            </div>
        @endif

    </div>
</section>

   <!-- ================= FOOTER ================= -->
<footer class="bg-tinta text-white mt-auto">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 py-8 flex flex-col md:grid md:grid-cols-3 items-center gap-5">
        
        <!-- Kolom Kiri: Logo Brand -->
        <div class="flex items-center gap-3 md:justify-start">
            <span class="tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
        </div>

        <!-- Kolom Tengah: Hak Cipta Persis di Tengah -->
        <div class="text-center text-xs text-white/55">
            <p>&copy; {{ date('Y') }} PT Pace Film Production. Hak cipta dilindungi.</p>
        </div>

        <!-- Kolom Kanan: Navigasi Tautan -->
        <div class="flex items-center gap-6 text-xs text-white/55 md:justify-end">
            <a href="/" class="hover:text-emas transition-colors">Beranda</a>
            <a href="/legalitas" class="text-emas transition-colors">Legalitas</a>
        </div>

    </div>
</footer>


    <!-- ================= MODAL VIDEO ================= -->
    <div id="videoModal" class="fixed inset-0 z-[100] hidden bg-black/95 items-center justify-center p-4" role="dialog" aria-modal="true" aria-label="Pemutar video">
        <button onclick="closeVideoModal()" class="absolute top-5 right-5 w-11 h-11 rounded-full border border-white/30 text-white hover:bg-emas hover:border-emas hover:text-tinta flex items-center justify-center transition-colors" aria-label="Tutup video">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-width="1.75" d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
        <div class="relative w-full max-w-5xl">
            <div class="relative pt-[56.25%] bg-black">
                <iframe id="modalIframe" class="absolute inset-0 w-full h-full" src="" title="Video Player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    
<!-- Skrip Slider Beranda (Letakkan di bahagian bawah file home.blade.php atau dalam tag <script>) -->
<script>
    let currentSlideIdx = 0;
    const heroSlides = document.querySelectorAll('.hero-slide-img');
    const heroDots = document.querySelectorAll('.hero-dot');
    let slideTimer;

    function changeHeroSlide(index) {
        heroSlides.forEach((img, i) => {
            if (i === index) {
                img.classList.remove('opacity-0', 'z-0');
                img.classList.add('opacity-100', 'z-10');
            } else {
                img.classList.remove('opacity-100', 'z-10');
                img.classList.add('opacity-0', 'z-0');
            }
        });

        heroDots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.remove('w-4', 'bg-white/40');
                dot.classList.add('w-8', 'bg-emas');
            } else {
                dot.classList.remove('w-8', 'bg-emas');
                dot.classList.add('w-4', 'bg-white/40');
            }
        });

        currentSlideIdx = index;
    }

    function autoNextSlide() {
        let nextIdx = (currentSlideIdx + 1) % heroSlides.length;
        changeHeroSlide(nextIdx);
    }

    if (heroSlides.length > 0) {
        slideTimer = setInterval(autoNextSlide, 4000); // Bertukar setiap 2 saat
    }
</script>



    <!-- ================= JAVASCRIPT ================= -->
    <script>
        // Navbar menjadi solid putih saat halaman di-scroll
        const navbar = document.getElementById('navbar');
        const onScroll = () => navbar.classList.toggle('is-solid', window.scrollY > 40);
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });

        // Efek foto latar: zoom pelan + tirai saat terlihat, parallax saat di-scroll
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        document.querySelectorAll('[data-reveal]').forEach(el => revealObserver.observe(el));

        if (!reduceMotion) {
            const parallaxEls = document.querySelectorAll('[data-parallax]');
            let ticking = false;

            const updateParallax = () => {
                parallaxEls.forEach(el => {
                    const host = el.parentElement;
                    const rect = host.getBoundingClientRect();
                    if (rect.bottom < 0 || rect.top > window.innerHeight) return;
                    const speed = parseFloat(el.dataset.parallax) || 0.1;
                    const delta = (rect.top + rect.height / 2) - (window.innerHeight / 2);
                    const limit = rect.height * 0.11;
                    const y = Math.max(-limit, Math.min(limit, -delta * speed));
                    el.style.transform = 'translate3d(0,' + y.toFixed(1) + 'px,0)';
                });
                ticking = false;
            };
            const requestParallax = () => { if (!ticking) { ticking = true; requestAnimationFrame(updateParallax); } };

            window.addEventListener('scroll', requestParallax, { passive: true });
            window.addEventListener('resize', requestParallax);
            updateParallax();
        }

        // Filter portofolio
        function filterPortfolio(category, clickedButton) {
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('is-active'));
            clickedButton.classList.add('is-active');

            document.querySelectorAll('.portfolio-item').forEach(item => {
                const match = category === 'all' || item.getAttribute('data-category') === category;
                item.style.display = match ? '' : 'none';
            });
        }

        // Modal video
        const videoModal = document.getElementById('videoModal');
        const modalIframe = document.getElementById('modalIframe');

        function openVideoModal(videoId) {
            if (!videoId) return;
            modalIframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
            videoModal.classList.remove('hidden');
            videoModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeVideoModal() {
            modalIframe.src = "";
            videoModal.classList.add('hidden');
            videoModal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        videoModal.addEventListener('click', (e) => { if (e.target === videoModal) closeVideoModal(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeVideoModal(); });

        // Menu mobile
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileClose = document.getElementById('mobile-close-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        function setMobileMenu(open) {
            mobileMenu.classList.toggle('hidden', !open);
            mobileMenu.classList.toggle('flex', open);
            mobileBtn.setAttribute('aria-expanded', open);
            document.body.style.overflow = open ? 'hidden' : '';
        }
        if (mobileBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => setMobileMenu(true));
            mobileClose.addEventListener('click', () => setMobileMenu(false));
            document.querySelectorAll('.mobile-link').forEach(l => l.addEventListener('click', () => setMobileMenu(false)));
        }
    </script>



</body>
</html>