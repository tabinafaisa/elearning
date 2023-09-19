<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

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
}
