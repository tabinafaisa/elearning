<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugassiswa;
use App\Models\Siswa;
use App\Models\Tugas;

class TugassiswaController extends Controller
{
    public function index($id){

        $siswa = Siswa::find($id);
        $tugas = Tugas::find($id);
        $tugassiswa = Tugassiswa::find($id);
        return view('siswa/tugas', ['siswa' => $siswa, 'tugas' => $tugas, 'tugassiswa' => $tugassiswa]);
    }

    public function create(Request $request, $id){

        $siswa = Tugassiswa::select('tugas_siswa.*', 'siswa.nama as nama_siswa')->join('siswa', 'tugas_siswa.siswa_id', '=', 'siswa.id')->where('tugas_siswa.id', $id)->find($id);
        $tugas = Tugassiswa::where('tugas_id', $id)->first(); 
        $file = $request->file('file_tugas')->store('public/img');

        $data = [
            'siswa_id' => $request->siswa_id,
            'tugas_id' => $request->tugas_id,
            'deskripsi' => $request->deskripsi,
            'binary_data' => $file
        ];

        $tugassiswa = Tugassiswa::create($data);
        return view('/siswa/detail', ['tugassiswa' => $tugassiswa, 'siswa' => $siswa, 'tugas' => $tugas]);
    }
}
