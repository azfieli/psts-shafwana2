<?php

namespace App\Http\Controllers;

use App\Models\P10NilaiGuruMapel;
use App\Models\P10NilaiGuru;
use App\Models\P10NilaiMapel;
use Illuminate\Http\Request;

class P10NilaiGuruMapelController extends Controller
{
    public function index()
    {
        $guru_mapel = P10NilaiGuruMapel::with(['guru', 'mapel'])->get();
        return view('guru_mapel.index', compact('guru_mapel'));
    }

    public function create()
    {
        $guru = P10NilaiGuru::all();
        $mapel = P10NilaiMapel::all();
        return view('guru_mapel.create', compact('guru', 'mapel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:p10_nilai_guru,id',
            'mapel_id' => 'required|exists:p10_nilai_mapel,id',
        ]);

        P10NilaiGuruMapel::create($request->all());
        return redirect()->route('guru-mapel.index')->with('success', 'Guru berhasil ditugaskan ke mapel');
    }

    public function destroy($id)
    {
        $gm = P10NilaiGuruMapel::findOrFail($id);
        $gm->delete();
        return redirect()->route('guru-mapel.index')->with('success', 'Data berhasil dihapus');
    }
}