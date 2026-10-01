<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Legalitas & Piagam - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex h-screen">

    <div class="container mx-auto p-8 max-w-2xl mt-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Tambah Piagam / Dokumen</h1>
                <p class="text-gray-600">Unggah foto piagam penghargaan atau berkas legalitas perusahaan.</p>
            </div>

            @if($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.legalitas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Nama Piagam / Berkas Legalitas</label>
                    <input type="text" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required placeholder="Contoh: Penghargaan Film Dokumenter Tingkat Nasional">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Kategori</label>
                    <input type="text" name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Contoh: Piagam, Sertifikat, Akta Perusahaan">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Foto / Scan Berkas</label>
                    <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, WEBP (Maksimal 3MB)</p>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Deskripsi / Keterangan Singkat</label>
                    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Keterangan tambahan atau tahun perolehan..."></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.legalitas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Simpan Dokumen</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>