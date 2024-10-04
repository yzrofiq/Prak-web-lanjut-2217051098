<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $users = $this->userModel->getUser();
        $data = [
            'title' => 'List User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = '')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'npm' => 'required|digits:10',
            'kelas_id' => 'required|exists:kelas,id',
        ], [
            'nama.regex' => 'Nama hanya boleh mengandung huruf.',
            'npm.digits' => 'NPM harus 10 digit angka.',
            'kelas_id.required' => 'Kelas harus dipilih.',
        ]);

        // Menggunakan instance yang benar (huruf kecil)
        $user = $this->userModel->create($validatedData);

        // Memuat relasi kelas dari model user
        $user->load('kelas');

        // Redirect ke halaman user
        return redirect()->to('/user');
    }
}
