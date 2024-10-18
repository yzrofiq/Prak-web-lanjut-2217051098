@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="card profile-card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header bg-gradient-to-r text-white text-center p-4">
            <h3 class="user-name">{{ $user->nama }}</h3>
            <p class="user-npm mb-0">{{ $user->npm }}</p>
            <p class="user-class mb-0">{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
        </div>
        <div class="card-body text-center">
            <!-- Foto Profil -->
            <div class="profile-pic-container mb-4">
                <img src="{{ asset($user->foto ?? 'assets/img/default.png') }}" 
                     alt="Foto Profil" class="profile-pic">
            </div>

            <a href="{{ route('user.index') }}" class="btn btn-gradient mt-3">Kembali</a>
        </div>
    </div>
</div>

<style>
    /* Container and Layout */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-position: center;
        backdrop-filter: blur(8px);
    }

    /* Card Styling */
    .profile-card {
    width: 100%;
    max-width: 450px;
    background: linear-gradient(135deg, rgba(255, 120, 0, 0.8), rgba(255, 0, 120, 0.8));
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle initial shadow */
}

.profile-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
}

/* Header with Smooth Gradient */
.card-header {
    background: linear-gradient(45deg, rgba(80, 0, 150, 0.9), rgba(0, 150, 150, 0.9));
    padding: 1rem;
    color: white;
    text-align: center;
    font-weight: bold;
    border-bottom: none;
    letter-spacing: 1px;
}

/* Glow Effect */
.card-content {
    padding: 2rem;
    background-color: rgba(255, 255, 255, 0.9);
    color: #333;
    border-radius: 0 0 15px 15px;
    position: relative;
}

.card-content::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: -20px;
    bottom: -20px;
    background: linear-gradient(135deg, rgba(255, 120, 0, 0.5), rgba(255, 0, 120, 0.5));
    border-radius: 20px;
    z-index: -1;
    filter: blur(30px);
    opacity: 0.5; /* Adjust the glow intensity */
}


    .user-name {
        font-weight: bold;
        letter-spacing: 1px;
    }

    .user-npm, .user-class {
        font-weight: 300;
        opacity: 0.8;
    }

    /* Foto Profil */
    .profile-pic-container {
        width: 150px;
        height: 150px;
        margin: 0 auto;
        border: 5px solid #FFD700;
        border-radius: 50%;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .profile-pic {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(50%);
        transition: filter 0.3s, transform 0.3s;
    }

    .profile-pic-container:hover .profile-pic {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    /* Button Styling */
    .btn-gradient {
        background: linear-gradient(45deg, #FF5733, #C70039);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
        font-weight: bold;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-gradient:hover {
        background: linear-gradient(45deg, #C70039, #900C3F);
        transform: scale(1.05);
    }
</style>
@endsection
