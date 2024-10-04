<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: radial-gradient(circle, #2563eb, #1e3a8a);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="bg-white bg-opacity-95 p-10 rounded-lg shadow-lg w-full max-w-lg transform hover:scale-105 transition duration-500 ease-in-out">
        <h1 class="text-3xl font-bold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-blue-700">
            Profil Mahasiswa
        </h1>

        <div class="mb-6">
            <label class="block text-blue-600 text-sm font-semibold mb-2">Nama:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $nama }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-blue-600 text-sm font-semibold mb-2">NPM:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $npm }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-blue-600 text-sm font-semibold mb-2">Kelas:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
        </div>
    </div>

</body>
</html>
