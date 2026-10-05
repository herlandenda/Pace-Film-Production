<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Legalitas & Piagam - Pace Film Production</title>
    
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
        :focus-visible { outline: 2px solid #9A6700; outline-offset: 2px; }
    </style>
</head>
<body class="bg-salju text-tinta font-sans antialiased flex h-screen overflow-hidden selection:bg-emas selection:text-tinta">

    <!-- Sidebar Kiri -->
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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3.5 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition group">
                    <svg class="w-5 h-5 mr-3 text-white/40 group-hover:text-emas transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
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

                <a href="{{ route('admin.legalitas.index') }}" class="flex items-center px-3.5 py-2.5 rounded-xl bg-emas text-tinta font-extrabold shadow-sm">
                    <svg class="w-5 h-5 mr-3 text-tinta" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
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

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col overflow-y-auto bg-salju">
        
        <!-- Header Atas -->
        <header class="h-20 bg-dasar/90 backdrop-blur-md border-b border-garis flex items-center justify-between px-8 sticky top-0 z-30">
            <div>
                <h1 class="text-xl font-extrabold text-tinta tracking-tight">Legalitas & Piagam</h1>
                <p class="text-xs text-abu">Berkas akta, sertifikasi, dan piagam penghargaan resmi</p>
            </div>
            <a href="{{ route('admin.legalitas.create') }}" class="inline-flex items-center space-x-2 bg-tinta text-white hover:bg-emas hover:text-tinta font-bold px-4 py-2.5 rounded-full text-xs transition duration-300 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Unggah Berkas</span>
            </a>
        </header>

        <main class="p-8 space-y-6">
            
            <!-- Notifikasi Sukses -->
            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs px-4 py-3 rounded-xl flex items-center space-x-2 shadow-sm">
                    <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Tabel Data Berkas Legalitas -->
            <div class="bg-dasar border border-garis rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-garis bg-salju text-[11px] font-extrabold text-abu uppercase tracking-wider">
                            <th class="py-4 px-6">Pratinjau</th>
                            <th class="py-4 px-6">Nama Dokumen</th>
                            <th class="py-4 px-6">Kategori</th>
                            <th class="py-4 px-6 text-right">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-garis text-sm">
                        @forelse($legalitas as $item)
                            <tr class="hover:bg-salju/60 transition">
                                <td class="py-4 px-6">
                                    <div class="w-14 h-14 rounded-xl overflow-hidden border border-garis bg-salju flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-tinta block leading-snug">{{ $item->title }}</span>
                                    <span class="text-xs text-abu line-clamp-1 mt-0.5 font-normal">{{ $item->description ?? 'Tidak ada keterangan tambahan' }}</span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-extrabold bg-salju text-emastua border border-garis uppercase tracking-wider">
                                        {{ $item->category ?? 'Umum' }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <a href="{{ route('admin.legalitas.edit', $item->id) }}" class="inline-block px-3.5 py-1.5 text-xs font-bold rounded-lg bg-salju hover:bg-tinta hover:text-white text-tinta transition border border-garis">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.legalitas.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berkas ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3.5 py-1.5 text-xs font-bold rounded-lg bg-rose-50 hover:bg-rose-600 hover:text-white text-rose-600 border border-rose-200 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-abu font-medium">
                                    Belum ada berkas legalitas atau piagam yang ditambahkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </main>
    </div>

</body>
</html> 