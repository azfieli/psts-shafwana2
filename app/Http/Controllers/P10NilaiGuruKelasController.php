<?php

namespace App\Http\Controllers;

use App\Models\P10NilaiGuruKelas;
use App\Models\P10NilaiGuru;
use App\Models\P10NilaiKelas;
use Illuminate\Http\Request;

class P10NilaiGuruKelasController extends Controller
{
    public function index()
    {
        $guru_kelas = P10NilaiGuruKelas::with(['guru', 'kelas'])->get();
        return view('guru_kelas.index', compact('guru_kelas'));
    }

    public function create()
    {
        $guru = P10NilaiGuru::all();
        $kelas = P10NilaiKelas::all();
        return view('guru_kelas.create', compact('guru', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:p10_nilai_guru,id',
            'kelas_id' => 'required|exists:p10_nilai_kelas,id',
        ]);

        P10NilaiGuruKelas::create($request->all());
        return redirect()->route('guru-kelas.index')->with('success', 'Guru berhasil ditugaskan ke kelas');
    }

    public function destroy($id)
    {
        $gk = P10NilaiGuruKelas::findOrFail($id);
        $gk->delete();
        return redirect()->route('guru-kelas.index')->with('success', 'Data berhasil dihapus');
    }
}