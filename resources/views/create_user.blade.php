<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Full-Screen Background with Gradient Overlay */
        body {
            background-image: url('{{ asset("assets/img/jj.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
        }

        /* Card Styles */
        .card {
            max-width: 500px;
            width: 100%;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
        }

        /* Profile Picture Styling */
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
            transition: filter 0.5s, transform 0.3s;
        }

        .profile-pic-container:hover .profile-pic {
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        /* Button Styling */
        .btn-submit {
            background: linear-gradient(to right, yellow, red);
            color: white;
            border-radius: 30px;
            padding: 0.75rem 2rem;
            font-weight: bold;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-submit:hover {
            background: red;
            transform: scale(1.05);
        }

        /* Input Fields */
        .input-field {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #f1c40f;
            border-radius: 10px;
            background-color: #f3f4f6;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .input-field:focus {
            border-color: #2563eb;
            box-shadow: 0 0 8px rgba(37, 99, 235, 0.5);
            outline: none;
        }
    </style>
</head>
<body class="bg-overlay">

    <div class="card">
        <div class="text-center mb-4">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="{{ asset('assets/img/W.(Arknights).full.2982424.jpg') }}" alt="Profile" class="profile-pic">
            </div>
        </div>

        <h1 class="text-center text-2xl font-bold text-red-700 mb-6">
            Form Data Mahasiswa
        </h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Nama Input -->
            <div class="mb-4">
                <label for="nama" class="block text-yellow-600 font-semibold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" 
                       class="input-field">
            </div>

            <!-- Kelas Input -->
            <div class="mb-4">
                <label for="kelas" class="block text-yellow-600 font-semibold mb-2">Kelas:</label>
                <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas Anda" 
                       class="input-field">
            </div>

            <!-- NPM Input -->
            <div class="mb-4">
                <label for="npm" class="block text-ywllow-600 font-semibold mb-2">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda" 
                       class="input-field">
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-6">
                <button type="submit" class="btn-submit">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>

</body>
</html>
