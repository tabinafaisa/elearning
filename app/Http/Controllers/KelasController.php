<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas;
use App\Models\Siswa;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function generateUniqueCode()
    {

        $characters = '0123456789QWERTYUIOPASDFGHJKLZXCVBNM';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character  = $characters[$position];
            $code = $code . $character;
        }

        if (Kelas::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }

        return $code;
    }

    public function index()
    {
        // $kelas = Kelas::join('users', 'kelas.user_id', '=', 'users.id')->get();
        // return redirect('/kelas', ['kelas' => $kelas]);

        $kelass = Kelas::select('kelas.*', 'guru.nama as nama_guru')->join('guru', 'kelas.guru_id', '=', 'guru.id')->where('guru.user_id', Auth::user()->id)->get();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $guru = Guru::join('users', 'guru.user_id', '=', 'users.id')->get();
        $guru = Guru::all();
        // return $guru;
        return view('kelas.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new Kelas record

        $image = $request->file('image')->store('public/img');
        $code = $this->generateUniqueCode();
        $guru = Guru::where('user_id', $request->input('guru'))->first();
        // return $request->guru;
        // $guru = Guru::find($request->guru);

        $data = [
            'guru_id' => $request->guru,
            'code' => $code,
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'image' => $image,
        ];

        if ($request->has('kelas')) {
            $data->kelas()->attach($request->kelas);
        }

        $kelas = Kelas::create($data);
        // return $kelas;
        return to_route('kelas.index')->with('success', 'berhasil membuat kelas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::find($id);
        $tugas = Tugas::all();
        return view('tugas/index', ['kelas' => $kelas, 'tugas' => $tugas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::select('kelas.*', 'guru.nama as nama_guru')->join('guru', 'kelas.guru_id', '=', 'guru.id')->where('kelas.id', $id)->first();
        $guru = Guru::all();
        // dd($kelas);
        return view('kelas/edit', ['kelas' => $kelas, 'guru' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('tes');

        $data = [
            'guru_id' => $request->guru,
            'nama' => $request->nama,
            'mapel' => $request->mapel,
        ];
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('public/img');
        }
        // tes

        try {
            $kelas = Kelas::find($id)->update($data);
        } catch (QueryException $err) {
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'gagal menyimpan data']);
        }
        return redirect(url('/kelas'))->with('notif', ['status' => true, 'msg' => 'berhasil menyimpan data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $kodeinput = $request->input('search');
        $kelas = Kelas::where('nama', 'LIKE', '%' . $kodeinput . '%')->get();
        return view('/kelas/index', ['kelas' => $kelas, 'kodeinput' => $kodeinput]);
    }
}
