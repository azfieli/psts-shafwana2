<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P10NilaiGuruMapel extends Model
{
    use HasFactory;
    protected $table = 'p10_nilai_guru_mapel';
    protected $fillable = ['guru_id', 'mapel_id'];
}