<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P10NilaiGuruKelas extends Model
{
    use HasFactory;
    protected $table = 'p10_nilai_guru_kelas';
    protected $fillable = ['guru_id', 'kelas_id'];
}