<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function auth(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        $check = Auth::attempt($validate);
        // $check_username = \DB::table('users');
        // dd($validate);
        if($check){
            if(Auth::user()->hak_akses == 'guru'){
                return redirect('/kelas');
            }
           return redirect('/kelas/siswa');
        }
        return redirect('/login')->with('notif', [
            'status' => false,
            'msg' => 'login gagal, password atau username salah'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
