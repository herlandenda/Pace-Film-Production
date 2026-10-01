<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legalitas & Penghargaan | Pace Film Production</title>
    <meta name="description" content="Dokumen legalitas badan hukum PT Pace Film Production, sertifikasi OSS, NPWP, serta piagam penghargaan resmi.">

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
                        dasar:   '#FFFFFF',
                        salju:   '#F4F5F7',
                        tinta:   '#12151C',
                        abu:     '#5A6171',
                        garis:   '#E3E6EB',
                        emas:    '#E9B02B',
                        emastua: '#9A6700',
                    }
                }
            }
        }
    </script>

    <style>
        body { background: #FFFFFF; color: #12151C; font-feature-settings: "ss01", "cv11"; }
        h1, h2, h3 { letter-spacing: -0.025em; }

        /* Navbar interaksi adaptif */
        #navbar { color: #12151C; background: rgba(255,255,255,.94); backdrop-filter: blur(10px); border-bottom: 1px solid #E3E6EB; }

        .nav-link { position: relative; padding: 6px 0; opacity: .85; transition: opacity .2s ease, transform .25s cubic-bezier(.2,.7,.2,1); }
        .nav-link::after { content: ""; position: absolute; left: 0; right: 0; bottom: 0; height: 2px; background: #E9B02B; transform: scaleX(0); transform-origin: left; transition: transform .3s cubic-bezier(.2,.7,.2,1); }
        .nav-link:hover, .nav-link:focus-visible, .nav-link:active { opacity: 1; transform: translateY(-2px); }
        .nav-link:hover::after, .nav-link:focus-visible::after, .nav-link:active::after { transform: scaleX(1); }

        .nav-cta { border: 1px solid currentColor; transition: background-color .25s ease, color .25s ease, border-color .25s ease, transform .25s cubic-bezier(.2,.7,.2,1), box-shadow .25s ease; }
        .nav-cta:hover, .nav-cta:focus-visible { background: #E9B02B; border-color: #E9B02B; color: #12151C; transform: translateY(-2px); box-shadow: 0 10px 22px -10px rgba(233,176,43,.9); }
        .nav-cta:active { transform: translateY(0) scale(.96); box-shadow: none; }

        .nav-logo img { transition: transform .35s cubic-bezier(.2,.7,.2,1); }
        .nav-logo:hover img, .nav-logo:active img { transform: scale(1.07) rotate(-2deg); }
        .nav-icon { border-radius: 9999px; transition: transform .2s ease, background-color .2s ease; }
        .nav-icon:hover { background: rgba(127,127,127,.18); }
        .nav-icon:active { transform: scale(.86); }

        .mobile-link { display: inline-block; transition: transform .25s cubic-bezier(.2,.7,.2,1), color .2s ease; }
        .mobile-link:hover, .mobile-link:active { transform: translateX(10px); color: #9A6700; }

        /* Kartu galeri sertifikat */
        .doc-frame {
            transition: transform .35s cubic-bezier(.2,.7,.2,1), box-shadow .35s ease, border-color .3s ease;
        }
        .doc-frame:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -10px rgba(18,21,28,0.12);
            border-color: #12151C;
        }

        :focus-visible { outline: 2px solid #9A6700; outline-offset: 3px; }
    </style>
</head>
<body class="bg-dasar text-tinta font-sans antialiased selection:bg-emas selection:text-tinta flex flex-col min-h-screen">

    @php
        $waAdmin = '6282197562528';
        $pesanAdmin = 'Halo Pace Film Production, saya ingin menanyakan informasi mengenai legalitas dan kerja sama project.';
        $linkWa = 'https://wa.me/' . $waAdmin . '?text=' . urlencode($pesanAdmin);

        /*
         * FOTO UNSUR PERFILMAN (CINEMATOGRAPHY & FILM GEAR)
         * Section 1: Kamera sinema & mattebox lensa industri film
         * Section 2: Director monitor & suasana set pencahayaan film
         */
        $fotoFilm1 = file_exists(public_path('images/foto-film-gear.jpg'))
            ? asset('images/foto-film-gear.jpg')
            : 'https://images.unsplash.com/photo-1579632652768-6cb9dcf85912?auto=format&fit=crop&w=2000&q=80';

        $fotoFilm2 = file_exists(public_path('images/foto-film-set.jpg'))
            ? asset('images/foto-film-set.jpg')
            : 'https://images.unsplash.com/photo-1485846234645-a62644f84728?auto=format&fit=crop&w=2000&q=80';
    @endphp

    <!-- ================= NAVBAR ================= -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="flex justify-between items-center h-20">

                <a href="/" class="nav-logo flex items-center gap-3">
                    <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-12 md:h-14 w-auto">
                    <span class="text-lg sm:text-xl leading-none tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
                </a>

                <div class="hidden lg:flex items-center gap-9 text-sm font-medium">
                    <a href="/#portofolio" class="nav-link">Portofolio</a>
                    <a href="/#layanan" class="nav-link">Layanan</a>
                    <a href="/#tentang" class="nav-link">Tentang</a>
                    <a href="/#kontak" class="nav-link">Kontak</a>
                    <a href="/#merchandise" class="nav-link">Store</a>
                    <a href="/legalitas" class="nav-link font-bold text-tinta opacity-100 after:scale-x-100">Legalitas</a>
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

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-[60] bg-dasar text-tinta px-5 sm:px-8 pt-6 pb-10 flex-col">
        <div class="flex justify-between items-center h-14">
            <span class="text-lg tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
            <button id="mobile-close-btn" class="nav-icon p-2 -mr-2" aria-label="Tutup menu">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-width="1.75" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </div>
        <div class="mt-10 flex flex-col gap-5 text-3xl font-bold tracking-tight">
            <a href="/#portofolio" class="mobile-link">Portofolio</a>
            <a href="/#layanan" class="mobile-link">Layanan</a>
            <a href="/#tentang" class="mobile-link">Tentang</a>
            <a href="/#kontak" class="mobile-link">Kontak</a>
            <a href="/#merchandise" class="mobile-link">Store</a>
            <a href="/legalitas" class="mobile-link text-emastua">Legalitas</a>
        </div>
        <a href="{{ $linkWa }}" target="_blank" rel="noopener" class="mt-auto inline-block text-center rounded-full bg-emas text-tinta font-bold py-3.5 transition-transform active:scale-95">Konsultasi proyek</a>
    </div>

    <!-- ================= SECTION 1: HEADER & DOKUMEN POKOK (LATAR BELAKANG KAMERA & LENSA SINEMA) ================= -->
    <section class="relative isolate overflow-hidden pt-36 md:pt-44 pb-24 md:pb-32 border-b border-garis">
        
        <!-- Background Image Cinema Rig + Overlay Putih Bersih -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <img src="{{ $fotoFilm1 }}" alt="Cinema Camera Rig" class="w-full h-full object-cover filter contrast-105">
            <!-- Overlay halus agar siluet kamera film terlihat di latar belakang namun teks tetap sangat terbaca -->
            <div class="absolute inset-0 bg-white/90 via-white/85 to-white/92 backdrop-blur-[2px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
            
            <!-- Judul Halaman -->
            <div class="max-w-3xl mb-16">
                <p class="text-xs font-bold tracking-[0.2em] text-emastua uppercase">Transparansi & Akuntabilitas</p>
                <h1 class="mt-3 text-4xl sm:text-5xl md:text-6xl font-extrabold leading-[1.08] text-tinta">
                    Legalitas badan hukum & penghargaan.
                </h1>
                <p class="mt-5 text-base sm:text-lg text-abu leading-relaxed">
                    Bukti komitmen profesionalisme PT Pace Film Production sebagai entitas legal resmi yang siap bekerja sama dengan instansi pemerintah, BUMN, lembaga adat, maupun korporasi swasta.
                </p>
            </div>

            <!-- Header Sub-Section Dokumen Pokok -->
            <div class="border-b border-garis pb-4 mb-10">
                <h2 class="text-2xl font-bold tracking-tight text-tinta">Dokumen Pokok Perusahaan</h2>
            </div>

            <!-- Kartu 3 Dokumen Pokok -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="p-8 rounded-xl bg-white/95 backdrop-blur-md border border-garis shadow-sm hover:border-tinta transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta mb-6 shadow-sm">
                            <svg class="w-6 h-6 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="font-extrabold text-xl text-tinta">Akta Notaris & Kemenkumham</h3>
                        <p class="text-abu text-sm mt-2 leading-relaxed">Terdaftar resmi sebagai Perseroan Terbatas (PT) dengan pengesahan dari Kementerian Hukum dan HAM RI.</p>
                    </div>
                    <span class="mt-8 inline-block text-xs font-bold text-emastua uppercase tracking-wider">Terverifikasi</span>
                </div>

                <div class="p-8 rounded-xl bg-white/95 backdrop-blur-md border border-garis shadow-sm hover:border-tinta transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta mb-6 shadow-sm">
                            <svg class="w-6 h-6 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                        </div>
                        <h3 class="font-extrabold text-xl text-tinta">NIB & Izin Usaha OSS</h3>
                        <p class="text-abu text-sm mt-2 leading-relaxed">Nomor Induk Berusaha (NIB) berbasis risiko dari sistem Online Single Submission (OSS) Republik Indonesia.</p>
                    </div>
                    <span class="mt-8 inline-block text-xs font-bold text-emastua uppercase tracking-wider">Terverifikasi</span>
                </div>

                <div class="p-8 rounded-xl bg-white/95 backdrop-blur-md border border-garis shadow-sm hover:border-tinta transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta mb-6 shadow-sm">
                            <svg class="w-6 h-6 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h3 class="font-extrabold text-xl text-tinta">NPWP Badan Usaha</h3>
                        <p class="text-abu text-sm mt-2 leading-relaxed">Nomor Pokok Wajib Pajak badan yang taat administrasi perpajakan negara untuk transaksi formal.</p>
                    </div>
                    <span class="mt-8 inline-block text-xs font-bold text-emastua uppercase tracking-wider">Terdaftar Pajak</span>
                </div>

            </div>

        </div>
    </section>


    <!-- ================= SECTION 2: PIAGAM & SERTIFIKASI RESMI (LATAR BELAKANG SUASANA SET & MONITOR FILM) ================= -->
    <section class="relative isolate overflow-hidden py-24 md:py-32">
        
        <!-- Background Image Film Set + Overlay Salju Bersih -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <img src="{{ $fotoFilm2 }}" alt="Film Set & Director Monitor" class="w-full h-full object-cover filter contrast-105">
            <!-- Overlay bernuansa warna salju (#F4F5F7) agar selaras dengan ritme halaman home -->
            <div class="absolute inset-0 bg-[#F4F5F7]/92 via-[#F4F5F7]/88 to-[#F4F5F7]/94 backdrop-blur-[2px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 sm:px-8 relative z-10">
            
            <div class="border-b border-garis pb-4 mb-10 flex flex-col sm:flex-row sm:items-end justify-between gap-2">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-tinta">Piagam & Sertifikasi Resmi</h2>
                    <p class="text-sm text-abu mt-1">Klik pada dokumen untuk melihat dalam resolusi penuh.</p>
                </div>
            </div>

            <!-- Grid Sertifikat / Piagam (Dinamis dari Database) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7">
                @forelse($legalitas as $item)
                    <article class="doc-frame group flex flex-col bg-white/95 backdrop-blur-md rounded-lg border border-garis overflow-hidden shadow-sm">
                        
                        <!-- Area Gambar Dokumen -->
                        <div class="p-3 bg-salju/80 border-b border-garis">
                            <button type="button" onclick="openModal('{{ asset('storage/' . $item->image) }}')" class="relative aspect-[3/4] bg-white rounded overflow-hidden block w-full text-left shadow-inner cursor-zoom-in" aria-label="Perbesar dokumen {{ $item->title }}">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="absolute inset-0 w-full h-full object-contain p-2 transition duration-500 group-hover:scale-105">
                                
                                <span class="absolute inset-0 bg-tinta/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <span class="w-11 h-11 rounded-full bg-white text-tinta flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <svg class="w-5 h-5 text-tinta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path></svg>
                                    </span>
                                </span>

                                @if($item->category)
                                    <span class="absolute top-2.5 left-2.5 bg-white/95 text-tinta text-[10px] font-bold px-2 py-0.5 rounded border border-garis uppercase tracking-wider shadow-sm">
                                        {{ $item->category }}
                                    </span>
                                @endif
                            </button>
                        </div>

                        <!-- Keterangan Dokumen -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-base text-tinta leading-snug line-clamp-2">{{ $item->title }}</h3>
                                @if($item->description)
                                    <p class="text-xs text-abu mt-2 leading-relaxed line-clamp-2 font-normal">{{ $item->description }}</p>
                                @endif
                            </div>
                            <div class="mt-4 pt-3 border-t border-garis">
                                <button type="button" onclick="openModal('{{ asset('storage/' . $item->image) }}')" class="text-xs font-semibold text-tinta border-b border-tinta/30 hover:border-emas transition-colors">
                                    Perbesar berkas &rarr;
                                </button>
                            </div>
                        </div>

                    </article>
                @empty
                    <div class="col-span-full py-16 text-center text-abu bg-white/80 rounded-lg border border-garis">
                        Belum ada berkas sertifikat atau piagam yang diunggah.
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-tinta text-white mt-auto">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 py-8 flex flex-col md:flex-row md:items-center md:justify-between gap-5">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-8 w-auto">
                <span class="tracking-tight"><span class="font-extrabold">Pace Film</span> <span class="font-normal">Production</span></span>
            </div>
            <div class="flex flex-col md:flex-row md:items-center gap-3 md:gap-8 text-xs text-white/55">
                <p>&copy; {{ date('Y') }} PT Pace Film Production. Hak cipta dilindungi.</p>
                <div class="flex gap-6">
                    <a href="/" class="hover:text-emas transition-colors">Beranda</a>
                    <a href="/legalitas" class="text-emas transition-colors">Legalitas</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= MODAL PRATINJAU DOKUMEN ================= -->
    <div id="imageModal" class="fixed inset-0 z-[100] hidden bg-tinta/95 backdrop-blur-md justify-center items-center p-4 transition-opacity duration-300 opacity-0" role="dialog" aria-modal="true" aria-label="Pratinjau berkas" onclick="closeModal()">
        <button onclick="closeModal()" class="absolute top-5 right-5 w-11 h-11 rounded-full border border-white/30 text-white hover:bg-emas hover:border-emas hover:text-tinta flex items-center justify-center transition-colors" aria-label="Tutup pratinjau">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-width="1.75" d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
        <img id="modalImage" src="" alt="Pratinjau Dokumen" class="max-w-full max-h-[88vh] object-contain rounded-md shadow-2xl transform scale-95 transition-transform duration-300" onclick="event.stopPropagation()">
    </div>

    <!-- ================= JAVASCRIPT ================= -->
    <script>
        // Modal Zoom Gambar
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');

        function openModal(imageSrc) {
            modalImg.src = imageSrc;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 250);
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        // Menu Mobile
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