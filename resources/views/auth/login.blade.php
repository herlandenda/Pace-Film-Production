<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Admin | Pace Film Production</title>
    <meta name="description" content="Portal autentikasi admin Pace Film Production.">

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
        body { background: #12151C; color: #12151C; font-feature-settings: "ss01", "cv11"; }
        h1, h2, h3 { letter-spacing: -0.025em; }

        .btn-submit {
            transition: background-color .25s ease, color .25s ease, transform .25s cubic-bezier(.2,.7,.2,1), box-shadow .25s ease;
        }
        .btn-submit:hover {
            background-color: #E9B02B;
            color: #12151C;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px -10px rgba(233,176,43,.8);
        }
        .btn-submit:active {
            transform: translateY(0) scale(.98);
            box-shadow: none;
        }

        :focus-visible { outline: 2px solid #9A6700; outline-offset: 2px; }
    </style>
</head>
<body class="bg-tinta font-sans antialiased selection:bg-emas selection:text-tinta flex items-center justify-center min-h-screen p-4 sm:p-6">

    @php
        // Foto latar sinematik untuk panel kiri login
        $fotoLogin = file_exists(public_path('images/foto-login-bg.jpg'))
            ? asset('images/foto-login-bg.jpg')
            : 'https://images.unsplash.com/photo-1579632652768-6cb9dcf85912?auto=format&fit=crop&w=1200&q=80';
    @endphp

    <div class="w-full max-w-4xl bg-dasar rounded-2xl shadow-2xl overflow-hidden border border-garis grid grid-cols-1 md:grid-cols-12 my-auto">
        
        <!-- Panel Kiri: Visual Sinematik & Brand -->
        <div class="md:col-span-5 relative bg-tinta text-white p-8 sm:p-10 flex flex-col justify-between overflow-hidden min-h-[260px] md:min-h-[500px]">
            <!-- Background Image Cinema -->
            <div class="absolute inset-0 z-0">
                <img src="{{ $fotoLogin }}" alt="Pace Film Production Studio" class="w-full h-full object-cover filter contrast-110 opacity-40">
                <div class="absolute inset-0 bg-gradient-to-t from-tinta via-tinta/70 to-tinta/40"></div>
            </div>

            <!-- Header Panel Kiri -->
            <div class="relative z-10">
                <a href="/" class="inline-flex items-center gap-2.5 group">
                    <img src="{{ asset('images/logo-pace-film.png') }}" alt="Logo Pace Film" class="h-10 w-auto transition-transform group-hover:scale-105">
                    <span class="text-base font-extrabold text-white tracking-tight leading-none block">
                        Pace Film <span class="font-normal block text-[10px] tracking-widest text-emas uppercase mt-0.5">Production</span>
                    </span>
                </a>
            </div>

            <!-- Footer Panel Kiri -->
            <div class="relative z-10 mt-auto pt-8">
                <span class="inline-block px-3 py-1 rounded-full bg-white/10 text-emas text-[10px] font-bold uppercase tracking-wider border border-white/15 mb-3 backdrop-blur-md">
                    Admin Workspace
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold leading-snug text-white">
                    Kelola Portofolio & Merchandise Perusahaan.
                </h2>
                <p class="mt-2 text-xs text-white/70 leading-relaxed font-light">
                    Sistem manajemen konten khusus untuk tim internal Pace Film Production.
                </p>
            </div>
        </div>

        <!-- Panel Kanan: Form Login -->
        <div class="md:col-span-7 p-8 sm:p-12 flex flex-col justify-between bg-dasar">
            
            <!-- Link Kembali ke Beranda -->
            <div class="flex items-center justify-between mb-8">
                <a href="/" class="inline-flex items-center gap-1.5 text-xs font-semibold text-abu hover:text-tinta transition-colors">
                    <span>&larr;</span>
                    <span>Kembali ke Beranda</span>
                </a>
                <span class="text-[11px] font-medium text-abu bg-salju px-3 py-1 rounded-full border border-garis">
                    v1.0 Secure Portal
                </span>
            </div>

            <div>
                <div class="mb-8">
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-tinta tracking-tight">Selamat Datang</h1>
                    <p class="text-xs sm:text-sm text-abu mt-1">Masukkan kredensial akun admin kamu untuk melanjutkan.</p>
                </div>

                <!-- Pesan Error -->
                @if($errors->any())
                    <div class="bg-rose-50 border border-rose-200 text-rose-700 px-4 py-3 rounded-xl mb-6 text-xs flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-rose-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="leading-relaxed">{{ $errors->first() }}</span>
                    </div>
                @endif

                <form action="/login" method="POST" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-tinta mb-2">Alamat Email</label>
                        <div class="relative">
                            <input type="email" name="email" required placeholder="admin@pacefilm.com" 
                                class="w-full px-4 py-3 rounded-xl bg-salju text-tinta text-sm border border-garis focus:bg-white focus:border-tinta focus:outline-none transition duration-200">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-tinta">Kata Sandi</label>
                        </div>
                        <div class="relative">
                            <input type="password" name="password" required placeholder="••••••••" 
                                class="w-full px-4 py-3 rounded-xl bg-salju text-tinta text-sm border border-garis focus:bg-white focus:border-tinta focus:outline-none transition duration-200">
                        </div>
                    </div>

                    <button type="submit" class="btn-submit w-full bg-tinta text-white font-bold py-3.5 px-6 rounded-xl text-xs uppercase tracking-wider shadow-md mt-2">
                        Masuk Dashboard Admin
                    </button>
                </form>
            </div>

            <!-- Footer Hak Cipta -->
            <div class="mt-10 pt-6 border-t border-garis text-center text-[11px] text-abu">
                &copy; {{ date('Y') }} PT Pace Film Production. All rights reserved.
            </div>

        </div>

    </div>

</body>
</html>