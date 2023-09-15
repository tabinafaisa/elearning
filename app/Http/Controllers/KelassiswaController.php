<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelassiswaController extends Controller
{
    public function index(){
        return view('siswa/home');
    }

    public function checkcode(Request $request)
    {
        $validate = $request->validate([
            'code' => 'required'
        ]);
        $kelas = Kelas::where('code', $validate['code'])->first();
        $datakelas = Kelas::select('kelas.*', 'guru.nama as nama_guru')->join('guru', 'kelas.guru_id', '=', 'guru.id')->first();

        if ($kelas) {
            return view('siswa/home', ['kelas' => $kelas, 'datakelas' => $datakelas]);
        }
        return redirect()->back()->with('notif', ['status' => false, 'msg' => 'Kelas tidak ditemukan']);
    }

    // public function showtugas($id){
    //     $tugas = Tugas::where('id', $id)->first();
    //     return view('tugas/tugas');
    // }
}
