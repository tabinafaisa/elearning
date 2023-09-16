<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugassiswa extends Model
{
    use HasFactory;
    protected $table = 'tugas_siswa';
    protected $fillable = [
        'kelas_id', 'siswa_id', 'deskripsi', 'binary_data'
    ];
}
