<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    // fungsi untuk registrasi guru
    public function guru(Request $request)
    {
        $validate = $request->validate([
            'nip' => 'required|unique:guru,nip',
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8|'
        ]);

        $user = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'hak_akses' => 'guru'
        ];

        $createuser = User::create($user);

        $guru = [
            'nama' => $request->nama,
            'nip' => $request->nip,
            'user_id' => $createuser->id
        ];

        $createguru = Guru::create($guru);
        return redirect(url('login'));
    }

    // fungsi untuk registrasi siswa
    public function siswa(Request $request)
    {
        $validate = $request->validate([
            'nisn' => 'required|unique:siswa,nisn',
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8|',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $user = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'hak_akses' => 'siswa'
        ];

        $createuser = User::create($user);

        $siswa = [
            'user_id' => $createuser->id,
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ];

        $createsiswa = Siswa::create($siswa);
        return redirect(url('login'));
    }
    public function register()
    {
        return view('auth/register');
    }

    public function register_guru()
    {
        return view('auth/guru');
    }

    public function register_siswa()
    {
        return view('auth/siswa');
    }
}
