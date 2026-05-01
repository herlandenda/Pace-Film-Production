<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legalitas & Penghargaan - Pace Film</title>

    <link rel="icon" href="{{ asset('images/logo-pace-film.png') }}" type="image/png">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans antialiased flex flex-col min-h-screen">

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
                
    <main class="flex-grow pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Legalitas & <span class="text-yellow-500">Penghargaan</span></h1>
                <p class="text-gray-400 max-w-2xl mx-auto text-lg">Bukti komitmen dan profesionalisme PT Pace Film Production dalam memajukan industri kreatif dan budaya.</p>
            </div>

            <div class="mb-20">
                <h2 class="text-2xl font-bold text-white mb-8 border-l-4 border-yellow-500 pl-4">Dokumen Legalitas Perusahaan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 flex items-start space-x-4">
                        <div class="bg-yellow-500/20 p-3 rounded-lg text-yellow-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-white">Akta Pendirian PT</h3>
                            <p class="text-gray-400 text-sm mt-1">Terdaftar resmi melalui Notaris bersertifikat.</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 flex items-start space-x-4">
                        <div class="bg-yellow-500/20 p-3 rounded-lg text-yellow-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-white">NIB & Izin Usaha</h3>
                            <p class="text-gray-400 text-sm mt-1">Nomor Induk Berusaha tersertifikasi OSS.</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 flex items-start space-x-4">
                        <div class="bg-yellow-500/20 p-3 rounded-lg text-yellow-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-white">NPWP Perusahaan</h3>
                            <p class="text-gray-400 text-sm mt-1">Taat pajak sebagai badan usaha yang sah.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-8 border-l-4 border-yellow-500 pl-4">Piagam & Penghargaan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                   <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 group cursor-zoom-in hover:border-yellow-500 transition shadow-lg" onclick="openModal('{{ asset('images/surat-legalitas1.jpg') }}')">
                        <div class="h-48 md:h-60 overflow-hidden bg-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/surat-legalitas1.jpg') }}" alt="Sertifikat 1" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-4 text-center bg-gray-800 relative z-10">
                            <h4 class="font-bold text-white text-sm">Penghargaan Film Dokumenter Tingkat Nasional</h4>
                            <p class="text-yellow-500 text-xs mt-1">Klik untuk memperbesar</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 group cursor-zoom-in hover:border-yellow-500 transition shadow-lg" onclick="openModal('{{ asset('images/surat-legalitas2.jpg') }}')">
                        <div class="h-48 md:h-60 overflow-hidden bg-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/surat-legalitas2.jpg') }}" alt="Sertifikat 2" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-4 text-center bg-gray-800 relative z-10">
                            <h4 class="font-bold text-white text-sm">Sertifikat Kompetensi Editing</h4>
                            <p class="text-yellow-500 text-xs mt-1">Klik untuk memperbesar</p>
                        </div>
                    </div>

                     <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 group cursor-zoom-in hover:border-yellow-500 transition shadow-lg" onclick="openModal('{{ asset('images/surat-legalitas1.jpg') }}')">
                        <div class="h-48 md:h-60 overflow-hidden bg-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/surat-legalitas1.jpg') }}" alt="Sertifikat 1" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-4 text-center bg-gray-800 relative z-10">
                            <h4 class="font-bold text-white text-sm">Arta Pendirian PT. Pace Film Production</h4>
                            <p class="text-yellow-500 text-xs mt-1">Klik untuk memperbesar</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg overflow-hidden border border-gray-700 group cursor-zoom-in hover:border-yellow-500 transition shadow-lg" onclick="openModal('{{ asset('images/surat-legalitas2.jpg') }}')">
                        <div class="h-48 md:h-60 overflow-hidden bg-gray-900 flex items-center justify-center">
                            <img src="{{ asset('images/surat-legalitas2.jpg') }}" alt="Sertifikat 2" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-4 text-center bg-gray-800 relative z-10">
                            <h4 class="font-bold text-white text-sm">Sertifikat Penghargaan</h4>
                            <p class="text-yellow-500 text-xs mt-1">Klik untuk memperbesar</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    

     <footer id="kontak" class="bg-gray-950 pt-20 pb-10 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                
                <div class="lg:col-span-2">
                    <div class="font-bold text-3xl text-yellow-500 tracking-wider mb-6">PACE FILM PRODUCTION</div>
                    <p class="text-gray-400 mb-8 max-w-md">
                        Menceritakan kisah melalui lensa. Kami adalah Pace Film Production yang berdedikasi tinggi pada kualitas visual dan pelestarian budaya.
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
                        <li><a href="/#beranda" class="text-gray-400 hover:text-yellow-500 transition">Beranda</a></li>
                        <li><a href="/#tentang" class="text-gray-400 hover:text-yellow-500 transition">Tentang Kami</a></li>
                        <li><a href="/#layanan" class="text-gray-400 hover:text-yellow-500 transition">Layanan</a></li>
                        <li><a href="/#portofolio" class="text-gray-400 hover:text-yellow-500 transition">Portofolio</a></li>
                        <li><a href="/#merchandise" class="text-gray-400 hover:text-yellow-500 transition">Store</a></li>
                        <li><a href="/#legalitas" class="text-yellow-500 font-bold">Legalitas</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide">Hubungi Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-gray-400">Jl. Kri Macan Tutul Dok V Atas, Jayapura, Indonesia-099114</span>
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

    <div id="imageModal" class="fixed inset-0 z-[100] hidden bg-gray-950/95 backdrop-blur-md flex justify-center items-center p-4 transition-opacity duration-300 opacity-0" onclick="closeModal()">
        <button class="absolute top-6 right-6 md:top-10 md:right-10 text-gray-400 hover:text-yellow-500 text-5xl focus:outline-none transition">&times;</button>
        <img id="modalImage" src="" alt="Dokumen Diperbesar" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl transform scale-95 transition-transform duration-300 cursor-zoom-out" onclick="event.stopPropagation(); closeModal();">
    </div>

    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');

        function openModal(imageSrc) {
            modalImg.src = imageSrc; // Mengganti sumber gambar sesuai yang diklik
            modal.classList.remove('hidden');
            // Sedikit delay agar animasi munculnya mulus
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
            document.body.style.overflow = 'hidden'; // Mencegah background bisa di-scroll
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');
            // Menunggu animasi selesai sebelum disembunyikan
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Mengembalikan scroll
            }, 300);
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