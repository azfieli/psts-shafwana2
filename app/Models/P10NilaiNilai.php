<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P10NilaiNilai extends Model
{
    protected $table = 'p10_nilai_nilai';
    protected $fillable = ['siswa_id', 'mapel_id', 'guru_id', 'nilai'];

    public function siswa() { return $this->belongsTo(P10NilaiSiswa::class, 'siswa_id'); }
    public function mapel() { return $this->belongsTo(P10NilaiMapel::class, 'mapel_id'); }
    public function guru() { return $this->belongsTo(P10NilaiGuru::class, 'guru_id'); }
}