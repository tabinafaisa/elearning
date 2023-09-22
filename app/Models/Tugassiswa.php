<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugassiswa extends Model
{
    use HasFactory;
    protected $table = 'tugas_siswa';
    protected $fillable = [
        'tugas_id', 'siswa_id', 'deskripsi', 'binary_data'
    ];

    public function nilai (){
        return $this->hasOne(Nilai::class);
    }
    public function siswa (){
        return $this->hasMany(Siswa::class);
    }
}
