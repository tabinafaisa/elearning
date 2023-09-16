<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = [
            'username' => 'siti',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'guru'
        ];
        
        $user = User::create($guru);

        $dataguru = [
            'nama' => 'd',
            'nip' => 6453468326,
            'user_id' => $user->id
        ];

        $id_guru = Guru::create($dataguru);

        $siswa = [
            'username' => 'tabina',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'siswa'
        ];

        $user = User::create($siswa);

        $datasiswa = [
            'user_id' => $user->id,
            'nama' => 'ina',
            'nisn' => 76547635448,
            'kelas' => 'XII',
            'jurusan' => 'RPL'
        ];

        Siswa::create($datasiswa);

        $kelas = [
            'guru_id' => $id_guru->id,
            'code' => 'EWIN38',
            'nama' => '12 RPL 1',
            'mapel' => 'Agama',
            'image' => 'public/img/Qyy16QfNAZdHmzjFLsq00mm0Z0DldiSNHV89ZxnZ.png'
        ];

        Kelas::create($kelas);
        
    }
}
