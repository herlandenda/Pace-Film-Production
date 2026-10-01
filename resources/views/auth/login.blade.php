<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Pace Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">

    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-yellow-500 mb-2">PACE FILM</h1>
            <p class="text-gray-400">Login Admin Dashboard</p>
        </div>

        <!-- Menampilkan pesan error jika login gagal -->
        @if($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-yellow-500" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Password</label>
                <input type="password" name="password" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-yellow-500" required>
            </div>

            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded transition duration-200">
                Masuk Dashboard
            </button>
        </form>
    </div>

</body>
</html>