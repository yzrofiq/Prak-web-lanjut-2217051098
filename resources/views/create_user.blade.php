<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Background Image Styling */
        body {
            background-image: url('{{ asset("assets/img/jj.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Semi-transparent overlay with blur effect */
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(6px);
            padding: 3rem;
            border-radius: 20px;
        }

        /* Profile Picture Styling */
        .profile-pic-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #f1c40f;
            margin: 0 auto 1.5rem;
        }

        .profile-pic {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(80%);
            transition: filter 0.4s, transform 0.3s;
        }

        .profile-pic:hover {
            filter: grayscale(0%);
            transform: scale(1.1);
        }

        /* Input Fields Styling */
        .input-field {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #f1c40f;
            border-radius: 8px;
            background-color: #f8fafc;
            transition: box-shadow 0.3s, border-color 0.3s;
        }

        .input-field:focus {
            border-color: #2563eb;
            box-shadow: 0 0 10px rgba(37, 99, 235, 0.5);
            outline: none;
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(to right, #ff9f00, #ff2d00);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 30px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-submit:hover {
            background: #ff2d00;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="bg-overlay">
        <!-- Profile Picture -->
        <div class="profile-pic-container">
            <img src="{{ asset('assets/img/W.(Arknights).full.2982424.jpg') }}" alt="Profile Picture" class="profile-pic">
        </div>

        <h1 class="text-center text-3xl font-bold text-white mb-6">Form Data Mahasiswa</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Nama Field -->
            <div class="mb-4">
                <label for="nama" class="block text-white font-medium mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" 
                       class="input-field" value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- NPM Field -->
            <div class="mb-4">
                <label for="npm" class="block text-white font-medium mb-2">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda" 
                       class="input-field" value="{{ old('npm') }}">
                @error('npm')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kelas Field -->
            <div class="mb-6">
                <label for="kelas_id" class="block text-white font-medium mb-2">Kelas:</label>
                <select id="kelas_id" name="kelas_id" class="input-field" required>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" 
                                {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center mt-8">
                <button type="submit" class="btn-submit">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>

</body>
</html>
