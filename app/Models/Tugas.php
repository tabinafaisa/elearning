<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\Guru;

class Tugas extends Model
{
    public function guru(){
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    use HasFactory;
    protected $table = 'tugas';
    protected $fillable = [
        'guru_id', 'kelas_id', 'judul', 'deskripsi', 'nama_file', 'binary_data', 'deadline'
    ];
}
