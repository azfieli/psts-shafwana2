<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P10NilaiSiswa extends Model
{
    use HasFactory;
    protected $table = 'p10_nilai_siswa';
    protected $fillable = ['nis', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'kelas_id', 'foto'];

    public function kelas()
    {
        return $this->belongsTo(P10NilaiKelas::class, 'kelas_id');
    }
}