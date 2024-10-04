@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('assets/img/jj.jpg') }}'); background-size: cover; background-position: center;">
    <div class="card p-4 shadow-lg w-100" style="max-width: 500px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px;">
        <div class="text-center mb-4">
            <!-- Foto Profil -->
            <div class="profile-pic-container">
                <img src="{{ asset('assets/img/W.(Arknights).full.2982424.jpg') }}" alt="Profile" class="profile-pic">
            </div>
        </div>

<h1 class="text-center mb-4" style="color: red;">Form Data Mahasiswa</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <!-- Input Nama -->
    <div class="mb-3 input-with-icon">
        <label for="nama" class="form-label">Nama:</label>
        <i class="fa fa-user icon"></i>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
        @error('nama')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Input NPM -->
    <div class="mb-3 input-with-icon">
        <label for="npm" class="form-label">NPM:</label>
        <i class="fa fa-id-card icon"></i>
        <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}">
        @error('npm')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Input Kelas -->
    <div class="mb-3 input-with-icon">
        <label for="kelas_id" class="form-label">Kelas:</label>
        <i class="fa fa-graduation-cap icon"></i>
        <select name="kelas_id" id="kelas_id" class="form-select" required>
            <option value="">Pilih Kelas</option>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
        @error('kelas_id')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Tombol Submit -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn-hover">Simpan Data</button>
    </div>
</form>
</div>
</div>
<!-- CSS -->
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    .min-vh-100 {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Profil & animasi */
    .profile-pic-container {
        display: inline-block;
        border-radius: 50%;
        overflow: hidden;
        border: 1px solid #f1c40f;
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
        filter: grayscale(0);
        transform: scale(1.05);
    }

    .input-with-icon {
        position: relative;
        margin-bottom: 1rem;
    }

    .input-with-icon .icon {
        position: absolute;
        left: 10px;
        top: 35px;
        font-size: 18px;
        color: red;
    }

    .input-with-icon input, .input-with-icon select {
        padding-left: 40px;
        border-radius: 5px;
        border: 1px solid #f1c40f;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .input-with-icon input:focus, .input-with-icon select:focus {
        border-color: #f39c12;
        box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
    }

    .btn-primary {
        background-color: red;
        border-color: red;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #f39c12;
        border-color: #f39c12;
        transform: scale(1.05);
    }
</style>
@endsection
