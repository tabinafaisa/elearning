<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugassiswa;
use App\Models\Nilai;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        $tugas = Tugas::where('kelas_id', $kelas_id)->get();
        return view('tugas/index', ['kelas' => $kelas, 'tugas' => $tugas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        return view('tugas/create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $file = $request->file('file_tugas')->store('public/img');

        $data = [
            'kelas_id' => $request->kelas_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama_file' => $request->file_tugas,
            'binary_data' => $file,
            'deadline' => $request->deadline
        ];

        try {
            $tugas = Tugas::create($data);
        } catch (QueryException $err) {
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'gagal menyimpan data']);
        }
        return redirect(url('/tugas/' . $request->kelas_id))->with('notif', ['status' => true, 'msg' => 'berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tugas = Tugas::where('id', $id)->get();
        // dd($tugassiswa);
        return view('tugas/detail', ['tugas' => $tugas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kelas_id, $id)
    {
        $kelas = Kelas::find($kelas_id);
        $tugas = Tugas::find($id);
        // dd($tugas);
        if ($tugas) {
            $tugas->delete();
            return redirect()->back()->with('success', 'Tugas berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Tugas tidak ditemukan.');
        }
    }

    public function detail($tugas_id)
    {
        // $siswa_id = Siswa::select('id')->where('user_id', auth()->user()->id)->first();
        $dtugas = Tugassiswa::select('tugas_siswa.*', 'siswa.nama', 'tugas.kelas_id')->join('siswa', 'tugas_siswa.siswa_id', '=', 'siswa.id')->join('tugas', 'tugas_siswa.tugas_id', '=', 'tugas.id')->where('tugas_id', $tugas_id)->get();

        // $dtugas = DB::table('tugas_siswa as ts')
        //     ->join("nilai as n", 'n.tugas_siswa_id', '=', 'ts.id')
        //     ->join("siswa as s", "s.id", "=", "n.siswa_id")
        //     ->where("ts.id", $tugas_id)
        //     ->get();

        // return $dtugas;
        return view('tugas/siswa', ['dtugas' => $dtugas]);
    }

    public function nilai(Request $request)
    {
        $data = [
            'tugas_siswa_id' => $request->id,
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'skor' => $request->skor
        ];

        $nilai = Nilai::create($data);
        return redirect('/detail');
    }
}
