@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg w-100" style="max-width: 500px; background: linear-gradient(135deg, #ff4d4d, #ffcc00, #ffffff, #333); border-radius: 20px; border: none;">
        <style>
            /* Placeholder Styling */
            input::placeholder {
                color: #d9d9d9 !important;
            }

            /* Button Styling */
            .btn {
                font-weight: bold;
                padding-left: 20px;
                padding-right: 20px;
                transition: background-color 0.4s, transform 0.4s;
                border-radius: 30px;
            }

            /* Special Button Styles */
            .btn-warning {
                color: #fff !important;
                background: linear-gradient(135deg, #ff4d4d, #ffcc00); /* Smooth red to yellow */
                border: none;
            }

            .btn-warning:hover {
                background: linear-gradient(135deg, #ffffff, #333); /* Smooth white to black on hover */
                color: #fff;
                transform: translateY(-3px) scale(1.05);
            }

            .btn-secondary {
                color: #fff;
                background-color: #0062cc;
                border: none;
            }

            .text-light {
                color: #ffffff; /* Light text for labels */
            }

            .form-control, .form-select {
                background-color: rgba(255, 255, 255, 0.8); /* Soft white background */
                color: #000; /* Black text */
                border: 2px solid #ffcc00; /* Yellow border for inputs */
                border-radius: 10px;
                transition: box-shadow 0.3s;
            }

            .form-control:focus, .form-select:focus {
                box-shadow: 0 0 10px rgba(255, 204, 0, 0.8); /* Soft yellow glow */
            }

            /* Styling for image preview */
            img {
                border-radius: 5px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                margin-top: 10px;
            }

            /* Styling for input file */
            input[type="file"] {
                border: 2px solid #ffcc00; 
                padding: 10px;
                border-radius: 5px;
                background-color: #f9f9f9;
            }
        </style>
        
        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-light">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda" value="{{ old('nama', $user->nama) }}">
                @error('nama')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label text-light">NPM:</label>
                <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ old('npm', $user->npm) }}">
                @error('npm')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Kelas -->
            <div class="mb-3">
                <label for="kelas_id" class="form-label text-light">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Upload Foto -->
            <div class="form-group mb-3">
                <label for="foto" class="text-light">Foto:</label>
                <input type="file" id="foto" name="foto" class="form-control">
                @if($user->foto)
                    <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
                @endif
            </div>

            <!-- Button Save Data -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-warning">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
