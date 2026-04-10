<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P10NilaiMapel extends Model
{
    use HasFactory;
    protected $table = 'p10_nilai_mapel';
    protected $fillable = ['mapel', 'sks'];
}