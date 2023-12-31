<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $fillable = [
        'siswa_id', 'tugas_siswa_id', 'kelas_id', 'skor'
    ];

    public function tugas(){
        return $this->belongsTo(Tugassiswa::class);
    }
}
