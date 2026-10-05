<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Pace Film Production</title>
    
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
        body { background: #F4F5F7; color: #12151C; font-feature-settings: "ss01", "cv11"; }
        h1, h2, h3 { letter-spacing: -0.025em; }

        .card-hover {
            transition: transform .25s cubic-bezier(.2,.7,.2,1), box-shadow .25s ease, border-color .2s ease;
        }
        .card-hover:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px -8px rgba(18,21,28,0.08);
            border-color: #12151C;
        }

        :focus-visible { outline: 2px solid #9A6700; outline-offset: 2px; }
    </style>
</head>
<body class="bg-salju text-tinta font-sans antialiased flex h-screen overflow-hidden selection:bg-emas selection:text-tinta">

    <!-- Sidebar Kiri (Tinta Gelap Berwibawa) -->
    <aside class="w-64 bg-tinta text-white border-r border-tinta/80 flex flex-col justify-between flex-shrink-0">
        <div>
            <!-- Header Brand (Hanya Logo Gambar) -->
            <div class="h-20 flex items-center px-6 border-b border-white/10">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                    <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-10 sm:h-11 w-auto transition-transform hover:scale-105">
                </a>
            </div>

            <!-- Profil Singkat Admin -->
            <div class="px-6 py-4 border-b border-white/10 bg-white/[0.03]">
                <p class="text-[10px] font-bold text-white/40 uppercase tracking-widest">Masuk sebagai</p>
                <p class="text-sm font-extrabold text-white truncate mt-0.5">{{ Auth::user()->name ?? 'Administrator' }}</p>
            </div>

            <!-- Navigasi Menu -->
            <nav class="px-3 py-6 space-y-1 text-sm font-medium">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3.5 py-2.5 rounded-xl bg-emas text-tinta font-extrabold shadow-sm">
                    <svg class="w-5 h-5 mr-3 text-tinta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.portofolio.index') }}" class="flex items-center px-3.5 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition group">
                    <svg class="w-5 h-5 mr-3 text-white/40 group-hover:text-emas transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Portofolio Video
                </a>

                <a href="{{ route('admin.merchandise.index') }}" class="flex items-center px-3.5 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition group">
                    <svg class="w-5 h-5 mr-3 text-white/40 group-hover:text-emas transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Katalog Merchandise
                </a>

                <a href="{{ route('admin.legalitas.index') }}" class="flex items-center px-3.5 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition group">
                    <svg class="w-5 h-5 mr-3 text-white/40 group-hover:text-emas transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Legalitas & Piagam
                </a>
            </nav>
        </div>

        <!-- Tombol Logout -->
        <div class="p-4 border-t border-white/10">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-2.5 rounded-xl bg-white/5 hover:bg-rose-500/20 text-white/70 hover:text-rose-300 border border-white/10 hover:border-rose-500/30 transition text-xs font-bold uppercase tracking-wider">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    <span>Keluar Sesi</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Konten Utama Dashboard (Salju Bersih & Terang) -->
    <div class="flex-1 flex flex-col overflow-y-auto bg-salju">
        
        <!-- Header Atas (Putih Bersih) -->
        <header class="h-20 bg-dasar/90 backdrop-blur-md border-b border-garis flex items-center justify-between px-8 sticky top-0 z-30">
            <div>
                <h1 class="text-xl font-extrabold text-tinta tracking-tight">Ringkasan Sistem</h1>
                <p class="text-xs text-abu">Pusat kendali konten situs resmi Pace Film Production</p>
            </div>
            <div>
                <a href="/" target="_blank" class="inline-flex items-center space-x-2 text-xs font-bold px-4 py-2.5 rounded-full bg-tinta text-white hover:bg-emas hover:text-tinta transition duration-300 shadow-sm">
                    <span>Lihat Situs Publik</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
        </header>

        <!-- Body Dashboard -->
        <main class="p-8 space-y-8">
            
            <!-- Grid 3 Kartu Metrik Putih Kontras -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Metrik Portofolio -->
                <div class="card-hover bg-dasar border border-garis rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emastua">Total Portofolio</span>
                            <div class="w-10 h-10 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta">
                                <svg class="w-5 h-5 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline space-x-2">
                            <span class="text-4xl font-extrabold text-tinta">{{ $totalPortofolio }}</span>
                            <span class="text-xs text-abu font-medium">video ditayangkan</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-garis">
                        <a href="{{ route('admin.portofolio.index') }}" class="text-xs font-bold text-tinta border-b border-tinta/30 hover:border-emas transition-colors flex items-center justify-between">
                            <span>Kelola portofolio</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Metrik Merchandise -->
                <div class="card-hover bg-dasar border border-garis rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emastua">Katalog Merchandise</span>
                            <div class="w-10 h-10 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta">
                                <svg class="w-5 h-5 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline space-x-2">
                            <span class="text-4xl font-extrabold text-tinta">{{ $totalMerchandise }}</span>
                            <span class="text-xs text-abu font-medium">produk terdaftar</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-garis">
                        <a href="{{ route('admin.merchandise.index') }}" class="text-xs font-bold text-tinta border-b border-tinta/30 hover:border-emas transition-colors flex items-center justify-between">
                            <span>Kelola produk</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Metrik Legalitas -->
                <div class="card-hover bg-dasar border border-garis rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-emastua">Dokumen & Piagam</span>
                            <div class="w-10 h-10 rounded-xl bg-salju border border-garis flex items-center justify-center text-tinta">
                                <svg class="w-5 h-5 text-emastua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline space-x-2">
                            <span class="text-4xl font-extrabold text-tinta">{{ $totalLegalitas }}</span>
                            <span class="text-xs text-abu font-medium">berkas terunggah</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-garis">
                        <a href="{{ route('admin.legalitas.index') }}" class="text-xs font-bold text-tinta border-b border-tinta/30 hover:border-emas transition-colors flex items-center justify-between">
                            <span>Kelola berkas</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Panel Pintasan Aksi Cepat (Quick Actions) -->
            <div class="bg-dasar border border-garis rounded-2xl p-6 shadow-sm">
                <h2 class="text-xs font-bold uppercase tracking-wider text-abu mb-4">Pintasan Cepat</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <a href="{{ route('admin.portofolio.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-salju border border-garis hover:border-tinta hover:bg-white transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-emas/20 text-tinta flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-bold text-tinta">Tambah Video Baru</span>
                        </div>
                        <span class="text-abu group-hover:text-tinta transition">&rarr;</span>
                    </a>

                    <a href="{{ route('admin.merchandise.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-salju border border-garis hover:border-tinta hover:bg-white transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-emas/20 text-tinta flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-bold text-tinta">Tambah Produk Baru</span>
                        </div>
                        <span class="text-abu group-hover:text-tinta transition">&rarr;</span>
                    </a>

                    <a href="{{ route('admin.legalitas.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-salju border border-garis hover:border-tinta hover:bg-white transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-emas/20 text-tinta flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-bold text-tinta">Unggah Piagam/Legalitas</span>
                        </div>
                        <span class="text-abu group-hover:text-tinta transition">&rarr;</span>
                    </a>
                </div>
            </div>

        </main>
    </div>

</body>
</html>