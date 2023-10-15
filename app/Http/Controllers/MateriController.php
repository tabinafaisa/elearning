<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Materi;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        $materi = Materi::where('kelas_id', $kelas_id)->get();
        return view('materi/index', ['kelas' => $kelas, 'materi' => $materi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        return view('materi/create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('file_mat')->store('public/img');

        $materi = [
            'kelas_id' => $request->kelas_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'nama_file' => $request->file_mat,
            'binary_data' => $file,
        ];

        try {
            $materi = Materi::create($materi);
        } catch (QueryException $err) {
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'gagal menyimpan data']);
        }
        return redirect(url('/materi/' . $request->kelas_id))->with('notif', ['status' => true, 'msg' => 'berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $materi = Materi::where('id', $id)->get();
        return view('materi/detail', ['materi' => $materi]);
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

    public function destroyMateri($kelas_id, $id)
    {
        $kelas = Kelas::find($kelas_id);
        $materi = Materi::find($id);
        // $materi->delete();
        // return redirect()->back()->with('success', 'materi berhasil dihapus');
        if ($materi) {
            $materi->delete();
            return redirect()->back()->with('success', 'materi berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'materi tidak ditemukan.');
        }
    }
}
