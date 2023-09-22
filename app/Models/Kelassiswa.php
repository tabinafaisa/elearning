<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelassiswa extends Model
{
    use HasFactory;
    protected $table = 'kelas_siswa_detail';
    protected $fillable = [
        'siswa_id', 'kelas_id'
    ];
}
