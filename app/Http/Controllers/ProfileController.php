<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'foto' => asset('/Gambar/honkai-star-wallpaper-chibi.jpg'),
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
           ];

        return view('profile', $data);
           
    }
}
