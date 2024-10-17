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
        <h1 class="text-3xl font-bold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-700">
            Profil Mahasiswa
        </h1>

        <div class="mb-6">
            <label class="block text-yellow-600 text-sm font-semibold mb-2">Nama:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $nama }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-yellow-600 text-sm font-semibold mb-2">NPM:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $npm }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-yellow-600 text-sm font-semibold mb-2">Kelas:</label>
            <p class="text-lg text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
        </div>
    </div>

</body>
    <style>
body {
    background-image: url('{{ asset("assets/img/jj.jpg") }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: 'Arial', sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}

/* Card Container */
.card {
    max-width: 500px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Profile Picture Styles */
.profile-pic-container {
    display: inline-block;
    border-radius: 50%;
    overflow: hidden;
    border: 2px solid #f1c40f;
    margin-bottom: 1rem;
    transition: transform 0.3s ease;
}

.profile-pic {
    width: 150px;
    height: 150px;
    object-fit: cover;
    filter: grayscale(100%);
    transition: filter 0.5s ease, transform 0.3s ease;
}

.profile-pic-container:hover .profile-pic {
    filter: grayscale(0%);
    transform: scale(1.05);
}

/* Form Styles */
.input-with-icon {
    position: relative;
    margin-bottom: 1rem;
}

.input-with-icon .icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: red;
}

.input-with-icon input,
.input-with-icon select {
    width: 100%;
    padding: 0.75rem 1rem;
    padding-left: 40px;
    border-radius: 5px;
    border: 1px solid #f1c40f;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.input-with-icon input:focus,
.input-with-icon select:focus {
    border-color: #f39c12;
    box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
    outline: none;
}

/* Submit Button */
.btn-primary {
    background-color: red;
    color: white;
    padding: 0.75rem;
    width: 100%;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background-color: #f39c12;
    transform: scale(1.05);
}

/* Text Styling */
.text-center {
    text-align: center;
}

.text-red {
    color: red;
}

.text-gray {
    color: #6b7280;
}
</style>
</html>
