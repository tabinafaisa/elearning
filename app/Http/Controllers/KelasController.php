<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Guru;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){
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
        $guru = Guru::join('users', 'guru.user_id', '=', 'users.id')->get();
        // return $guru;
        return view('kelas.create', ['guru' => $guru]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('public/img');

        $guru = Guru::find($request->guru);
        return $guru;
        $data = [
            'guru_id' => $request->guru,
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'guru' => $request->guru,
            'image' => $image,
        ];

        // if($request->has('kelas')){
        //     $data->kelas()->attach($request->kelas);
        // }

        Kelas::create($data);
        return to_route('kelas.index')->with('success', 'berhasil membuat kelas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelass = Kelas::all();
        return view('guru.index', compact('kelass'));
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
    public function destroy(string $id)
    {
        //
    }
}
