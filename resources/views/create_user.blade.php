@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center">
    <div class="bg-overlay">
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
                max-width: 500px;
                width: 100%;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
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
                margin-bottom: 1rem;
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
                width: 100%;
                text-align: center;
            }

            .btn-submit:hover {
                background: #ff2d00;
                transform: scale(1.05);
            }

            /* Error Message Styling */
            .text-danger {
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }

            /* Button Group Styling */
            .btn-group {
                display: flex;
                justify-content: space-between;
                margin-top: 1rem;
            }

            .btn-secondary {
                background-color: #2563eb;
                border: none;
                color: white;
                padding: 0.75rem 1.5rem;
                border-radius: 30px;
                font-weight: bold;
                transition: background 0.3s, transform 0.2s;
            }

            .btn-secondary:hover {
                background-color: #1e40af;
                transform: scale(1.05);
            }
        </style>

        <!-- Profile Picture -->
        <div class="profile-pic-container">
            <img src="{{ asset('assets/img/W.(Arknights).full.2982424.jpg') }}" alt="Profile Picture" class="profile-pic">
        </div>

        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Field -->
            <input type="text" name="nama" id="nama" class="input-field" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <!-- NPM Field -->
            <input type="text" name="npm" id="npm" class="input-field" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}">
            @error('npm')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <!-- Kelas Field -->
            <select name="kelas_id" id="kelas_id" class="input-field" required>
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <!-- Foto Field -->
            <input type="file" id="foto" name="foto" class="input-field">

            <!-- Button Group -->
            <div class="btn-group">
                <a href="{{ route('user.index') }}" class="btn-secondary">USER</a>
                <button type="submit" class="btn-submit">Tambah Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
