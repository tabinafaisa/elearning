<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public function guru(){
        return $this->belongsToMany(Guru::class);
    }

    public function tugas(){
        return $this->belongsTo(Tugas::class);
    }

    protected $table = 'kelas';
    protected $fillable = [
        'guru_id', 'code', 'nama', 'mapel', 'image'
    ];
}
