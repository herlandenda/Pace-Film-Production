<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portofolio - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex h-screen">

    <!-- Area Form (Lebih ringkas tanpa sidebar agar fokus ke form) -->
    <div class="container mx-auto p-8 max-w-2xl mt-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Tambah Video Baru</h1>
                <p class="text-gray-600">Masukkan detail karya video Pace Film di bawah ini.</p>
            </div>

            <!-- Menampilkan error jika ada isian yang salah/kosong -->
            @if($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form input data -->
            <form action="{{ route('admin.portofolio.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Judul Video</label>
                    <input type="text" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required placeholder="Contoh: Iklan Kopi Bali">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Kategori</label>
                    <select name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Music Video">Music Video</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Dokumenter">Dokumenter</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Link YouTube</label>
                    <input type="url" name="youtube_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required placeholder="Contoh: https://www.youtube.com/watch?v=xxxxx">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Deskripsi Singkat (Opsional)</label>
                    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.portofolio.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Simpan Video</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>