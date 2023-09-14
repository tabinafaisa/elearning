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
        // dd($kelas);
        if ($kelas) {
            return view('home/index', ['kelas' => $kelas]);
        }
        return redirect()->back()->with('notif', ['status' => false, 'msg' => 'Kelas tidak ditemukan']);
    }
}
