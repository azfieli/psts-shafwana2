<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P10NilaiKelas extends Model
{
    use HasFactory;
    protected $table = 'p10_nilai_kelas';
    protected $fillable = ['kelas', 'kapasitas', 'terisi'];
}