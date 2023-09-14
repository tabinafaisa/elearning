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
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->update([
            'username' => $request->input('username'),
        ]);

        if(Auth::user()->hak_akses == 'guru'){
            $guru = Guru::where('user_id', $user->id)->first();
            $guru->update([
                'nip' => $request->input('nip'),
                'nama' => $request->input('nama'),
            ]);
            return redirect('/profil');
        }

        $siswa = Siswa::where('user_id', $user->id)->first();
        $siswa->update([
            'nisn' => $request->input('nisn'),
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'jurusan' => $request->input('jurusan')
        ]);

        return redirect('/profil');
    }
}
