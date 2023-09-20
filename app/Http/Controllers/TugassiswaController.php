<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugassiswa;
use App\Models\Siswa;
use App\Models\Tugas;
use Illuminate\Support\Facades\DB;
use App\Models\Nilai;

class TugassiswaController extends Controller
{
    public function index($id)
    {
        $siswa = Siswa::select('id')->where('user_id', auth()->user()->id)->first();
        $tugas = Tugas::find($id);
        $tugassiswa = Tugassiswa::where('tugas_id', $id)->first();
        // return $tugas;
        return view('siswa/tugas', ['siswa' => $siswa, 'tugas' => $tugas, 'tugassiswa' => $tugassiswa]);
    }

    public function create(Request $request)
    {


        $file = $request->file('file_tugas')->store('public/img');

        $data = [
            'siswa_id' => $request->siswa_id,
            'tugas_id' => $request->tugas_id,
            'deskripsi' => $request->deskripsi,
            'binary_data' => $file
        ];

        try {
            $tugassiswa = Tugassiswa::create($data);
        } catch (QueryException $err) {
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'gagal menyimpan data']);
        }
        return redirect(url('/tugas/' . $request->kelas_id))->with('notif', ['status' => true, 'msg' => 'berhasil menyimpan data']);
    }

    public function detail($kelas_id)
    {
        $siswa_id = Siswa::select('id')->where('user_id', auth()->user()->id)->first();
        $siswa = Tugassiswa::select('tugas_siswa.*', 'siswa.nama as nama_siswa', 'tugas.judul')->join('siswa', 'tugas_siswa.siswa_id', '=', 'siswa.id')->join('tugas', 'tugas_siswa.tugas_id', 'tugas.id')->where('tugas.kelas_id', $kelas_id)->where('siswa.id', $siswa_id->id)->get();
        // return $siswa;
        return view('/siswa/detail', ['siswa' => $siswa]);
    }


}
