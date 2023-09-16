<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugassiswa;

class TugassiswaController extends Controller
{
    public function index(){
        return view('tugas/tugassiswa');
    }

    public function create($id){
        $tugas = Tugassiswa::find($id);
        return view('tugas/create', ['tugas' => $tugas]);
    }
}
