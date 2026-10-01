<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Merchandise - Pace Film</title>
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

            <div class="px-6 py-4 border-b border-slate-800/60 bg-slate-900/40">
                <p class="text-xs text-slate-400">Masuk sebagai</p>
                <p class="text-sm font-semibold text-slate-200 truncate">{{ Auth::user()->name ?? 'Administrator' }}</p>
            </div>

            <nav class="px-3 py-6 space-y-1.5 text-sm font-medium">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.portofolio.index') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    Portofolio Video
                </a>

                <a href="{{ route('admin.merchandise.index') }}" class="flex items-center px-3 py-2.5 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20 font-semibold">
                    <svg class="w-5 h-5 mr-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Katalog Merchandise
                </a>

                <a href="{{ route('admin.legalitas.index') }}" class="flex items-center px-3 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition group">
                    <svg class="w-5 h-5 mr-3 text-slate-500 group-hover:text-amber-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Legalitas & Piagam
                </a>
            </nav>
        </div>

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
        <header class="h-20 bg-slate-900/60 backdrop-blur-md border-b border-slate-800 flex items-center justify-between px-8 sticky top-0 z-30">
            <div>
                <h1 class="text-xl font-bold text-white tracking-tight">Katalog Merchandise</h1>
                <p class="text-xs text-slate-400">Daftar produk resmi pakaian dan aksesoris Pace Film</p>
            </div>
            <a href="{{ route('admin.merchandise.create') }}" class="inline-flex items-center space-x-2 bg-gradient-to-r from-amber-500 to-yellow-400 hover:from-amber-400 hover:to-yellow-300 text-slate-950 font-bold px-4 py-2.5 rounded-xl shadow-lg shadow-amber-500/20 text-xs transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Tambah Produk</span>
            </a>
        </header>

        <main class="p-8 space-y-6">
            @if(session('success'))
                <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-sm px-4 py-3 rounded-xl flex items-center space-x-2">
                    <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-slate-950/80 border border-slate-800 rounded-2xl overflow-hidden shadow-xl">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-800 bg-slate-900/60 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                            <th class="py-4 px-6">Foto</th>
                            <th class="py-4 px-6">Nama Produk</th>
                            <th class="py-4 px-6">Harga</th>
                            <th class="py-4 px-6">Stok</th>
                            <th class="py-4 px-6 text-right">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60 text-sm">
                        @forelse($merchandises as $item)
                            <tr class="hover:bg-slate-900/40 transition">
                                <td class="py-4 px-6">
                                    <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-800 bg-slate-900 flex-shrink-0">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-semibold text-white block">{{ $item->name }}</span>
                                    <span class="text-xs text-slate-400 line-clamp-1 mt-0.5">{{ $item->description ?? 'Tidak ada deskripsi' }}</span>
                                </td>
                                <td class="py-4 px-6 font-semibold text-amber-400">
                                    Rp {{ number_format($item->price, 0, ',', '.') }}
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->stock > 0 ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20' : 'bg-rose-500/10 text-rose-400 border border-rose-500/20' }}">
                                        {{ $item->stock > 0 ? $item->stock . ' unit' : 'Habis' }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-right space-x-2">
                                    <a href="{{ route('admin.merchandise.edit', $item->id) }}" class="inline-block px-3 py-1.5 text-xs font-semibold rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition border border-slate-700">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.merchandise.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/20 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-slate-500">
                                    Belum ada produk merchandise yang ditambahkan.
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