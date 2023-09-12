<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Database\QueryException;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil/profil');
    }

    public function show()
    {
        $user = auth()->user();
        $guru = $user->guru;
        $siswa = $user->siswa;
        return view('profil/profil', compact('user', 'guru', 'siswa'));
        // $guru = Guru::join('users', 'guru.user_id', '=', 'users.id')->first();
        // $siswa = Siswa::join('users', 'siswa.user_id', '=', 'users.id')->get();
        // return view('profil/profil', ['guru' => $guru, 'siswa' => $siswa]);
    }

    public function edit()
    {
        $user = auth()->user();
        $guru = $user->guru;
        $siswa = $user->siswa;
        return view('profil/edit', compact('user', 'guru', 'siswa'));
    }

    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'nisn' => 'required|string',
        //     'username' => 'required|string',
        //     'nama' => 'required|string',
        //     'kelas' => 'required|string',
        //     'jurusan' => 'required|string'
        // ]);

        $user = User::find($id);

        $user->update([
            'username' => $request->input('username'),
        ]);

        $siswa = Siswa::where('user_id', $user->id)->first();
        $siswa->update([
            'nisn' => $request->input('nisn'),
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'jurusan' => $request->input('jurusan')
        ]);

        return redirect('/profil')->with('notif', ['status' => true, 'msg' => 'berhasil memperbarui profil']);
        // $data = [
        //     'username' => $request->username,
        //     'nisn' => $request->nisn,
        //     'nama' => $request->nama,
        //     'kelas' => $request->kelas,
        //     'jurusan' => $request->jurusan
        // ];
        // $us = User::find($request->id)->update($data);
        // // dd($us);
        // if($us){
        //     return redirect('/profil')->with('notif', ['status' => true, 'msg' => 'berhasil memperbarui profil']);
        // }
    }
}
