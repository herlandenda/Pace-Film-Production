<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Pace Film Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased flex h-screen overflow-hidden">

    <!-- Sidebar Kiri -->
    <aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col justify-between flex-shrink-0">
        <div>
            <!-- Header Brand -->
            <div class="h-20 flex items-center px-6 border-b border-slate-800/80">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-tr from-amber-500 to-yellow-300 flex items-center justify-center font-extrabold text-slate-950 text-base shadow-lg shadow-amber-500/20">
                        PF
                    </div>
                    <div>
                        <span class="text-sm font-bold tracking-wider text-white block">PACE FILM</span>
                        <span class="text-[10px] uppercase font-semibold text-amber-500 tracking-widest">Workspace</span>
                    </div>
                </div>
            </div>

            <!-- Profil Singkat -->
            <div class="px-6 py-4 border-b border-slate-800/60 bg-slate-900/40">
                <p class="text-xs text-slate-400">Masuk sebagai</p>
                <p class="text-sm font-semibold text-slate-200 truncate">{{ Auth::user()->name ?? 'Administrator' }}</p>
            </div>

            <!-- Navigasi Menu -->
            <nav class="px-3 py-6 space-y-1.5 text-sm font-medium">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.portofolio.index') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Portofolio Video
                </a>

                <a href="{{ route('admin.merchandise.index') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Katalog Merchandise
                </a>

                <a href="{{ route('admin.legalitas.index') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Legalitas & Piagam
                </a>
            </nav>
        </div>

        <!-- Tombol Logout -->
        <div class="p-4 border-t border-slate-800">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-2.5 rounded-xl bg-slate-900 hover:bg-rose-500/10 text-slate-400 hover:text-rose-400 border border-slate-800 hover:border-rose-500/30 transition text-sm font-semibold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    <span>Keluar Sesi</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col overflow-y-auto">
        
        <!-- Header Atas -->
        <header class="h-20 bg-slate-900/60 backdrop-blur-md border-b border-slate-800 flex items-center justify-between px-8 sticky top-0 z-30">
            <div>
                <h1 class="text-xl font-bold text-white tracking-tight">Ringkasan Sistem</h1>
                <p class="text-xs text-slate-400">Pusat kendali konten situs resmi Pace Film Production</p>
            </div>
            <div>
                <a href="/" target="_blank" class="inline-flex items-center space-x-2 text-xs font-semibold px-3 py-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 transition border border-slate-700">
                    <span>Lihat Situs Publik</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
        </header>

        <!-- Body Dashboard -->
        <main class="p-8 space-y-8">
            
            <!-- Grid 3 Kartu Metrik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Metrik Portofolio -->
                <div class="relative bg-slate-950/80 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Portofolio</span>
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-baseline space-x-2">
                        <span class="text-3xl font-extrabold text-white">{{ $totalPortofolio }}</span>
                        <span class="text-xs text-slate-400">video ditayangkan</span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-800/80">
                        <a href="{{ route('admin.portofolio.index') }}" class="text-xs font-semibold text-amber-400 hover:text-amber-300 flex items-center space-x-1">
                            <span>Kelola portofolio</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Metrik Merchandise -->
                <div class="relative bg-slate-950/80 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Katalog Merchandise</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-baseline space-x-2">
                        <span class="text-3xl font-extrabold text-white">{{ $totalMerchandise }}</span>
                        <span class="text-xs text-slate-400">produk terdaftar</span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-800/80">
                        <a href="{{ route('admin.merchandise.index') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 flex items-center space-x-1">
                            <span>Kelola produk</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Metrik Legalitas -->
                <div class="relative bg-slate-950/80 border border-slate-800 rounded-2xl p-6 hover:border-slate-700 transition">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Dokumen & Piagam</span>
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-baseline space-x-2">
                        <span class="text-3xl font-extrabold text-white">{{ $totalLegalitas }}</span>
                        <span class="text-xs text-slate-400">berkas terunggah</span>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-800/80">
                        <a href="{{ route('admin.legalitas.index') }}" class="text-xs font-semibold text-emerald-400 hover:text-emerald-300 flex items-center space-x-1">
                            <span>Kelola berkas</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Panel Pintasan Aksi Cepat (Quick Actions) -->
            <div class="bg-slate-950/60 border border-slate-800 rounded-2xl p-6">
                <h2 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Pintasan Cepat</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <a href="{{ route('admin.portofolio.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-slate-900 border border-slate-800 hover:border-amber-500/40 hover:bg-slate-800/40 transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-amber-500/10 text-amber-400 flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-semibold text-slate-200 group-hover:text-white">Tambah Video Baru</span>
                        </div>
                        <span class="text-slate-600 group-hover:text-amber-400 transition">&rarr;</span>
                    </a>

                    <a href="{{ route('admin.merchandise.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-slate-900 border border-slate-800 hover:border-blue-500/40 hover:bg-slate-800/40 transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-semibold text-slate-200 group-hover:text-white">Tambah Produk Baru</span>
                        </div>
                        <span class="text-slate-600 group-hover:text-blue-400 transition">&rarr;</span>
                    </a>

                    <a href="{{ route('admin.legalitas.create') }}" class="flex items-center justify-between p-4 rounded-xl bg-slate-900 border border-slate-800 hover:border-emerald-500/40 hover:bg-slate-800/40 transition group">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center font-bold text-sm">+</div>
                            <span class="text-sm font-semibold text-slate-200 group-hover:text-white">Unggah Piagam/Legalitas</span>
                        </div>
                        <span class="text-slate-600 group-hover:text-emerald-400 transition">&rarr;</span>
                    </a>
                </div>
            </div>

        </main>
    </div>

</body>
</html>