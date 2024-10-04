@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="color: #f1c40f;">Data Mahasiswa</h1>
    
    <table class="table table-hover table-bordered text-center align-middle table-mahasiswa">
        <thead class="table-primary" style="background-color: #f1c40f; color: white;">
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="table-row">
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary btn-edit">Edit</button>
                        <button class="btn btn-sm btn-danger btn-delete">Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pengguna yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- CSS -->
<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 900px;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }

    /* Tabel */
    .table {
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-collapse: separate;
        border-spacing: 0;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(241, 196, 15, 0.1); /* Warna hover */
        transition: background-color 0.3s ease;
    }

    .table-row {
        transition: transform 0.3s ease;
    }

    .table-row:hover {
        transform: scale(1.02);
    }

    /* Aksi */
    .btn {
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-edit {
        background-color: #3498db;
        border-color: #3498db;
    }

    .btn-edit:hover {
        background-color: #2980b9;
        transform: scale(1.05);
    }

    .btn-delete {
        background-color: #e74c3c;
        border-color: #e74c3c;
    }

    .btn-delete:hover {
        background-color: #c0392b;
        transform: scale(1.05);
    }

    /* Responsif */
    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        .table {
            font-size: 0.9rem;
        }
    }
</style>
@endsection
