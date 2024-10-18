@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        /* Button Styling */
        .btn-primary {
            background: linear-gradient(45deg, #A50044, #FF4081);
            border-color: transparent;
            transition: transform 0.3s, box-shadow 0.3s;
            color: white;
            font-weight: bold;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Table Header Styling */
        thead {
            background: linear-gradient(90deg, #004D98, #1E3A8A); 
            color: #FFD700;
            font-weight: bold;
        }

        /* Table Row Hover Effect */
        tbody tr:hover {
            background-color: rgba(0, 77, 152, 0.1);
        }

        /* Detail Button Styling */
        .btn-warning {
            background: linear-gradient(45deg, #FF5733, #C70039);
            border-color: #004D98;
            color: black;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-warning:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background-color: red;
        }

        /* Table Borders */
        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        /* Empty State Styling */
        .empty-state {
            font-style: italic;
            color: #6B7280;
        }
    </style>

    <!-- Add User Button -->
    <a href="/user/create" class="btn btn-primary mb-4">
        Tambah Pengguna Baru
    </a>

    <!-- User Table -->
    <table class="table table-hover table-bordered text-center align-middle">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
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
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">
                            Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center empty-state">
                        Tidak ada data pengguna yang tersedia.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
