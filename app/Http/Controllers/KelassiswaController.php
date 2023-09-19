<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelassiswaController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        $siswa = Siswa::where('user_id', Auth::user()->id)->first();
        $detail = DB::table('kelas_siswa_detail')->where('siswa_id', $siswa->id)->get();
        // return $detail;
        // dd($detail);
        $kelas = [];
        foreach ($detail as $value) {
            $kelas[] = Kelas::select('kelas.*', 'guru.nama as nama_guru')->join('guru', 'kelas.guru_id', '=', 'guru.id')->where('kelas.id', $value->kelas_id)->first();
        }
        // return $kelas;
        return view('siswa/home', ['kelas' => $kelas]);
    }

    public function checkcode(Request $request)
    {
        $validate = $request->validate([
            'code' => 'required'
        ]);
        $kelas = Kelas::where('code', $validate['code'])->first();
        if ($kelas) {
            $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            $data = DB::table('kelas_siswa_detail')->insert(['kelas_id' => $kelas->id, 'siswa_id' => $siswa->id]);
            return redirect()->back()->with('notif', ['status' => true, 'msg' => 'Kelas ditemukan']);
        }
        return redirect()->back()->with('notif', ['status' => false, 'msg' => 'Kelas tidak ditemukan']);
    }

    // public function showtugas($id){
    //     $tugas = Tugas::where('id', $id)->first();
    //     return view('tugas/tugas');
    // }
}
