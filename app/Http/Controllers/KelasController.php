<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Database\QueryException;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function generateUniqueCode(){

        $characters = '0123456789QWERTYUIOPASDFGHJKLZXCVBNM';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6){
            $position = rand(0, $charactersNumber -1);
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

        $kelass = Kelas::all();
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
        return view('kelas/edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::find($id);
        // dd($kelas);
        return view('kelas/edit', ['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('tes');
        $image = $request->file('image')->store('public/img');
        $code = $this->generateUniqueCode();
        $guru = Guru::where('user_id', $request->input('guru'))->first();

        $data = [
            'guru_id' => $request->guru,
            'code' => $code,
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'image' => $image,
        ];

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
}
