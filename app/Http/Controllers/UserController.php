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
        // Mengambil data user dan mengurutkan berdasarkan nama
        $users = $this->userModel->orderBy('nama', 'asc')->get();
        
        $data = [
            'title' => 'List User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = '', $foto ='')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'foto' => $foto,
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ], [
            'nama.regex' => 'Nama hanya boleh mengandung huruf.',
            'npm.digits' => 'NPM harus 10 digit angka.',
            'kelas_id.required' => 'Kelas harus dipilih.',
        ]);

        // Meng-handle upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            
            // Membuat nama file acak dengan extension asli
            $randomName = uniqid() . '.' . $foto->getClientOriginalExtension();
            
            // Menyimpan file di folder 'storage/app/public/uploads/img'
            $path = $foto->storeAs('public/uploads/img', $randomName);
            
            // Menyimpan path foto ke database tanpa 'public/'
            $validatedData['foto'] = str_replace('public/', 'storage/', $path);
        } else {
            // Jika tidak ada file yang di-upload, gunakan path default
            $validatedData['foto'] = 'assets/img/default.png';
        }

        // Menyimpan data pengguna ke database
        $user = $this->userModel->create($validatedData);

        // Memuat relasi kelas dari model user
        $user->load('kelas');

        // Redirect ke halaman user dengan pesan sukses
        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
    }

    public function show($id){
        $user = $this->userModel->getUser($id);
    
        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];
    
        return view('profile', $data);
    }    
}