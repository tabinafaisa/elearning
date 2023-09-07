<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsToMany(Guru::class);
    }

    protected $table = 'kelas';
    protected $fillable = [
        'id', 'guru_id', 'nama', 'mapel', 'image'
    ];
}
