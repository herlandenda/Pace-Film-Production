<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Merchandise - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex h-screen">

    <div class="container mx-auto p-8 max-w-2xl mt-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Edit Produk Merchandise</h1>
                <p class="text-gray-600">Perbarui informasi barang atau ganti foto.</p>
            </div>

            <form action="{{ route('admin.merchandise.update', $merchandise->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Nama Produk</label>
                    <input type="text" name="name" value="{{ $merchandise->name }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Foto Produk Saat Ini</label>
                    <img src="{{ asset('storage/' . $merchandise->image) }}" alt="Foto Lama" class="w-20 h-20 object-cover rounded mb-2 border">
                    <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti foto saat ini.</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ $merchandise->price }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Jumlah Stok</label>
                        <input type="number" name="stock" value="{{ $merchandise->stock }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Keterangan / Deskripsi Produk</label>
                    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $merchandise->description }}</textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.merchandise.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Update Produk</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>