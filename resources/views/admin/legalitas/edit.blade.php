<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Legalitas & Piagam - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex h-screen">

    <div class="container mx-auto p-8 max-w-2xl mt-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Edit Piagam / Dokumen</h1>
                <p class="text-gray-600">Perbarui detail piagam atau perbarui file gambar.</p>
            </div>

            <form action="{{ route('admin.legalitas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Nama Piagam / Berkas</label>
                    <input type="text" name="title" value="{{ $item->title }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ $item->category }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Foto / Scan Berkas Saat Ini</label>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Foto Lama" class="w-24 h-24 object-cover rounded mb-2 border">
                    <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar berkas saat ini.</p>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Deskripsi / Keterangan</label>
                    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $item->description }}</textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.legalitas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Update Dokumen</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>