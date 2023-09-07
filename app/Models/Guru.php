<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }

    protected $table = 'guru';
    protected $fillable = [
        'nip', 'nama', 'user_id'
    ];
}