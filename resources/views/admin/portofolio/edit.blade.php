<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portofolio - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex h-screen">

    <div class="container mx-auto p-8 max-w-2xl mt-10">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Edit Video</h1>
                <p class="text-gray-600">Perbarui informasi video di bawah ini.</p>
            </div>

            <!-- Form update data (perhatikan tambahan @method('PUT')) -->
            <form action="{{ route('admin.portofolio.update', $portofolio->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Judul Video</label>
                    <input type="text" name="title" value="{{ $portofolio->title }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Kategori</label>
                    <select name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="Music Video" {{ $portofolio->category == 'Music Video' ? 'selected' : '' }}>Music Video</option>
                        <option value="Commercial" {{ $portofolio->category == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                        <option value="Dokumenter" {{ $portofolio->category == 'Dokumenter' ? 'selected' : '' }}>Dokumenter</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Link YouTube</label>
                    <input type="url" name="youtube_url" value="{{ $portofolio->youtube_url }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Deskripsi Singkat</label>
                    <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $portofolio->description }}</textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.portofolio.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Batal</a>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Update Video</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>