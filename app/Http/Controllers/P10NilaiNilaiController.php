<?php

namespace App\Http\Controllers;

use App\Models\P10NilaiNilai;
use App\Models\P10NilaiSiswa;
use App\Models\P10NilaiMapel;
use App\Models\P10NilaiGuru;
use Illuminate\Http\Request;

class P10NilaiNilaiController extends Controller
{
    public function index()
    {
        $nilai = P10NilaiNilai::with(['siswa', 'mapel', 'guru'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $siswa = P10NilaiSiswa::all();
        $mapel = P10NilaiMapel::all();
        $guru = P10NilaiGuru::all();
        return view('nilai.create', compact('siswa', 'mapel', 'guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'guru_id' => 'required',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        P10NilaiNilai::create($request->all());
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil disimpan');
    }
}