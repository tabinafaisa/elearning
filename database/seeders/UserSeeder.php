<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;

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

        Guru::create($dataguru);

        $siswa = [
            'username' => 'tabina',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'siswa'
        ];

        $user = User::create($siswa);

        $datasiswa = [
            'user_id' => $user->id,
            'nama' => 't',
            'nisn' => 76547635448,
            'kelas' => 'XII',
            'jurusan' => 'RPL'
        ];

        Siswa::create($datasiswa);
    }
}
