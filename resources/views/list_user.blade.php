@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a href="/user/create" class="btn btn-primary mb-3" style="background-color: #A50044; border-color: #A50044;">Tambah Pengguna Baru</a>
    
    <table class="table table-hover table-bordered text-center align-middle">
        <thead style="background-color: #004D98; color: #FFD700;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                    <td><img src="{{ asset($user->foto ?? 'assets/img/default.png') }}" 
                     alt="Foto Profil" class="profile-pic" width="100px"></td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3" style="background-color: #004D98; border-color: #004D98; color: white; width: 100px;">View</a>
                        <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning mb-3" style="background-color: #A50044; border-color: #A50044; color: white; width: 100px;">Edit</a>
                        <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning mb-3" style="background-color: #ffcc00; border-color: #ffcc00; color: white; width: 100px;" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
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

<style>
    /* Full Background Image for the Container */
    .container {
        background-image: url('{{ asset("assets/img/jj.jpg") }}');
        background-size: cover;
        background-position: center;
        backdrop-filter: blur(8px);
        padding: 2rem;
        border-radius: 15px; /* Optional for rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Shadow for the container */
    }

    /* Table Styling */
    table {
        background: rgba(255, 255, 255, 0.9); /* Light background for the table */
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background-color: #004D98; /* Header Background */
        color: #FFD700; /* Header Text Color */
    }

    td {
        color: #333; /* Dark text color for table data */
    }

    /* Button Styling */
    .btn-warning {
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-warning:hover {
        transform: translateY(-2px);
        background-color: #FFD700; /* Change background on hover */
        color: #004D98; /* Change text color on hover */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto; /* Allow horizontal scrolling on small screens */
        }
    }
</style>
@endsection
